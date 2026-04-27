
<?php 
// links.php - The Stove Doc Affiliate & Action Gallery
$v = filemtime('style.css'); 
$img_v = time(); // The "Nuclear" option for testing images
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Links & Gear | The Stove Doc</title>
    <link rel="stylesheet" href="style.css?v=<?php echo $v; ?>">
    <meta name="darkreader-lock"> 
</head>

<body>
<?php include 'nav.php'; ?>

  <section class="hero-header hero-tools hero-compact">
    <div class="hero-overlay-content tray-header-box">
        <h1 style="color:#fff; margin:0; text-transform:uppercase; font-size: 2.2rem; text-shadow: 3px 3px 5px #000;">
            The Gear List
        </h1>
        <div class="pill-text-unit" style="color: #ff8c00; font-size: 1.1rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-top: 10px; text-shadow: 2px 2px 4px #000;">
            Field-tested instruments for Gas & Pellet service. <br> 
            <span>"Buy it once, use it for a career."</span>
        </div>
    </div>
</section>
 <div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        Nut Drivers
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="flipstick_300.webp?v=<?php echo $img_v; ?>" 
             srcset="flipstick_300.webp?v=<?php echo $img_v; ?> 400w, flipstick_300.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px"
             alt="Klein 65129 Flipstick Action" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="test-stamp" style="border-color: var(--flame); color: var(--flame); margin-left: 0;">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 65129 2-in-1 Flip Nut Driver</h3>
        <p style="margin-bottom: 10px;">
            <strong>The "Long Flip Stick":</strong> This is the 6-inch version. One tool handles 90% of the fasteners on a Travis, Pellet Master, Regency and many more. The magnetic tips switch from 1/4" to 5/16" with a quick push-pull.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Keep in your pocket or your tool box, you aren't doing it without this reach."
        </div>
        <a href="https://amzn.to/48FyqRH" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div> 

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="hollow_drivers_full.webp?v=<?php echo $img_v; ?>" 
             srcset="hollow_drivers_mb.webp?v=<?php echo $img_v; ?> 400w, hollow_drivers_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein Hollow Shaft Nut Drivers" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Drivers</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">6-Inch Hollow-Shaft Drivers</h3>
        <p style="margin-bottom: 5px;">
            <strong>The First Grab:</strong> One of the first tools out of the bag on every job. The 6-inch hollow shaft is the perfect length to clear long studs and reach buried fasteners. 11/32", 3/8", 7/16 and 1/2" are a must have.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 15px 0; font-size: 0.9rem;">
            "Essential for gas or pellet service. If you're working on a Travis or fireplace blower mount, that 11/32 is non-negotiable."
        </div>
        <div class="dropdown-container" style="margin-bottom: 15px;">
            <label style="font-size: 0.8rem; color: #888; display: block; margin-bottom: 5px;">SELECT SIZE:</label>
            <select id="hollow-driver-select" onchange="document.getElementById('hollow-cta').href = this.value" style="width:100%; padding:10px; background:#111; color:#fff; border:1px solid #444; border-radius: 4px; cursor: pointer;">
                <option value="https://amzn.to/4txa1Ws">11/32" Combustion Blower motor hub</option>
                <option value="https://amzn.to/4tcjByA">3/8" Blue (Convection Blowers)</option>
                <option value="https://amzn.to/4c3SOyf">7/16" Brown (Blower Mounts)</option>
                <option value="https://amzn.to/41tJQnS">1/2" Black (Deep Recess)</option>
            </select>
        </div>
        <a id="hollow-cta" href="https://amzn.to/4tcjByA" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="mini_ratchet_full.webp?v=<?php echo $img_v; ?>" 
             srcset="mini_ratchet_mb.webp?v=<?php echo $img_v; ?> 400w, mini_ratchet_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 600px) 400px, 600px" 
             alt="Mini Combo Dual Ratchet" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Helper</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Mini Combo Dual Ratchet</h3>
        <p style="margin-bottom: 5px;">
            <strong>¼ inch drive ratchet for tight spaces:</strong> 1/4" square drive and bit drive in one tool. High 72-tooth gear head with a spin disk for the tightest spaces where a standard driver won't fit.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Must have for most Pellet Ignitors. Don't fight the tight spaces."
        </div>
        <a href="https://amzn.to/3Q1nurk" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
