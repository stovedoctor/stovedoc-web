<?php 
$v = filemtime('style.css'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic Error | The Stove Doc Beta</title>
    <link rel="stylesheet" href="style.css?v=<?php echo $v; ?>">
    <meta name="darkreader-lock"> 
</head>
<body>

<?php include 'nav.php'; ?>

<section class="topheader-vid" style="height: 40vh; display: flex; align-items: center; justify-content: center;">
    <div class="header-content">
        <h1 style="font-size: 4rem; margin-bottom: 10px;">CODE 404</h1>
        
        <div class="tray-header-box">
            <div class="pill-text-unit">
                <strong style="color: var(--flame);">YOU REACHED THE END OF THE INTERNET!</strong>
                <span class="mobile-break"></span>
                The page you're looking for has changed or is under construction.
            </div>
        </div>
        
        <div class="cta-section" style="margin-top: 30px;">
            <a href="index.php" class="book-btn" style="padding: 10px 25px;">
                RETURN TO HOMEBASE
            </a>
        </div>
    </div>
</section>

<div class="section-wrapper" style="margin-top: -50px; z-index: 10;">
    <div class="box-base look-smoky accent-top" style="max-width: 800px; text-align: left;">
        <h3 style="color: var(--flame); text-transform: uppercase;">Beta Site Notice</h3>
        <p>You’ve reached a dead-end but you can U turn. This is a <strong>Development & Testing Site</strong>. Some links are still being piped in, and some pages haven't been scrubbed yet.</p>
        
        <div class="quote-highlight" style="margin: 20px 0;">
            "If you found a Bleeder, help the Doctor plug it."
        </div>

        <p><strong>Found a bug or a typo?</strong> Please snap a screenshot and send your suggestions directly to the Doctor. Your feedback ensures the final version is as sharp as a fresh T20 bit.</p>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="index.php" class="cta-btn">Return to Surgery (Home)</a>
            <p style="margin-top: 15px; font-size: 1.2rem; color: #888;">Or email suggestions to: <a href="mailto:hearthtools@gmail.com?subject=Beta Site Feedback - [404 Error]" style="color: var(--flame); text-decoration: underline;">hearthtools@gmail.com</a></p>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>