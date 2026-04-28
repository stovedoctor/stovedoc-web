<?php 
    $page_title = "Intake Received | The Stove Doc"; 
    include 'header.php'; 
    $customer_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Patient";
?>

<section class="topheader-vid" style="background: #000; padding: 60px 0; border-bottom: 2px solid var(--flame);">
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo" style="height: 180px; width: auto;">
        <h1>Uplink Established</h1>
    </div>
</section>

<main class="main-container">
    <section class="section-wrapper" style="margin: 40px auto; max-width: 700px; text-align: center;">
        <div class="info-card" style="padding: 40px; border-top: 5px solid #00ff00;">
            <h2 style="color: #fff; margin-top: 0;">THANK YOU, <?php echo strtoupper($customer_name); ?></h2>
            <p style="text-align: center; font-size: 1.1rem; color: #ccc;">
                Your troubleshooting intake and "Crime Scene" photos have been received. 
                Check your email for a copy of your data.
            </p>

            <div style="background: rgba(255,102,0,0.1); border: 1px solid var(--flame); padding: 25px; border-radius: 8px; margin: 30px 0;">
                <h3 style="margin-top: 0;">FINAL STEP: BOOK YOUR SESSION</h3>
                <p style="text-align: center; color: #fff;">
                    Pick your time slot on the Doctor's calendar below.
                </p>
                <a href="YOUR_BOOKING_LINK_HERE" class="book-btn" style="width: 100%; padding: 20px !important;">
                    OPEN CLINIC CALENDAR
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>