<div class="section-wrapper" style="max-width: 1000px; margin: 30px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase; font-size: 1.2rem;">
        Short & Stubby Drivers
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="klein_7in1_300.webp?v=<?php echo $img_v; ?>" 
             srcset="klein_7in1_300.webp?v=<?php echo $img_v; ?> 400w, klein_7in1_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein 7-in-1 Magnetic Nut Driver" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">The Bag Saver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 7-in-1 Magnetic Nut Driver</h3>
        <p style="margin-bottom: 5px;">
            <strong>Seven sizes, one handle:</strong> This is the 32807MAG. It covers everything from 1/4" to 9/16". Rare-earth magnets hold the nut so you don't drop it into the bottom of a dark cabinet.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "If you're traveling light or doing a quick diagnostic, this one tool replaces an entire roll of drivers."
        </div>
        <a href="https://amzn.to/3Wv4vXz" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="klein_3inch_300.webp?v=<?php echo $img_v; ?>" 
             srcset="klein_3inch_300.webp?v=<?php echo $img_v; ?> 400w, klein_3inch_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein 3-Inch Nut Driver Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">The Daily Workhorse</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 3-Inch Shaft Set (7-Piece)</h3>
        <p style="margin-bottom: 5px;">
            <strong>The industry standard:</strong> When the 6-inch is too long, these 3-inch "shorties" give you the leverage you need without bottoming out against the stove walls. 
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "These are the ones you see in every pro's bag. Tough, color-coded, and they never skip."
        </div>
        <a href="https://amzn.to/3OAgpE6" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        
        <div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="southwire_300.webp?v=<?php echo $img_v; ?>" 
             srcset="southwire_300.webp?v=<?php echo $img_v; ?> 400w, southwire_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Southwire MP61 Multi-Tool" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Southwire MP61 Multi-Tool</h3>
        <p style="margin-bottom: 5px;">
            <strong>The "Swiss Army Knife" of Wiring:</strong> Strips, crimps, and shears in one heavy-duty frame. Perfect for rebuilding wire harnesses in tight pellet stove cabinets.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "If you're doing field repairs on Travis or Quadrafire connectors, this is the only tool you need in your hand."
        </div>
        <a href="https://amzn.to/3UDR5zW" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="katerk_300.webp?v=<?php echo $img_v; ?>" 
             srcset="katerk_300.webp?v=<?php echo $img_v; ?> 400w, katerk_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Katerk Bit Holders" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Shop Organization</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Katerk Magnetic Bit Holders</h3>
        <p style="margin-bottom: 5px;">
            <strong>Stop Hunting for Bits:</strong> Heavy-duty magnetic strips that keep your 1/4" bits organized and ready. Sticks to the side of the truck or the tool box.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "I use these inside the service van doors. Saves 10 minutes of digging on every single job."
        </div>
        <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
        Electrical Diagnostics
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="astro_full.webp?v=<?php echo $img_v; ?>" 
             srcset="astro_mb.webp?v=<?php echo $img_v; ?> 400w, astro_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="AstroAI 2000" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">AstroAI 2000 Count Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Reliable millivolt accuracy for homeowners:</strong> A solid budget tester for verifying continuity and basic voltage without spending a fortune.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Perfect for verifying that 175mV hot-run threshold on a pilot. If you just need to know if it works, this does it."
        </div>
        <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="cl800_full.webp?v=<?php echo $img_v; ?>" 
             srcset="cl800_mb.webp?v=<?php echo $img_v; ?> 400w, cl800_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein CL800" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein Tools CL800 Clamp Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Professional-grade TRMS meter:</strong> The "Buy it Once" tool. Includes an amp clamp for blower motors and the precise accuracy needed for sensitive modern control boards.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "The auto-ranging technology is fast and accurate. This handles every part of a high-end gas or pellet service."
        </div>
        <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
  <!-- OLD STUFF TO UPDATE -->
