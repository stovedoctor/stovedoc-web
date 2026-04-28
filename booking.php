<?php 
    $page_title = "Patient Intake | The Stove Doc"; 
    include 'header.php'; 
?>

<section class="topheader-vid" style="background: #000; padding: 40px 0; border-bottom: 1px solid #333;">
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo" style="height: 180px; width: auto;">
        <div class="tray-header-box">
            <h1>Detailed Patient Intake</h1>
            <div class="pill-text-unit">Provide All Data <span class="mobile-break"></span> Before the Procedure</div>
        </div>
    </div>
</section>

<main class="main-container">
    <section class="section-wrapper" style="margin: 40px auto; max-width: 850px;">
        <div class="info-card" style="padding: 30px; border-top: 5px solid var(--flame);">
            
            <h2 style="margin-top: 0; color: #fff;">CLINIC INTAKE</h2>
            <div class="doc-note" style="border-color: #ff0000; background: rgba(255,0,0,0.1); margin-bottom: 25px;">
                <strong style="color: #ff0000;">STRICT PROTOCOL:</strong> I specialize in Pellet, Gas, and Wood **Heating** appliances. I do <u>NOT</u> Troubleshoot cook stoves, ranges, or ovens. 
            </div>

           <form action="process_intake.php" method="POST" enctype="multipart/form-data" style="margin-top: 25px;">
    <input type="hidden" name="MAX_FILE_SIZE" value="20971520">

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 20px;">
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">FULL NAME*</label>
            <input type="text" name="name" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
        </div>
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">EMAIL ADDRESS* (FOR CALENDAR INVITE)</label>
            <input type="email" name="email" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 20px;">
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">CELL NUMBER*</label>
            <input type="tel" name="phone" placeholder="Can I text you at this number?" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
        </div>
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">FUEL TYPE*</label>
            <select name="fuel_type" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                <option value="">-- Select Fuel --</option>
                <option value="Pellet">Pellet</option>
                <option value="Gas/Propane">Gas / Propane</option>
                <option value="Wood">Wood (Heating Only)</option>
            </select>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 20px;">
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">APPLIANCE BRAND*</label>
            <select name="brand" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                <option value="">-- Select Brand --</option>
                <option value="Whitfield">Whitfield</option>
                <option value="Enviro">Enviro / Hudson River</option>
                <option value="Harman">Harman</option>
                <option value="Avalon">Avalon</option>
                <option value="Lopi">Lopi / FPX / Travis Industries</option>
                <option value="Quadra-Fire">Quadra-Fire</option>
                <option value="Pelpro">Pelpro</option>
                <option value="Heatilator">Heatilator</option>
                <option value="Kozy Heat">Kozy Heat</option>
                <option value="Pellet Master">Pellet Master</option>
                <option value="Pacific Energy">Pacific Energy</option>
                <option value="US Stove">US Stove</option>
                <option value="Heat & Glo">Heat & Glo</option>
                <option value="Vermont Castings">Vermont Castings</option>
                <option value="Regency">Regency</option>
                <option value="Majestic">Majestic</option>
                <option value="Breckwell">Breckwell</option>
                <option value="Blaze King">Blaze King</option>
                <option value="Jotul">Jotul</option>
                <option value="Other">OTHER (Describe in Notes)</option>
            </select>
        </div>
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">MODEL NAME/NUMBER*</label>
            <input type="text" name="brand_model" placeholder="e.g. Advantage II or M55" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
        </div>
        <div>
            <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">SERIAL NUMBER*</label>
            <input type="text" name="serial" placeholder="Check the safety label" required style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
        </div>
    </div>

    <div style="margin-bottom: 20px; padding: 20px; background: rgba(255,102,0,0.05); border: 1px dashed var(--flame); border-radius: 8px;">
    <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">"CRIME SCENE" PHOTOS (OPTIONAL)</label>
    <p style="font-size: 0.85rem; color: #aaa; margin-bottom: 12px; line-height: 1.4;">
        <strong>MOBILE:</strong> Tap the button, then tap every photo you want to send.<br>
        <strong>DESKTOP (PC):</strong> Hold <u>Ctrl</u> while clicking your files.<br>
        <strong>DESKTOP (MAC):</strong> Hold <u>Command (⌘)</u> while clicking your files.
    </p>
    <input type="file" name="crime_scene_photos[]" accept="image/*" multiple style="width:100%; color:#fff;">
    <p style="font-size: 0.75rem; color: #ffffff; margin-top: 10px; font-style: italic;">
        Include: Firebox, Exterior, UL Label, Venting/Cap, or Trouble Codes.
    </p>
</div>

    <div style="margin-bottom: 30px;">
        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--flame);">DETAILED TROUBLESHOOTING NOTES*</label>
        <textarea name="notes" rows="6" required placeholder="What is it doing (or not)? Give light codes (e.g. 2 short, 1 long blink), soot color (black/gray/brown), or issues like unburned pellets or lazy flames. Gas: Pilot on but no main burner?" style="width:100%; padding:14px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;"></textarea>
    </div>

    <button type="submit" class="book-btn" style="width:100%; border:none; cursor:pointer; font-size: 1.4rem; padding: 20px !important; display: flex; align-items: center; justify-content: center; gap: 15px;">
        SUBMIT CASE FOR TROUBLESHOOTING
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
    </button>
</form>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>