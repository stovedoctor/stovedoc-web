<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hearthtools@gmail.com";
    $from_email = "rod@hearthtools.com"; 
    $display_name = "The Stove Doc"; // Professional sender name
    
    // 1. Capture and Sanitize
    $user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $user_name = htmlspecialchars($_POST['name']);
    $phone_raw = preg_replace('/\D/', '', $_POST['phone']); // Strips non-digits
    
    // 2. Generate Pro Case Ref: LASTNAME-PHONE4 (e.g., DENNY-4652)
    $name_parts = explode(' ', trim($user_name));
    $last_name = end($name_parts);
    $clean_last_name = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $last_name));
    $last_four = substr($phone_raw, -4);
    $case_ref = $clean_last_name . "-" . $last_four;

    // 3. Subject Lines
    $subject = "INTAKE: " . $case_ref . " [" . $_POST['brand'] . " " . $_POST['brand_model'] . "]";
    $user_subject = "Case #" . $case_ref . ": Troubleshooting Intake - The Stove Doc";

    // 4. Build Data Summary
    $message_data = "NEW PATIENT TROUBLESHOOTING INTAKE\n";
    $message_data .= "CASE REFERENCE: " . $case_ref . "\n";
    $message_data .= "------------------------------------\n";
    $message_data .= "Name: " . $user_name . "\n";
    $message_data .= "Email (For Invite): " . $user_email . "\n";
    $message_data .= "Phone: " . $_POST['phone'] . "\n";
    $message_data .= "Fuel Type: " . $_POST['fuel_type'] . "\n";
    $message_data .= "Brand: " . $_POST['brand'] . "\n";
    $message_data .= "Model: " . $_POST['brand_model'] . "\n";
    $message_data .= "Serial: " . $_POST['serial'] . "\n\n";
    $message_data .= "SYMPTOMS/NOTES:\n" . $_POST['notes'] . "\n";

    // 5. Setup Headers for YOUR Email (Attachments)
    $boundary = md5(time());
    $headers = "From: $display_name <$from_email>\r\n";
    $headers .= "Reply-To: $user_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

    $body = "--" . $boundary . "\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message_data . "\r\n";

    // 6. Handle Photo Attachments
    if (isset($_FILES['crime_scene_photos'])) {
        foreach ($_FILES['crime_scene_photos']['tmp_name'] as $key => $tmp_name) {
            if ($_FILES['crime_scene_photos']['error'][$key] == UPLOAD_ERR_OK) {
                $file_name = $_FILES['crime_scene_photos']['name'][$key];
                $file_size = $_FILES['crime_scene_photos']['size'][$key];
                $file_type = $_FILES['crime_scene_photos']['type'][$key];

                $handle = fopen($tmp_name, "r");
                $content = fread($handle, $file_size);
                fclose($handle);
                $encoded_content = chunk_split(base64_encode($content));

                $body .= "--" . $boundary . "\r\n";
                $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
                $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
                $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
                $body .= $encoded_content . "\r\n";
            }
        }
    }
    $body .= "--" . $boundary . "--";

    // 7. Send to Rod
    if (mail($to, $subject, $body, $headers)) {
        
        // 8. Send "Receipt" Copy to User
        $user_receipt = "Hello $user_name,\n\nThis is a copy of your submission to The Stove Doc for Case #$case_ref.\n\n" . $message_data;
        $user_receipt .= "\n------------------------------------\n";
        $user_receipt .= "I am reviewing your case now. Please watch your email/text for a Google Calendar invite or follow-up questions.";
        
        $user_headers = "From: $display_name <$from_email>\r\n";
        $user_headers .= "Reply-To: $from_email\r\n";
        $user_headers .= "MIME-Version: 1.0\r\n";
        $user_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $user_headers .= "X-Mailer: PHP/" . phpversion();
        
        mail($user_email, $user_subject, $user_receipt, $user_headers);

        // 9. Redirect to Success Page
        header("Location: success.php?name=" . urlencode($user_name));
        exit();
    } else {
        echo "Server error. Please email hearthtools@gmail.com directly.";
    }
}
?>