Scratch pad items to edit. 
<div class="section-wrapper" style="max-width: 1200px; margin: 40px auto; text-align: left;">

    <h2 class="section-title" style="color:var(--flame); margin-bottom: 30px;">I. Electrical Diagnostics</h2>
    <div class="grid-3">
        
        <div class="info-card look-solid">
            <span class="test-stamp" style="color: #00ff00; border-color: #00ff00;">Budget</span>
            <h3>AstroAI 2000</h3>
            <p>Reliable millivolt accuracy for homeowners. Perfect for verifying that 175mV hot-run threshold on a pilot without spending a fortune.</p>
            <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="width:100%; text-align:center;">View on Amazon</a>
        </div>
        
        <div class="info-card look-solid">
    <span class="test-stamp">The Best / Fast & Accurate</span>
    <h3>Klein Tools CL800 Clamp Meter</h3>
    <p>Professional-grade TRMS meter. [cite_start]The auto-ranging technology provides the precise measurements needed for sensitive modern control boards[cite: 1].</p>
    <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <span class="test-stamp" style="color: #ff9d00; border-color: #ff9d00;">Daily Workhorse</span>
    <h3>Klein Tools MM420 Multimeter</h3>
    <p>My daily "down and dirty" meter. [cite_start]600V AC/DC and 50 MOhms resistance—it handles 90% of field diagnostics with zero issues[cite: 1].</p>
    <a href="https://amzn.to/4mozwHn" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <span class="test-stamp" style="color: #00ff00; border-color: #00ff00;">Budget Essential</span>
    <h3>AstroAI 2000 Count Meter</h3>
    <p>A solid budget tester for homeowners. [cite_start]Perfect for checking continuity and basic voltage[cite: 1].</p>
    <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank">View on Amazon</a>
</div>
        
        
        

        <div class="info-card look-solid">
            <span class="test-stamp" style="color: #ff9d00; border-color: #ff9d00;">Daily Bag</span>
            <h3>Klein MM450 / MM420</h3>
            <p>The technician's workhorse. Auto-ranging and tough enough for the hearth. This is what you see me using in my field photos.</p>
            
            <div class="action-shot" style="margin-top:15px; border-top: 1px solid #333; padding-top:15px;">
                <img src="1000024395.jpg" alt="Thermopile Cold Test 3.3 Ohms" style="width:100%; border-radius:4px; cursor:zoom-in;" onclick="openDiagnostic('1000024395.jpg')">
                <p style="font-size: 0.8rem; color: #888; font-style: italic; margin-top: 5px;">
                    <strong>In Action:</strong> Cold-testing a thermopile. A reading of 3.3&Omega; (or 1.4&Omega; on some models) proves the internal coil is intact before you even light the pilot.
                </p>
            </div>
            <a href="https://amzn.to/3UE2I8o" class="cta-btn" target="_blank" style="width:100%; text-align:center; margin-top:10px;">View on Amazon</a>
        </div>

        <div class="info-card look-solid">
            <span class="test-stamp">Professional</span>
            <h3>Klein CL800 TRMS</h3>
            <p>The "Buy it Once" meter. Amp clamp for blower motors and True RMS accuracy for sensitive modern control boards.</p>
            <a href="https://amzn.to/3Zg5C4v" class="cta-btn" target="_blank" style="width:100%; text-align:center;">View on Amazon</a>
        </div>

    </div>
    
  // NUT flip stick..
