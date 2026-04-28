<?php 
    $page_title = "Remote Support & FAQ | The Stove Doc"; 
    include 'header.php'; 
?>
<section class="topheader-vid" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('faqheader.webp'); background-size: cover; background-position: center;">
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo">
        <div class="tray-header-box">
            <h1>Remote Support & FAQ</h1>
            <div class="pill-text-unit">Professional Insight <span class="mobile-break"></span> Before You Turn a Wrench</div>
        </div>
    </div>
</section>

<main class="main-container">

<div class="section-wrapper" style="margin-top: 20px;">
    <div class="faq-accordion" style="max-width: 900px; margin: 0 auto; width: 100%;"> 
        
        <details class="bg-tool-card faq-card">
            <summary class="bg-tool-content">
                <h3>What is a Telehearth Session?</h3>
            </summary>
            <div class="faq-content bg-tool-content">
                <p>It's a real-time technical consult where I use your phone's camera to see what I see. I diagnose the failure and tell you exactly what part to buy.</p>
            </div>
        </details>

        <details class="bg-tool-card faq-card">
            <summary class="bg-tool-content">
                <h3>Do you help with cook stoves or other appliances?</h3>
            </summary>
            <div class="faq-content bg-tool-content">
                <p>No. I specialize strictly in Pellet, Gas, and Wood heating appliances (Fireplaces, Inserts, and Free-standing stoves).</p>
            </div>
        </details>

        <details class="bg-tool-card faq-card">
            <summary class="bg-tool-content">
                <h3>Why is there a $75 fee?</h3>
            </summary>
            <div class="faq-content bg-tool-content">
                <p>You're paying over 35 years of factory-trained logic. I save you from buying expensive parts you don't need and get your heat back on the same day.</p>
            </div>
        </details>

        <details class="bg-tool-card faq-card">
            <summary class="bg-tool-content">
                <h3>What tools do I need?</h3>
            </summary>
            <div class="faq-content bg-tool-content">
                <p>A Digital Multimeter is the most important. You'll also need basic nut drivers and wrenches (1/4", 5/16", 11/32", 7/16"), screwdrivers, and a Shop Vac. 
                See the full <a href="tools2.php" style="color:var(--flame);">Pro Loadout</a> for the complete tray.</p>
            </div>
        </details>

    </div>

 <section class="section-wrapper" style="margin-bottom: 20px;">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="info-card">
            <h3>Technical Readiness</h3>
            <p style="text-align: justify; hyphens: auto; -webkit-hyphens: auto; margin-top: 15px;">
    Please review the <a href="tools2.php" style="color: var(--flame); font-weight: bold;">Pro Tool Loadout</a> 
    for the minimum requirements needed before we begin your diagnostic session. 
    At a minimum, you will need a <strong>Digital Multimeter</strong> and basic hand tools 
    to perform a successful procedure.
</p>
        </div>
    </div>
</section>
</main>

<section id="booking-unlock" class="section-wrapper" style="margin: 10px auto 60px auto; max-width: 900px;">
    
    <div class="info-card" style="padding: 25px 30px 30px 30px; border-top: 3px solid var(--flame); background: rgba(255,102,0,0.05); text-align: center;">
        
        <h2 style="color: var(--flame); font-size: clamp(1.6rem, 5vw, 2.2rem); margin-top: 0; margin-bottom: 10px; line-height: 1.1;">
            STEP 2: START YOUR DIAGNOSIS
        </h2>
        
        <p style="max-width: 650px; margin: 0 auto 25px auto; color: #fff; line-height: 1.4; text-align: center;">
            By clicking below, you confirm you have reviewed the <strong>Clinic Protocols</strong> and understand that you are providing the hands and have tools/multimeter ready while I provide the expertise.
        </p>
        
        <a href="booking.php" class="book-btn" style="display: inline-flex; align-items: center; gap: 12px;">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
        <line x1="4" y1="22" x2="4" y2="15"></line>
    </svg>
    <div style="text-align: left;">
        <span style="display: block; line-height: 1;">OPEN BOOKING FORM</span>
        <span class="btn-sub" style="opacity: 0.7;">Final Step: Provide Your Info</span>
    </div>
</a>

        <div style="margin-top: 15px; color: #ffffff; font-size: 0.9rem; font-style: italic;">
            "Stop guessing. Start fixing. Let's get your heat back on today."
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>