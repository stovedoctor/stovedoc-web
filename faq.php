<?php $v = filemtime('style.css'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | The Stove Doc. - Expert Stove Repair by hearthtools</title>
    <link rel="stylesheet" href="style.css?v=<?php echo $v; ?>">
     <meta name="darkreader-lock"> 
</head>
<body>

<?php include 'nav.php'; ?>
    
    
<section class="hero-video-area hero-compact">
    <video autoplay muted loop playsinline class="bg-video">
        <source src="timeline2.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="main-body-logo">
        <div class="tray-header-box box-base look-solid" style="padding: 10px 25px !important; border: 2px solid var(--flame); border-radius: 50px;">
            <h2 style="color:#fff; text-transform:uppercase; letter-spacing: 2px; margin:0;">Frequently Asked Questions</h2>
        </div>
    </div>
</section>

<div class="section-wrapper" style="margin-top: 60px;">
    <div class="faq-accordion" style="max-width: 900px; margin: 0 auto; width: 100%;"> 
        
        <details class="box-base look-solid accent-left">
            <summary>What is a Telehearth Session?</summary>
            <div class="faq-content">It's a real-time technical consult where I use your phone's camera to see what I see. I diagnose the failure and tell you exactly what part to buy.</div>
        </details>

        <details class="box-base look-solid accent-left">
            <summary>Do you fix cook stoves?</summary>
            <div class="faq-content">No. I specialize strictly in Pellet, Gas, and Wood heating appliances (Fireplaces, Inserts, and Free-standing stoves).</div>
        </details>

        <details class="box-base look-solid accent-left">
            <summary>Why is there a $75 fee?</summary>
            <div class="faq-content">You're paying for 36 years of factory-trained logic. I save you from buying expensive parts you don't need and get your heat back on the same day.</div>
        </details>

        <details class="box-base look-solid accent-left">
    <summary>What tools do I need?</summary>
    <div class="faq-content">
        A Digital Multimeter is the most important. You'll also need basic nut drivers and wrenches (1/4", 5/16", 11/32", 7/16"), screwdrivers, and a Shop Vac. 
        See the full <a href="tools2.php" style="color:var(--flame); font-weight:bold; text-decoration:underline;">Pro Loadout</a> for the complete tray.
    </div>
</details>

        <details class="box-base look-solid accent-left">
            <summary>How do I prepare?</summary>
            <div class="faq-content">Have your stove's access panels open and your Multimeter ready. Make sure you have a strong signal at the stove.</div>
        </details>

        <details class="box-base look-solid accent-left">
            <summary>Can you help me install parts?</summary>
            <div class="faq-content">Yes. The Guided Repair session ($149) is specifically for walking you through the actual installation and calibration of new components.</div>
        </details>

    </div>

    <div style="margin: 40px auto; text-align: center;">
        <a href="telehearth_booking.php" class="cta-btn">I'M READY — BOOK A SESSION</a>
    </div>
</div>

<section class="section-wrapper">
    <h2 style="color: var(--flame); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 40px;">Required Diagnostic Gear</h2>
    <div class="grid-3">
        <a href="tools2.php" class="box-base look-smoky accent-top" style="text-decoration: none;">
            <h3 style="color:var(--flame);">Electrical Tools</h3>
            <p><strong>Digital Multimeter:</strong> This is non-negotiable. We need to test AC/DC voltage and Continuity.</p>
        </a>
        <a href="tools2.php" class="box-base look-smoky accent-top" style="text-decoration: none;">
            <h3 style="color:var(--flame);">The "Holy Trinity"</h3>
            <p>Standard nut drivers (<strong>1/4", 5/16", 11/32", 3/8"</strong>) are a must for most repairs.</p>
        </a>
        <a href="tools2.php" class="box-base look-smoky accent-top" style="text-decoration: none;">
            <h3 style="color:var(--flame);">Wiring & Connectors</h3>
            <p>Keep <strong>Spade and Butt connectors</strong> nearby to fix factory wiring on the spot.</p>
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>