<div class="case-file look-smoky">
    <h3 style="color:var(--flame);">Klein 65129 2-in-1 Flip Nut Driver</h3>
    <p><strong>The "Long Flip Stick":</strong> A magnetic tip that switches from 1/4" to 5/16" with just a push or pull. [cite_start]One 6-inch tool does 90% of the work on a pellet stove[cite: 1].</p>
    <a href="https://amzn.to/48FyqRH" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="grid-3">
    <div class="info-card look-solid">
        <h3>Klein 3/8" Hollow Shank (6")</h3>
        [cite_start]<p>A "must-have" for convection blower nuts that are tucked far back in the housing[cite: 1].</p>
        <a href="https://amzn.to/4tcjByA" target="_blank">View on Amazon</a>
    </div>
    <div class="info-card look-solid">
        <h3>Klein 7/16" Hollow Shank (6")</h3>
        [cite_start]<p>The companion to the 3/8" for structural mounts and blower brackets[cite: 1].</p>
        <a href="https://amzn.to/4c3SOyf" target="_blank">View on Amazon</a>
    </div>
    <div class="info-card look-solid">
        <h3>Klein 11/32" Hollow Shank (6")</h3>
        [cite_start]<p><strong>Travis & Combustion Specialist:</strong> Used for most combustion blower motor hubs and Travis Ind. stove blower mounts[cite: 1].</p>
        <a href="https://amzn.to/4txa1Ws" target="_blank">View on Amazon</a>
    </div>
</div>
      // Nut drivers..
    <h2 class="section-title" style="color:var(--flame); margin: 60px 0 30px 0;">II. The "Reach" Tools (Nut Drivers)</h2>
    
    <div class="case-file look-smoky">
        <h3 style="color:var(--flame);">Klein 6-Inch Hollow-Shaft Drivers</h3>
        <p><strong>The Convection Blower Specialist:</strong> Specifically, the <strong>3/8" and 7/16"</strong> drivers are non-negotiable for pulling buried convection blower nuts. The 6-inch hollow shaft clears the long studs so you aren't fighting the housing in a tight cabinet.</p>
        <a href="https://amzn.to/3UDR5zW" class="cta-btn" target="_blank">View 3/8" & 7/16" on Amazon</a>
    </div>

    <div class="grid-3" style="margin-top:20px;">
        <div class="info-card look-solid">
            <h3>Performance Tool W950</h3>
            <p>The essential backup set that actually includes the <strong>11/32"</strong> driver needed for Travis (Avalon/Lopi) blower mounts.</p>
            <a href="https://amzn.to/4czat0R" target="_blank">View Set</a>
        </div>
        <div class="info-card look-solid">
            <h3>Malco C-RHEX Flip Bits</h3>
            <p>Daily driver 1/4" and 5/16" reversible impact bits. If the magnet gets coated in soot, just flip it and wipe it clean.</p>
            <a href="https://amzn.to/4u0cbOX" target="_blank">View 2-inch</a> | <a href="https://amzn.to/41nmsbB" target="_blank">View 4-inch</a>
        </div>
    </div>

    <h2 class="section-title" style="color:var(--flame); margin: 60px 0 30px 0;">III. Specialty & Wiring</h2>
    
    <div class="tool-row">
        <div class="tool-text look-solid">
            <h3 style="color:var(--flame);">Southwire MP61 Multi-Tool</h3>
            <p>Most strippers bury the crimper in the handle. The MP61 puts it at the <strong>very tip of the nose</strong>. This is the only way to crimp a spade terminal when you're elbow-deep in a tight stove cabinet.</p>
            <a href="https://amzn.to/4mHWd9L" class="cta-btn" target="_blank">View on Amazon</a>
        </div>
        <div class="tool-photo">
            <img src="1000026196.png" alt="Southwire MP61 in Action" onclick="openDiagnostic('1000026196.png')">
        </div>
    </div>

    <div class="case-file look-smoky" style="text-align:center;">
        <h3 style="color:var(--flame);">Katerk D-Ring Bit Holders</h3>
        <p>"One D-ring on my hip, two on my backpack handle. The push-to-unlock design is a one-handed operation—crucial when you’re hanging off a hearth."</p>
        <a href="https://amzn.to/48nN6F2" class="cta-btn" target="_blank">View on Amazon</a>
    </div>
