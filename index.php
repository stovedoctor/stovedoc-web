<?php 
    $page_title = "Expert Diagnostics for Stoves & Fireplaces | The Stove Doc"; 
    include 'header.php'; 
?>
<section class="topheader-vid">
    <video autoplay muted loop playsinline class="bg-video">
        <source src="timeline2.mp4" type="video/mp4">
    </video>
<div class="header-content">
    <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo">
    <h1>Expert Diagnostics for Stoves & Fireplaces</h1>
    <p>I’m here to get your hearth appliance<br>running—not sell you parts.</p>
</div>
</section>


<section class="section-wrapper">
    <div class="grid-3">
        <div class="info-card">
            <h3>THE DOCTOR'S DIAGNOSIS</h3>
            <p>I provide 35+ years of factory-trained logic to identify the root cause so you can stay warm and not thin your wallet.</p>
        </div>

        <div class="info-card">
            <h3>YOU PROVIDE THE HANDS</h3>
            <p>I guide your <strong>Field Tech</strong> —whether it's you or a handy neighbor—to get the repair done right.</p>
        </div>

        <div class="info-card">
            <h3>THE $75 CONSULT</h3>
            <p>Skip the 2-week wait. Book a session and get your heat back on today.</p>
        </div>
        
    </div>
</section>

<section class="section-wrapper">
    <h2 style="margin-bottom: 5px;">Master Class Video Sample Library</h2>
    <div class="video-wrapper">
        <div class="scroll-arrow arrow-left" onclick="document.getElementById('vid-tray').scrollBy({left: -480, behavior: 'smooth'})">&#10094;</div>
        <div class="scroll-arrow arrow-right" onclick="document.getElementById('vid-tray').scrollBy({left: 480, behavior: 'smooth'})">&#10095;</div>
        
        <div class="video-library" id="vid-tray">
            <div class="video-box">
                <iframe src="https://www.youtube.com/embed/mt78bVBRHD4" allowfullscreen></iframe>
            </div>
            <div class="video-box">
                <iframe src="https://www.youtube.com/embed/AuONK6MYRXw" allowfullscreen></iframe>
            </div>
            <div class="video-box">
                <iframe src="https://www.youtube.com/embed/Jdl4a3elzGA" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

    <section class="section-wrapper">
    <h2 style="margin-bottom: 5px;">THE DOC'S SYMPTOM SPOTTERS</h2>
    
    <div class="intro-block">
        <p><strong>Don't guess and waste money on parts.</strong>
        <span class="mobile-break"></span> 
        Spot the symptom, then book the Doc.</p>
    </div>

</section>
    <div class="spotter-wrapper">
<div class="scroll-arrow arrow-left" onclick="document.getElementById('spot-tray').scrollBy({left: -480, behavior: 'smooth'})">&#10094;</div>
<div class="scroll-arrow arrow-right" onclick="document.getElementById('spot-tray').scrollBy({left: 480, behavior: 'smooth'})">&#10095;</div>        <div class="spotter-tray" id="spot-tray">
            <div class="spotter-card">
                <h3>PELPRO</h3>
                <p><strong>SYMPTOM:</strong> Blower hums but won't spin.</p>
                <p><strong>THE REALITY:</strong> It’s rarely a dead motor. There’s a specific voltage drop or a simple repair. I’ll help you find it in minutes.</p>
            </div>
            <div class="spotter-card">
                <h3>WHITFIELD</h3>
                <p><strong>SYMPTOM:</strong> "Lazy" flame even after a deep clean.</p>
                <p><strong>THE REALITY:</strong> You’ve missed the critical hidden chambers. I’ll show you exactly where the ash is hiding.</p>
            </div>
            <div class="spotter-card">
                <h3>ENVIRO</h3>
                <p><strong>SYMPTOM:</strong> Blower comes on, but no feed AND ignition.</p>
                <p><strong>THE REALITY:</strong> Before you drop $400 on a board, let's test a safety switch. 98% of the time, the board is fine.</p>
            </div>
            <div class="spotter-card">
                <h3>HARMAN</h3>
                <p><strong>SYMPTOM:</strong> Status light blinks 3 times and shuts down.</p>
                <p><strong>THE REALITY:</strong> Your ESP probe is "blind." We'll verify if the sensor is actually dead or just lying to the board.</p>
            </div>
            </div>
    </div>
</section>
<section class="cta-section">
    <a href="telehearth_booking.php" class="book-btn">
        BOOK YOUR $75 DIAGNOSIS NOW
        <br>
        <span class="btn-sub">STOP GUESSING. START FIXING.</span>
    </a>
</section>
<div class="doc-note">
    <strong style="color: var(--flame);">DOCTOR'S NOTE:</strong> I specialize in Pellet, Gas, and Wood Heating Appliances. 
    I do not service cook stoves or ranges.
</div>

<?php include 'footer.php'; ?>
