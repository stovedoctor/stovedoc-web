
<?php 
// version 6 3:44pm 4/10/2026 
$v = filemtime('style.css'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Surgical Tool Tray | The Stove Doc</title>
    <link rel="stylesheet" href="style.css?v=<?php echo $v; ?>">
    <meta name="darkreader-lock"> 
</head>

<body>
<?php include 'nav.php'; ?>
    
    
    
<section class="hero-header hero-tools">
    <div class="hero-overlay-content tray-header-box">
        <h1 style="color:#fff; margin:0; text-transform:uppercase; font-size: 2.2rem; text-shadow: 3px 3px 5px #000;">
            The Surgical Tray
        </h1>
        
        <div class="pill-text-unit" style="color: #ff8c00; font-size: 1.1rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-top: 10px; text-shadow: 2px 2px 4px #000;">
            A quick successful procedure starts with the right instruments.<br> 
            Stage your tools before the Doctor scrubs in for your session.
        </div>
    </div>
</section>

<div id="equipment-list" class="section-wrapper" style="max-width: 1100px; margin: 40px auto;">
    
    <div class="master-photo-container">
        <h2 style="color:var(--flame); text-transform:uppercase; margin-bottom:20px;">The Surgical Setup</h2>
        <img src="tooltray-button.webp" alt="The Stove Doc Master Surgical Tray">
   <div class="doc-order">
    "Preparation is the difference between a 20-minute fix and a 2-hour headache."
</div>    
  
</div>
    <div class="tool-row">
        <div class="box-base look-solid">
            <h3 style="color: var(--flame); border-bottom: 1px solid #333; padding-bottom: 10px;">1. Hardware Extraction</h3>
            <ul style="list-style: none; padding: 0; line-height: 1.6;">
                <li><strong>Torx T20:</strong> The "Master Key" for Enviro and specialized panels.</li>
                <li><strong>Allen (Hex) Set:</strong> Standard & Metric. Critical for auger motor set-screws and Winslow P40 teardowns</li>
                <li><strong>#2 Robertson:</strong> Square drive for Canadian and vintage hardware.</li>
                <li><strong>Nut Drivers & Wrenches:</strong> 1/4", 5/16", 11/32", 3/8", 7/16", 1/2"  (SAE) + 9, 10, 12mm (Metric).</li>
                <li><strong>Surgical Forceps (Pliers):</strong> Surgical Forceps: Channel Locks and needle-nose.</li>
                <li><strong>Adjustable Spanner:</strong> 8" or 10" crescent for non-standard gas line fittings.</li>
                <li><strong>1/4" Hex Shank Kit:</strong> Universal bits with extensions for deep-chassis access.</li>
                <li><strong>Impact Driver:</strong> For extracting heat-cycled screws and nuts quickly.</li>
            </ul>
            <p style="font-size: 0.85rem; color: var(--flame); font-style: italic; margin-top: 10px;">
                <strong>Doctor's Tip:</strong> Ensure you have at least a 6" extension for your driver; many stove bolts are buried deep where standard tools can't reach.
            </p>
        </div>
        <div class="tool-photo">
            <img src="handtoolsbits-sm.webp" alt="Stove Doc Tools" onclick="openDiagnostic('handtoolsbits-lg.webp')" style="cursor:zoom-in;">
        </div>
    </div> <div class="tool-row">
        <div class="box-base look-solid">
            <h3 style="color:var(--flame); border-bottom: 2px solid #333; padding-bottom: 10px;">2. Vitals & Diagnostics (EKG)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">
                Critical for when a <strong>gas fireplace pilot will not light</strong> or your pellet stove 'logic' stops communicating.
            </p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li><strong>Digital Multimeter:</strong> Your stethoscope for <strong>thermopile testing</strong> and millivolt readings. (True RMS preferred).</li>
                <li><strong>The Jumper Kit:</strong> Short wire with male spades on each end. A diagnostic "bypass" to see if a sensor has flatlined.</li>
                <li><strong>Wiring Tools:</strong> Standard cutters, strippers, and crimpers. Just don't butcher the job.</li>
                <li><strong>High-Temp Spares:</strong> A staged tray of butt connectors and Male/Female spade terminals for "transplants."</li>
                <li><strong>Non-Contact Probe:</strong> (Optional) Nice for a quick safety "pulse" check, but not strictly required for the procedure.</li>
            </ul>
        </div>
        <div class="tool-photo">
            <img src="electrical-sm.webp" alt="Stove Doc Tools" onclick="openDiagnostic('electrical-lg.webp')" style="cursor:zoom-in;">
        </div>
    </div> <div class="tool-row">
        <div class="box-base look-solid">
            <h3 style="color:var(--flame); border-bottom: 2px solid #333; padding-bottom: 10px;">3. Surgical Support Gear</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">Maintaining a sterile field and performing "External Decontamination" on extracted components.</p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li><strong>LED Headlamp:</strong> Hands-free illumination is mandatory for deep cavity inspections.</li>
                <li><strong>Ash-Ready Shop Vac:</strong> With a small diameter hose attachment for reaching tight "night spots."</li>
                <li><strong>Surgical Brushes:</strong> A variety of sizes for "scrubbing" components before they go back in.</li>
                <li><strong>External Cleaning:</strong> A small high-volume blower or compressor (used outside) to clear dust bunnies from motors and electronics.</li>
                <li><strong>Surgical Drape:</strong> A heavy-duty drop cloth to protect the home and keep the field clean.</li>
                <li><strong>The Uplink:</strong> Strong 5G or Wi-Fi signal at the hearth so the Doctor has a clear "view" of the procedure.</li>
            </ul>
        </div>
        <div class="tool-photo">
            <img src="brush-sm.webp" alt="Stove Doc Tools" onclick="openDiagnostic('brush-lg.webp')" style="cursor:zoom-in;">
        </div>
    </div> <div style="text-align:center; margin: 60px 0;">
        <a href="telehearth_booking.php" class="cta-btn" style="font-size: 1.3rem; padding: 15px 40px; text-decoration: none; background: var(--flame); color: #fff; border-radius: 5px; font-weight: bold; text-transform: uppercase;">
            Book the Doctor Now
        </a>
    </div>

</div>

	
<?php include 'footer.php'; ?>
    
    <div id="tool-lightbox" style="display:none; position:fixed; z-index:9000; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); align-items:center; justify-content:center; cursor:pointer;" onclick="this.style.display='none'">
    <span style="position:absolute; top:20px; right:30px; color:#fff; font-size:50px; font-weight:bold; line-height:1;">&times;</span>
    <img id="lightbox-img" src="" style="max-width:90%; max-height:90%; border:2px solid var(--flame); border-radius:8px; box-shadow: 0 0 40px rgba(0,0,0,1);">
</div>

<script>
function openDiagnostic(imgUrl) {
    document.getElementById('lightbox-img').src = imgUrl;
    document.getElementById('tool-lightbox').style.display = 'flex';
}
</script>

</body>
</html>