<div class="info-card look-solid">
    <h3>GRENPRO Ratchet Wrench Set</h3>
    <p>Color-coded and fixed-direction. [cite_start]In tight working conditions, the switch-type wrenches are a hindrance—these fixed ones are best[cite: 1].</p>
    [cite_start]<div class="field-note">"I wish I had this color-coded set sooner. 5/16" to 3/4" coverage with a 72-tooth gear[cite: 1]."</div>
    <a href="https://amzn.to/4ssk1zo" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <h3>Mini Combo Dual Ratchet</h3>
    <p>1/4" square drive and bit drive in one tool. [cite_start]High 72-tooth gear head with a spin disk for the tightest spaces where a standard driver won't fit[cite: 1].</p>
    <a href="https://amzn.to/3Q1nurk" class="cta-btn" target="_blank">View on Amazon</a>
</div>
    
    <div class="case-file look-smoky">
    <h3 style="color:var(--flame);">The "2-Year" Tool Organizer</h3>
    <p>Most tool rolls last one season. [cite_start]This one has lasted 2 years of daily use as a full-time service tech[cite: 1].</p>
    <a href="https://amzn.to/4ckwkIf" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid" style="text-align:center;">
    <h3>Single-Handed Bit Holder</h3>
    <p>Allows for one-handed bit changes while on a ladder or reaching into a stove. [cite_start]I keep one on my belt loop and two on my bag[cite: 1].</p>
    <a href="https://amzn.to/47Ovdz6" class="cta-btn" target="_blank">View on Amazon</a>
</div>
</div>
    
    
 
      // Nut drivers with drop down..
    <div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="hollow_drivers_full.webp" 
             srcset="hollow_drivers_mb.webp 400w, hollow_drivers_full.webp 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein Hollow Shaft Nut Drivers" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>

    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid var(--flame); color: var(--flame); text-transform: uppercase; font-weight: 800; padding: 2px 8px; font-size: 0.75rem; border-radius: 4px; letter-spacing: 1px;">
            Doc's Daily Driver
        </span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">6-Inch Hollow-Shaft Drivers</h3>
        
<p style="margin-bottom: 5px;">
    <strong>The First Grab:</strong> One of the first tools out of the bag on every job. The 6-inch hollow shaft is the perfect length to clear long studs and reach buried fasteners in tight blower cabinets. 11/32", 3/8", 7/16 and 1/2" are a must have.
</p>

<div class="doc-order" style="padding: 10px; margin: 0 0 15px 0; font-size: 0.9rem;">
    "Essential for gas or pellet service. If you're working on a Travis or fireplace blower mount, that 11/32 is non-negotiable."
