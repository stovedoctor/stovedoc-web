
<?php 
  $page_title = "The Surgical Tray test | The Stove Doc"; 
  include 'header.php'; 
?>

<section class="topheader-vid" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('handtoolsbits-lg.webp'); background-size: cover; background-position: center;">
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo">
        <div class="tray-header-box">
            <h1>The Surgical Tray</h1>
            <div class="pill-text-unit">A quick successful procedure starts <span class="mobile-break"></span> with the right instruments.</div>
        </div>
    </div>
</section>

<div class="section-wrapper" style="margin-top: 0; padding-top: 5px;">
    
    <h2 style="margin-top: 0; margin-bottom: 5px;">The Surgical Setup  TEST </h2>

    <div style="display: flex; justify-content: center; margin-top: 0;">
        <img src="tooltray-button.webp" alt="The Stove Doc Master Surgical Tray" 
             style="width: 100%; max-width: 600px; height: auto; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.8);">
    </div>

  <div class="intro-block" style="margin-top: 15px;">
        <p style="font-style: italic; color: var(--ash); font-size: clamp(0.95rem, 4vw, 1.15rem); line-height: 1.3;">
            "Preparation is the difference between a <span class="mobile-break"></span>20-minute fix and a 2-hour headache."
        </p>
    </div>
<section class="section-wrapper">
    <div class="bg-tool-card" onclick="document.getElementById('zoom-extraction').showModal()">
        <img src="handtoolsbits-lg.webp" class="card-bg-image" alt="Hardware Background">
        <div class="bg-tool-content">
            <h3 style="color: var(--flame); border-bottom: 1px solid #444; padding-bottom: 10px;">1. Hardware Extraction</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px; line-height: 1.8;">
                <li>✔️ <strong>Torx T20:</strong> The "Master Key" for Enviro and specialized panels.</li>
                <li>✔️ <strong>Allen (Hex) Set:</strong> Standard & Metric. Critical for auger motor set-screws and Winslow P40 teardowns.</li>
                <li>✔️ <strong>#2 Robertson:</strong> Square drive for Canadian and vintage hardware.</li>
                <li>✔️ <strong>Nut Drivers & Wrenches:</strong> 1/4", 5/16", 11/32", 3/8", 7/16", 1/2" (SAE) + 9, 10, 12mm (Metric).</li>
                <li>✔️ <strong>Surgical Forceps (Pliers):</strong> Channel Locks and needle-nose.</li>
                <li>✔️ <strong>Adjustable Spanner:</strong> 8" or 10" crescent for non-standard gas line fittings.</li>
                <li>✔️ <strong>1/4" Hex Shank Kit:</strong> Universal bits with extensions for deep-chassis access.</li>
                <li>✔️ <strong>Impact Driver:</strong> For extracting heat-cycled screws and nuts quickly.</li>
            </ul>
            <p style="font-size: 0.85rem; color: var(--flame); font-style: italic; margin-top: 15px;">
                <strong>Doctor's Tip:</strong> Ensure you have at least a 6" extension for your driver; many stove bolts are buried deep where standard tools can't reach.
            </p>
        </div>
        <dialog id="zoom-extraction" class="zoom-modal" onclick="event.stopPropagation(); this.close()">
            <img src="handtoolsbits-lg.webp" alt="Zoomed Hardware">
        </dialog>
    </div>
</section>

<section class="section-wrapper">
    <div class="bg-tool-card" onclick="document.getElementById('zoom-vitals').showModal()">
        <img src="electrical-lg.webp" class="card-bg-image" alt="Vitals Background">
        <div class="bg-tool-content">
            <h3 style="color: var(--flame); border-bottom: 1px solid #444; padding-bottom: 10px;">2. Vitals & Diagnostics (EKG)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">
                Critical for when a <strong>gas fireplace pilot will not light</strong> or your pellet stove 'logic' stops communicating.
            </p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li>✔️ <strong>Digital Multimeter:</strong> Your stethoscope for <strong>thermopile testing</strong> (True RMS preferred).</li>
                <li>✔️ <strong>The Jumper Kit:</strong> Diagnostic "bypass" to see if a sensor has flatlined.</li>
                <li>✔️ <strong>Wiring Tools:</strong> Standard cutters, strippers, and crimpers. Just don't butcher the job.</li>
                <li>✔️ <strong>High-Temp Spares:</strong> A staged tray of butt connectors and Male/Female spade terminals for "transplants."</li>
                <li>✔️ <strong>Non-Contact Probe:</strong> (Optional) Nice for a quick safety "pulse" check, but not strictly required.</li>
            </ul>
        </div>
        <dialog id="zoom-vitals" class="zoom-modal" onclick="event.stopPropagation(); this.close()">
            <img src="electrical-lg.webp" alt="Zoomed Vitals">
        </dialog>
    </div>
