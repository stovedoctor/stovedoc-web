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
        I. Electrical Diagnostics
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="cl800_300.webp?v=<?php echo $img_v; ?>" 
             srcset="cl800_300.webp?v=<?php echo $img_v; ?> 400w, cl800_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="Klein CL800" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein Tools CL800 Clamp Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Professional-grade TRMS meter:</strong> The "Buy it Once" tool. Amp clamp for blower motors and True RMS technology for precise measurements on modern control boards.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Fast and accurate. This handles every part of a high-end gas or pellet service."
        </div>
        <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="mm420_300.webp?v=<?php echo $img_v; ?>" 
             alt="Klein MM420 Multimeter" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Daily Workhorse</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein Tools MM420 Multimeter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Daily "Down and Dirty" Meter:</strong> 600V AC/DC voltage and 50 MOhms resistance. Rugged enough for everyday field use.
        </p>
        <a href="https://amzn.to/4mozwHn" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="astro_300.webp?v=<?php echo $img_v; ?>" 
             srcset="astro_300.webp?v=<?php echo $img_v; ?> 400w, astro_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px" 
             alt="AstroAI 2000" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">AstroAI 2000 Count Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Reliable for homeowners:</strong> A solid budget tester for verifying continuity and basic voltage without spending a fortune.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "Perfect for verifying that 175mV hot-run threshold on a pilot."
        </div>
        <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        II. Nut Drivers (Long Reach)
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="flipstick_300.webp?v=<?php echo $img_v; ?>" 
             srcset="flipstick_300.webp?v=<?php echo $img_v; ?> 400w, flipstick_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px"
             alt="Klein 65129 Flipstick Action" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="test-stamp" style="border-color: var(--flame); color: var(--flame); margin-left: 0;">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 65129 2-in-1 Flip Nut Driver</h3>
        <p style="margin-bottom: 10px;">
            <strong>The "Long Flip Stick":</strong> 6-inch magnetic tip switches from 1/4" to 5/16" instantly. Handles 90% of fasteners on Travis, Regency, and more.
        </p>
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
            <strong>The "First Grab" Tools:</strong> Hollow shafts clear long studs to reach buried fasteners. 11/32" is non-negotiable for blower mounts.
        </p>
        <div class="dropdown-container" style="margin-bottom: 15px;">
            <label style="font-size: 0.8rem; color: #888; display: block; margin-bottom: 5px;">SELECT SIZE:</label>
            <select id="hollow-driver-select" onchange="document.getElementById('hollow-cta').href = this.value" style="width:100%; padding:10px; background:#111; color:#fff; border:1px solid #444; border-radius: 4px; cursor: pointer;">
                <option value="https://amzn.to/4txa1Ws">11/32" (Combustion Blower Hubs)</option>
                <option value="https://amzn.to/4tcjByA">3/8" (Convection Blowers)</option>
                <option value="https://amzn.to/4c3SOyf">7/16" (Blower Mounts)</option>
                <option value="https://amzn.to/41tJQnS">1/2" (Deep Recess)</option>
            </select>
        </div>
        <a id="hollow-cta" href="https://amzn.to/4tcjByA" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        III. Short & Stubby Drivers
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="klein_3inch_300.webp?v=<?php echo $img_v; ?>" 
             alt="Klein 3-Inch Nut Driver Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Workhorse Set</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 3-Inch Shaft Set (7-Piece)</h3>
        <p style="margin-bottom: 5px;">
            <strong>Industry Standard:</strong> Color-coded and tough. Use these when the 6-inch is too long and you need leverage in tight spaces.
        </p>
        <a href="https://amzn.to/3OAgpE6" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="performance_tool_300.webp?v=<?php echo $img_v; ?>" 
             alt="Performance Tool Nut Driver Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Reach</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Performance Tool 7pc Set</h3>
        <p style="margin-bottom: 5px;">
            <strong>Necessary for tight spots:</strong> Includes the 11/32" driver needed for Travis blower mounts. Don't use them as much, but you need them for specific jobs.
        </p>
        <a href="https://amzn.to/4czat0R" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        IV. Specialty & Wiring
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="mini_ratchet_full.webp?v=<?php echo $img_v; ?>" 
             alt="Mini Combo Dual Ratchet" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Tight Space Helper</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Mini Combo Dual Ratchet</h3>
        <p style="margin-bottom: 5px;">
            <strong>Dual Drive:</strong> 1/4" square drive and bit drive. 72-tooth gear head for working where a standard driver won't fit.
        </p>
        <a href="https://amzn.to/3Q1nurk" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="southwire_300.webp?v=<?php echo $img_v; ?>" 
             alt="Southwire MP61" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Wiring Specialist</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Southwire MP61 Multi-Tool</h3>
        <p style="margin-bottom: 5px;">
            <strong>Swiss Army Knife of Wiring:</strong> Strips, crimps, and shears. Crimper is at the very tip for reaching into tight stove cabinets.
        </p>
        <a href="https://amzn.to/3UDR5zW" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
    
    COPY <br>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        I. Electrical Diagnostics
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="cl800_300.webp?v=<?php echo $img_v; ?>" 
             alt="Klein CL800 Clamp Meter" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein Tools CL800 Clamp Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Professional-grade TRMS meter:</strong> Amp clamp for blower motors and the precise accuracy needed for modern control boards.
        </p>
        <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="astro_300.webp?v=<?php echo $img_v; ?>" 
             alt="AstroAI 2000" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">AstroAI 2000 Count Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Reliable for homeowners:</strong> Perfect for verifying that 175mV hot-run threshold on a pilot without spending a fortune.
        </p>
        <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        II. Nut Drivers
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="flipstick_full2.webp?v=<?php echo $img_v; ?>" 
             srcset="flipstick_mb.webp?v=<?php echo $img_v; ?> 400w, flipstick_full.webp?v=<?php echo $img_v; ?> 600w" 
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
        <img src="nutdriverset.webp"?v=<?php echo $img_v; ?>" 
             alt="Performance Tool Nut Driver Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;"> Standard Lenght Nut Driver Set 7pc 4"</h3>
        <p style="margin-bottom: 5px;">
            <strong>The Budget Stanard Reach:</strong> These include the 11/32" driver you need for blower motor mounts where a long driver won't fit.
        </p>
        <a href="https://amzn.to/4czat0R" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        III. Specialty & Wiring
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="southwire.webp"?v=<?php echo $img_v; ?>" 
             alt="Southwire MP61 Crimper/Stripper" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Surgical Crimping</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Southwire MP61 Multi-Tool</h3>
        <p style="margin-bottom: 5px;">
            <strong>The "Tip-Nose" Crimper:</strong> My go to wire cutters. Most strippers put the crimper in the handle, but this puts it at the **very tip**. Essential for spade terminals in tight cabinets.
        </p>
        <a href="https://amzn.to/4tKjQ3s" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>
    
 copy 2 <br>