</div>
  // drop down..
        <div class="dropdown-container" style="margin-bottom: 15px;">
            <label style="font-size: 0.8rem; color: #888; display: block; margin-bottom: 5px;">SELECT SIZE:</label>
            <select id="hollow-driver-select" onchange="document.getElementById('hollow-cta').href = this.value" style="width:100%; padding:10px; background:#111; color:#fff; border:1px solid #444; border-radius: 4px; cursor: pointer;">
                <option value="https://amzn.to/4txa1Ws">11/32" Combustion Blower motor hub</option>
                <option value="https://amzn.to/4tcjByA">3/8" Blue (Convection Blowers)</option>
                <option value="https://amzn.to/4c3SOyf">7/16" Brown (Blower Mounts)</option>
                <option value="https://amzn.to/41tJQnS">1/2" Black (Deep Recess)</option>
                
            </select>
        </div>

        <a id="hollow-cta" href="https://amzn.to/4tcjByA" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
    
      <!-- mine -->
   <div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="IMAGE_FULL.webp" 
             srcset="IMAGE_MB.webp 400w, IMAGE_FULL.webp 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="TOOL NAME" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>

    <div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="IMAGE_FULL.webp" 
             srcset="IMAGE_MB.webp 400w, IMAGE_FULL.webp 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="TOOL NAME" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>

    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid var(--flame); color: var(--flame); text-transform: uppercase; font-weight: 800; padding: 2px 8px; font-size: 0.75rem; border-radius: 4px; letter-spacing: 1px;">
            Doc's Daily Driver
        </span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Mini Combo Dual Ratchet</h3>
        
        <p style="margin-bottom: 5px;">
            <strong>¼ inch drive ratchet for tight spaces:</strong> 1/4" square drive and bit drive in one tool.High 72-tooth gear head with a spin disk for the tightest spaces where a standard driver won't fit.
        </p>

        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Dont fight the tight spaces."
        </div>

        <a href="https://amzn.to/3Q1nurk" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
       </div>
    
    
 

<div class="section-wrapper" style="max-width: 1200px; margin: 40px auto; text-align: left;">

    <h2 class="section-title" style="color:var(--flame); margin-bottom: 30px;">I. Electrical Diagnostics</h2>
    <div class="grid-3">
        
        <div class="info-card look-solid">
            <span class="test-stamp" style="color: #00ff00; border-color: #00ff00;">Budget</span>
            <h3>AstroAI 2000</h3>
            <p>Reliable millivolt accuracy for homeowners. Perfect for verifying that 175mV hot-run threshold on a pilot without spending a fortune.</p>
            <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="width:100%; text-align:center;">View on Amazon</a>
        </div>
        
        <div class="info-card look-solid">
    <span class="test-stamp">The Best / Fast & Accurate</span>
    <h3>Klein Tools CL800 Clamp Meter</h3>
    <p>Professional-grade TRMS meter. [cite_start]The auto-ranging technology provides the precise measurements needed for sensitive modern control boards[cite: 1].</p>
    <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <span class="test-stamp" style="color: #ff9d00; border-color: #ff9d00;">Daily Workhorse</span>
    <h3>Klein Tools MM420 Multimeter</h3>
    <p>My daily "down and dirty" meter. [cite_start]600V AC/DC and 50 MOhms resistance—it handles 90% of field diagnostics with zero issues[cite: 1].</p>
    <a href="https://amzn.to/4mozwHn" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <span class="test-stamp" style="color: #00ff00; border-color: #00ff00;">Budget Essential</span>
    <h3>AstroAI 2000 Count Meter</h3>
    <p>A solid budget tester for homeowners. [cite_start]Perfect for checking continuity and basic voltage[cite: 1].</p>
    <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank">View on Amazon</a>
</div>
        
        
        

        <div class="info-card look-solid">
            <span class="test-stamp" style="color: #ff9d00; border-color: #ff9d00;">Daily Bag</span>
            <h3>Klein MM450 / MM420</h3>
            <p>The technician's workhorse. Auto-ranging and tough enough for the hearth. This is what you see me using in my field photos.</p>
            
            <div class="action-shot" style="margin-top:15px; border-top: 1px solid #333; padding-top:15px;">
                <img src="1000024395.jpg" alt="Thermopile Cold Test 3.3 Ohms" style="width:100%; border-radius:4px; cursor:zoom-in;" onclick="openDiagnostic('1000024395.jpg')">
                <p style="font-size: 0.8rem; color: #888; font-style: italic; margin-top: 5px;">
                    <strong>In Action:</strong> Cold-testing a thermopile. A reading of 3.3&Omega; (or 1.4&Omega; on some models) proves the internal coil is intact before you even light the pilot.
                </p>
            </div>
            <a href="https://amzn.to/3UE2I8o" class="cta-btn" target="_blank" style="width:100%; text-align:center; margin-top:10px;">View on Amazon</a>
        </div>

        <div class="info-card look-solid">
            <span class="test-stamp">Professional</span>
            <h3>Klein CL800 TRMS</h3>
            <p>The "Buy it Once" meter. Amp clamp for blower motors and True RMS accuracy for sensitive modern control boards.</p>
            <a href="https://amzn.to/3Zg5C4v" class="cta-btn" target="_blank" style="width:100%; text-align:center;">View on Amazon</a>
        </div>

    </div>
    
  // NUT flip stick..