</section>

<section class="section-wrapper">
    <div class="bg-tool-card" onclick="document.getElementById('zoom-support').showModal()">
        <img src="brush-lg.webp" class="card-bg-image" alt="Support Background">
        <div class="bg-tool-content">
            <h3 style="color: var(--flame); border-bottom: 1px solid #444; padding-bottom: 10px;">3. Surgical Support Gear</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">Maintaining a sterile field and performing "External Decontamination" on extracted components.</p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li>✔️ <strong>LED Headlamp:</strong> Hands-free illumination is mandatory for deep cavity inspections.</li>
                <li>✔️ <strong>Ash-Ready Shop Vac:</strong> With a small diameter hose attachment for reaching tight "night spots."</li>
                <li>✔️ <strong>Surgical Brushes:</strong> A variety of sizes for "scrubbing" components before they go back in.</li>
                <li>✔️ <strong>External Cleaning:</strong> High-volume blower or compressor (used outside) to clear dust bunnies.</li>
                <li>✔️ <strong>Surgical Drape:</strong> A heavy-duty drop cloth to protect the home and keep the field clean.</li>
                <li>✔️ <strong>The Uplink:</strong> Strong 5G or Wi-Fi signal at the hearth so the Doctor has a clear "view" of the procedure.</li>
            </ul>
        </div>
        <dialog id="zoom-support" class="zoom-modal" onclick="event.stopPropagation(); this.close()">
            <img src="brush-lg.webp" alt="Zoomed Support Gear">
        </dialog>
    </div>
</section>
<section class="section-wrapper" style="border-top: 1px solid #333; margin-top: 30px; padding-top: 20px;">
    
    <div style="max-width: 850px; margin: 0 auto; text-align: center;">

        <a href="telehearth_booking.php" class="info-card" style="text-decoration: none; border: 3px solid var(--flame); display: block; padding: 25px 20px 40px 20px; background: rgba(255, 102, 0, 0.05); transition: all 0.3s ease;">
            
            <h2 style="color: var(--flame); font-size: clamp(1.6rem, 5vw, 2.2rem); margin-top: 0; margin-bottom: 10px; line-height: 1.1;">
                Got the Gear? <span class="mobile-break"></span> Now Get the Guide.
            </h2>
            
            <p style="text-align: center; font-size: clamp(0.9rem, 3vw, 1.1rem); color: #fff; margin-bottom: 20px; margin-top: 0; line-height: 1.3;">
                Owning the tools is the first step. <span class="mobile-break"></span> Knowing where to point them is the second.
            </p>

            <div style="text-align: center; margin-bottom: 15px;">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="var(--flame)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            
            <h3 style="font-size: clamp(1.2rem, 4vw, 1.6rem); margin-top: 0; color: var(--white); letter-spacing: 1px;">ENTER THE TELEHEARTH CLINIC</h3>
            <p style="text-align: center; font-size: 0.95rem; color: #ccc; margin-bottom: 25px;">
                Skip the 2-week wait. <span class="mobile-break"></span> Book your troubleshooting session now.
            </p>

            <div style="text-align: center;">
                <span class="book-btn" style="display: inline-flex; align-items: center; gap: 10px; padding: 15px 35px !important; border-radius: 6px !important; font-size: 1rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    START YOUR PROCEDURE
                </span>
            </div>
        </a>

        <div style="margin-top: 20px; color: #666; font-size: 0.85rem; font-style: italic;">
            "Stop guessing. Start fixing. Let's get your stove or fireplace burning."
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>