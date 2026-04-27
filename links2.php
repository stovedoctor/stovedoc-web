<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Stove Doc | Pro Loadout</title>
    <style>
        :root {
            --flame: #ff8c00;
            --smoke: #1a1a1a;
            --steel: #333;
            --soot: #0d0d0d;
            --text: #eee;
        }
        body { background: var(--soot); color: var(--text); font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; padding: 20px; }
        .category-block { background: var(--smoke); border: 1px solid var(--steel); padding: 25px; border-radius: 8px; margin-bottom: 40px; }
        h2 { color: var(--flame); border-bottom: 2px solid var(--steel); padding-bottom: 10px; margin-top: 0; text-transform: uppercase; letter-spacing: 1px; }
        .action-box { background: rgba(255,140,0,0.05); border-left: 4px solid var(--flame); padding: 15px; margin: 15px 0; font-size: 0.95rem; }
        .buy-btn { display: inline-block; background: var(--flame); color: #000; padding: 10px 20px; text-decoration: none; font-weight: bold; border-radius: 4px; margin-top: 10px; }
        .dropdown-container { background: #262626; padding: 20px; border-radius: 5px; text-align: center; }
        select { padding: 10px; background: #333; color: #fff; border: 1px solid #444; width: 100%; max-width: 350px; font-size: 1rem; }
        .tool-action-img { width: 100%; max-width: 500px; border: 1px solid #444; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>STOVE DOC: MASTER TOOL LOADOUT</h1>
    <p>Targeting: Winslow, Blaze King, Regency, Enviro, Travis (Avalon/Lopi), Pacific Energy.</p>

    <div class="category-block">
        <h2>I. Electrical & Diagnostics</h2>
        <div class="action-box">
            <strong>Field Note:</strong> "The 'Cold Test'—checking thermopile resistance (should be around 3.3&Omega;) tells me if the generator is healthy before I even light the pilot. Essential for SIT Gas Valve troubleshooting."
        </div>
        
        <ul>
            <li><strong>AstroAI 2000 [Budget]:</strong> The entry-level essential for 175mV checks. <a href="https://amzn.to/41owTM7">Link</a></li>
            <li><strong>Klein MM450 [The Bag]:</strong> The daily driver seen in my action photos. [PASTE LINK HERE]</li>
            <li><strong>Klein CL800 [The Pro]:</strong> TRMS Amp-Clamp for high-end service. [PASTE LINK HERE]</li>
            <li><strong>Klein NCVT-1P:</strong> 50V threshold voltage pen. No ghost readings. <a href="https://amzn.to/48DXHM4">Link</a></li>
        </ul>
    </div>

    <div class="category-block">
        <h2>II. Nut Drivers (The "Reach" Tools)</h2>
        
        <p><strong>Daily Drivers:</strong> Malco C-RHEX Flip Bits (2" & 4") for 1/4 and 5/16 removal. <a href="https://amzn.to/4u0cbOX">2" Link</a> | <a href="https://amzn.to/41nmsbB">4" Link</a></p>
        
        <p><strong>Backup Set:</strong> Performance Tool W950 (Standard Length) with 11/32" Travis Specialist. <a href="https://amzn.to/4czat0R">Link</a></p>

        <div class="dropdown-container">
            <h3>6-INCH LONG HOLLOW NUT DRIVERS</h3>
            <p>The "First-Grabs" for convection blower nuts (3/8" & 7/16").</p>
            <select id="long-drivers" onchange="updateLink('long-cta', this.value)">
                <option value="[FULL SET LINK]">Full 6" Hollow Set</option>
                <option value="[3/8 LINK]">3/8" Blue (Convection Specialist)</option>
                <option value="[7/16 LINK]">7/16" Brown (Convection Specialist)</option>
                <option value="[1/2 LINK]">1/2" Red Handle</option>
                <option value="[9/16 LINK]">9/16" Orange Handle</option>
            </select>
            <br><br>
            <a id="long-cta" href="#" target="_blank" class="buy-btn">VIEW ON AMAZON</a>
        </div>
    </div>

    <div class="category-block">
        <h2>III. Bit Drivers & Precision</h2>
        <ul>
            <li><strong>Wiha GoBox:</strong> 72-tooth mini-ratchet for Winslow/Blaze King surgical access. <a href="https://amzn.to/4egrfD6">Link</a></li>
            <li><strong>Tekton 37-Piece:</strong> High-torque handle for stubborn Regency screws. <a href="https://amzn.to/4snMer7">Link</a></li>
            <li><strong>T20 Security Driver:</strong> The Enviro and SIT Valve specialist. <a href="https://amzn.to/3QySIGg">Link</a></li>
        </ul>
    </div>

    <div class="category-block">
        <h2>IV. Wiring & Organization</h2>
        <ul>
            <li><strong>Southwire MP61:</strong> Nose-end crimper/stripper. Reach those snap discs. <a href="https://amzn.to/4mHWd9L">Link</a></li>
            <li><strong>Katerk D-Rings:</strong> Push-to-unlock bit holders for hip and bag handle. <a href="https://amzn.to/48nN6F2">Link</a></li>
        </ul>
    </div>

    <script>
        function updateLink(id, val) {
            document.getElementById(id).href = val;
        }
    </script>