<div class="case-file look-smoky">
    <h3 style="color:var(--flame);">Klein 65129 2-in-1 Flip Nut Driver</h3>
    <p><strong>The "Long Flip Stick":</strong> A magnetic tip that switches from 1/4" to 5/16" with just a push or pull. [cite_start]One 6-inch tool does 90% of the work on a pellet stove[cite: 1].</p>
    <a href="https://amzn.to/48FyqRH" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="grid-3">
    <div class="info-card look-solid">
        <h3>Klein 3/8" Hollow Shank (6")</h3>
        [cite_start]<p>A "must-have" for convection blower nuts that are tucked far back in the housing[cite: 1].</p>
        <a href="https://amzn.to/4tcjByA" target="_blank">View on Amazon</a>
    </div>
    <div class="info-card look-solid">
        <h3>Klein 7/16" Hollow Shank (6")</h3>
        [cite_start]<p>The companion to the 3/8" for structural mounts and blower brackets[cite: 1].</p>
        <a href="https://amzn.to/4c3SOyf" target="_blank">View on Amazon</a>
    </div>
    <div class="info-card look-solid">
        <h3>Klein 11/32" Hollow Shank (6")</h3>
        [cite_start]<p><strong>Travis & Combustion Specialist:</strong> Used for most combustion blower motor hubs and Travis Ind. stove blower mounts[cite: 1].</p>
        <a href="https://amzn.to/4txa1Ws" target="_blank">View on Amazon</a>
    </div>
</div>
      // Nut drivers..
    <h2 class="section-title" style="color:var(--flame); margin: 60px 0 30px 0;">II. The "Reach" Tools (Nut Drivers)</h2>
    
    <div class="case-file look-smoky">
        <h3 style="color:var(--flame);">Klein 6-Inch Hollow-Shaft Drivers</h3>
        <p><strong>The Convection Blower Specialist:</strong> Specifically, the <strong>3/8" and 7/16"</strong> drivers are non-negotiable for pulling buried convection blower nuts. The 6-inch hollow shaft clears the long studs so you aren't fighting the housing in a tight cabinet.</p>
        <a href="https://amzn.to/3UDR5zW" class="cta-btn" target="_blank">View 3/8" & 7/16" on Amazon</a>
    </div>

    <div class="grid-3" style="margin-top:20px;">
        <div class="info-card look-solid">
            <h3>Performance Tool W950</h3>
            <p>The essential backup set that actually includes the <strong>11/32"</strong> driver needed for Travis (Avalon/Lopi) blower mounts.</p>
            <a href="https://amzn.to/4czat0R" target="_blank">View Set</a>
        </div>
        <div class="info-card look-solid">
            <h3>Malco C-RHEX Flip Bits</h3>
            <p>Daily driver 1/4" and 5/16" reversible impact bits. If the magnet gets coated in soot, just flip it and wipe it clean.</p>
            <a href="https://amzn.to/4u0cbOX" target="_blank">View 2-inch</a> | <a href="https://amzn.to/41nmsbB" target="_blank">View 4-inch</a>
        </div>
    </div>

    <h2 class="section-title" style="color:var(--flame); margin: 60px 0 30px 0;">III. Specialty & Wiring</h2>
    
    <div class="tool-row">
        <div class="tool-text look-solid">
            <h3 style="color:var(--flame);">Southwire MP61 Multi-Tool</h3>
            <p>Most strippers bury the crimper in the handle. The MP61 puts it at the <strong>very tip of the nose</strong>. This is the only way to crimp a spade terminal when you're elbow-deep in a tight stove cabinet.</p>
            <a href="https://amzn.to/4mHWd9L" class="cta-btn" target="_blank">View on Amazon</a>
        </div>
        <div class="tool-photo">
            <img src="1000026196.png" alt="Southwire MP61 in Action" onclick="openDiagnostic('1000026196.png')">
        </div>
    </div>

    <div class="case-file look-smoky" style="text-align:center;">
        <h3 style="color:var(--flame);">Katerk D-Ring Bit Holders</h3>
        <p>"One D-ring on my hip, two on my backpack handle. The push-to-unlock design is a one-handed operation—crucial when you’re hanging off a hearth."</p>
        <a href="https://amzn.to/48nN6F2" class="cta-btn" target="_blank">View on Amazon</a>
    </div>