<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        I. Electrical Diagnostics
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="cl800_300.webp?v=<?php echo $img_v; ?>" 
             alt="Klein CL800 Clamp Meter" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein Tools CL800 Clamp Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Professional TRMS:</strong> The "Buy it Once" meter. Fast and accurate auto-ranging with an amp clamp for blower motor diagnostics.
        </p>
        <a href="https://amzn.to/4moxxTq" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="astro_300.webp?v=<?php echo $img_v; ?>" 
             alt="AstroAI 2000" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">AstroAI 2000 Count Meter</h3>
        <p style="margin-bottom: 5px;">
            <strong>Reliable millivolt testing:</strong> Perfect for verifying that 175mV hot-run threshold on a pilot without spending a fortune.
        </p>
        <a href="https://amzn.to/41owTM7" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        II. Nut Drivers
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="flipstick_full2.webp?v=<?php echo $img_v; ?>" 
             srcset="flipstick_mb.webp?v=<?php echo $img_v; ?> 400w, flipstick_full.webp?v=<?php echo $img_v; ?> 600w" 
             sizes="(max-width: 768px) 400px, 600px"
             alt="Klein 65129 Flipstick Action" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="test-stamp" style="border-color: var(--flame); color: var(--flame); margin-left: 0;">Doc's Daily Driver</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Klein 65129 2-in-1 Flip Nut Driver</h3>
        <p style="margin-bottom: 10px;">
            <strong>The "Long Flip Stick":</strong> This 6-inch tool handles 90% of fasteners on Travis, Pellet Master, or Regency. Tips switch from 1/4" to 5/16" instantly.
        </p>
        <div class="doc-order" style="padding: 10px; margin: 0 0 20px 0; font-size: 0.95rem;">
            "You aren't doing the job without this reach."
        </div>
        <a href="https://amzn.to/48FyqRH" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="nutdriverset.webp?v=<?php echo $img_v; ?>" 
             alt="Standard Nut Driver Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp" style="border: 1px solid #888; color: #888;">Budget Essential</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Standard Nut Driver Set (7pc)</h3>
        <p style="margin-bottom: 5px;">
            <strong>Necessary Reach:</strong> These include the 11/32" driver required for specific blower motor hubs where a long driver won't fit.
        </p>
        <a href="https://amzn.to/4czat0R" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="section-wrapper" style="max-width: 1000px; margin: 40px auto 10px auto; text-align: left;">
    <h2 style="color: var(--flame); border-bottom: 2px solid var(--flame); display: inline-block; padding-bottom: 5px; text-transform: uppercase;">
        III. Specialty & Wiring
    </h2>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="southwire.webp?v=<?php echo $img_v; ?>" 
             alt="Southwire MP61 Crimper/Stripper" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Surgical Crimping</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Southwire MP61 Multi-Tool</h3>
        <p style="margin-bottom: 5px;">
            <strong>The "Tip-Nose" Crimper:</strong> My go-to for field repairs. Most strippers put the crimper in the handle, but this puts it at the **very tip** for tight cabinets.
        </p>
        <a href="https://amzn.to/4tKjQ3s" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="connectors_300.webp?v=<?php echo $img_v; ?>" 
             alt="Nylon Spade Connectors" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Service Kit</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Nylon Spade Connectors</h3>
        <p style="margin-bottom: 5px;">
            <strong>Reliable Insulation:</strong> Fully insulated male and female quick disconnect terminals. Essential for rebuilding stove wire harnesses.
        </p>
        <a href="https://amzn.to/3Q0FB0A" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="millpac_300.webp?v=<?php echo $img_v; ?>" 
             alt="Mill-Pac Black Sealant" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">The Pro's Seal</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Mill-Pac High-Temp Sealant</h3>
        <p style="margin-bottom: 5px;">
            <strong>Non-Permanent Seal:</strong> I use this instead of fiberglass gaskets on combustion blowers. Seals 1050-degree flue joints but can be broken free for next service.
        </p>
        <a href="https://amzn.to/4tFXSyA" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="wrenches_300.webp?v=<?php echo $img_v; ?>" 
             alt="Ratcheting Wrench Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Tight Space Speed</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Ratcheting Wrench Set</h3>
        <p style="margin-bottom: 5px;">
            <strong>Fixed Direction:</strong> My experience shows fixed-direction ratchets are best for tight hearth conditions where switches just get in the way.
        </p>
        <a href="https://amzn.to/4ssk1zo" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
    </div>
</div>

<div class="affiliate-card look-solid">
    <div class="affiliate-img">
        <img src="hexkeys_300.webp?v=<?php echo $img_v; ?>" 
             alt="Long Arm Hex Key Set" 
             onclick="openDiagnostic(this.src)"
             loading="lazy">
    </div>
    <div class="affiliate-content">
        <span class="doc-stamp">Critical Access</span>
        <h3 style="color: var(--flame); margin: 15px 0 10px 0; text-transform: uppercase;">Long Arm Hex/Torx Key Set</h3>
        <p style="margin-bottom: 5px;">
            <strong>Deep Reach:</strong> 22-piece SAE/Metric set. Long arm design gives you the leverage needed to break free stubborn set screws on blowers.
        </p>
        <a href="https://amzn.to/4tIYLqh" class="cta-btn" target="_blank" style="text-align:center;">View on Amazon</a>
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

</body>
</html>