<div class="info-card look-solid">
    <h3>GRENPRO Ratchet Wrench Set</h3>
    <p>Color-coded and fixed-direction. [cite_start]In tight working conditions, the switch-type wrenches are a hindrance—these fixed ones are best[cite: 1].</p>
    [cite_start]<div class="field-note">"I wish I had this color-coded set sooner. 5/16" to 3/4" coverage with a 72-tooth gear[cite: 1]."</div>
    <a href="https://amzn.to/4ssk1zo" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid">
    <h3>Mini Combo Dual Ratchet</h3>
    <p>1/4" square drive and bit drive in one tool. [cite_start]High 72-tooth gear head with a spin disk for the tightest spaces where a standard driver won't fit[cite: 1].</p>
    <a href="https://amzn.to/3Q1nurk" class="cta-btn" target="_blank">View on Amazon</a>
</div>
    
    <div class="case-file look-smoky">
    <h3 style="color:var(--flame);">The "2-Year" Tool Organizer</h3>
    <p>Most tool rolls last one season. [cite_start]This one has lasted 2 years of daily use as a full-time service tech[cite: 1].</p>
    <a href="https://amzn.to/4ckwkIf" class="cta-btn" target="_blank">View on Amazon</a>
</div>

<div class="info-card look-solid" style="text-align:center;">
    <h3>Single-Handed Bit Holder</h3>
    <p>Allows for one-handed bit changes while on a ladder or reaching into a stove. [cite_start]I keep one on my belt loop and two on my bag[cite: 1].</p>
    <a href="https://amzn.to/47Ovdz6" class="cta-btn" target="_blank">View on Amazon</a>
</div>
</div>
    
    
   */flip stick */   
<div class="affiliate-card look-solid">
    <div class="affiliate-img">
    <img 
        src="flipstick_full2.webp" 
        srcset="flipstick_mb.webp 400w, flipstick_full.webp 600w" 
        sizes="(max-width: 768px) 400px, 600px"
        alt="Klein 65129 Flipstick Action" 
        onclick="openDiagnostic(this.src)"
        loading="lazy">
</div>
    <div class="affiliate-content">
        <span class="test-stamp" style="border-color: var(--flame); color: var(--flame); margin-left: 0;">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 65129 2-in-1 Flip Nut Driver</h3>
        
        <p style="margin-bottom: 10px;">
            <strong>The "Long Flip Stick":</strong> This is the 6-inch version. One tool handles 90% of the fasteners on a Travis, Pellet Master, Regency and many more. The magnetic tips switch from 1/4" to 5/16" with a quick push-pull.
        </p>

        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Keep in your pocket or your tool box, you aren't doing it without this reach."
        </div>

        <a href="https://amzn.to/48FyqRH" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
    

</div> 

 <!-- Content above this line -->
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

