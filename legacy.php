<?php 
$page_title = "The Legacy | The Stove Doctor";
include 'header.php'; 
?>

<section class="hero-legacy"> 
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo">
        <div class="tray-header-box">
            <h1>The Legacy</h1>
            <div class="pill-text-unit">36 Years of Evolution from Warehouse to Telehearth</div>
        </div>
    </div>
</section>

<main class="main-container">

<section class="section-wrapper" style="margin-top: 15px; margin-bottom: 25px;">
    <div class="doc-note" style="max-width: 1000px; margin: 0 auto; text-align: center;">
        
        <p class="legacy-quote">
            "When the manual ends,<span class="global-break"></span> my experience begins."
        </p>
        
        <p style="font-size: 1rem; line-height: 1.6; color: var(--white); margin: 0; text-align: center !important;">
            I built the showrooms, stocked the warehouses, and launched the web’s first parts store. 
            I’ve taken that hands-on history and adapted it to the new digital world to provide 
            remote diagnostics that get your heat back on today.
        </p>
    </div>
</section>


    <section class="section-wrapper" style="margin-top: 10px;">
        <h2 style="color:#fff; margin-bottom: 20px;">The Evolution of the Stove Doc</h2>
        
        <div class="timeline-wrapper">
            <div class="scroll-arrow arrow-left" onclick="document.getElementById('evolution-tray').scrollBy({left: -370, behavior: 'smooth'})">&#10094;</div>
            <div class="scroll-arrow arrow-right" onclick="document.getElementById('evolution-tray').scrollBy({left: 370, behavior: 'smooth'})">&#10095;</div>
            
            <div class="timeline-tray" id="evolution-tray">
                <div class="info-card">
                    <h2 style="color:var(--flame); font-size: 1.4rem;">1990 – 2009</h2>
                    <h3 style="font-size: 1.1rem;">The Global Presence</h3>
                    <p>Founded <strong>Climate Control Systems</strong>. By '95, I was a digital pioneer, building the web’s largest parts warehouse and managing global inventory.</p>
                </div>

                <div class="info-card">
                    <h2 style="color:var(--flame); font-size: 1.4rem;">2009</h2>
                    <h3 style="font-size: 1.1rem;">The Hardest Triage</h3>
                    <p>When the crash hit, I chose the wrench over the warehouse. I realized my real value wasn't in the building—it was in the decades of technical logic I carried.</p>
                </div>

                <div class="info-card">
                    <h2 style="color:var(--flame); font-size: 1.4rem;">Present</h2>
                    <h3 style="font-size: 1.1rem;">The Service Specialist</h3>
                    <p>I traded the warehouse for the service truck. Now, <strong>Telehearth</strong> brings that 36+ years of field grit directly to your screen.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-wrapper" style="margin-top: 20px; margin-bottom: 20px;">
        <h2 style="color:var(--flame); text-transform:uppercase; margin-bottom: 15px;">Patient Outcomes (Case Files)</h2>
        
        <div class="grid-equal-2"> 
            <div class="bg-tool-card faq-card" style="cursor: default; margin-bottom: 0 !important;">
                <div class="bg-tool-content">
                    <p>"Helped me troubleshoot a 20 year old pellet stove through Facebook messenger!! Ten stars if I could rate him that!!!"</p>
                    <strong style="color:var(--flame);">— James Hallenbeck, New York</strong>
                </div>
            </div>

            <div class="bg-tool-card faq-card" style="cursor: default; margin-bottom: 0 !important;">
                <div class="bg-tool-content">
                    <p>"Took the time to text me figures and instructions on how to check the voltage of various systems. Learned a lot and was able to figure out what was wrong."</p>
                    <strong style="color:var(--flame);">— Rhett Fisher, Gas System Triage</strong>
                </div>
            </div>

            <div class="bg-tool-card faq-card" style="cursor: default; margin-bottom: 0 !important;">
                <div class="bg-tool-content">
                    <p>"He gave me the confidence I needed to clear the obstruction myself. Done in less than an hour with minimal tools."</p>
                    <strong style="color:var(--flame);">— Andrew Peters, Pellet Auger Save</strong>
                </div>
            </div>

            <div class="bg-tool-card faq-card" style="cursor: default; margin-bottom: 0 !important;">
                <div class="bg-tool-content">
                    <p>"Information that allowed me to fix the problem immediately and avoid buying any unnecessary parts. (HIGHLY!!!) recommend him."</p>
                    <strong style="color:var(--flame);">— Valerie Wendeln, Breckwell P 24</strong>
                </div>
            </div>
    </div> <section class="section-wrapper" style="margin: 20px auto 20px auto; max-width: 900px;">
            <div class="info-card" style="padding: 10px 20px; border-top: 3px solid var(--flame); background: rgba(255,102,0,0.05); text-align: center;">
                
                <p style="font-size: 1.2rem; color: #fff; margin-bottom: 15px; text-align: center !important;">
                    Ready to see that experience in action?
                </p>
                
                <a href="index.php" style="color: var(--flame); font-weight: 900; text-decoration: none; font-size: .9rem; text-transform: uppercase; letter-spacing: 1.5px; border-bottom: 2px solid var(--flame); display: inline-block;">
                    RETURN TO THE TELEHEARTH CLINIC →
                </a>

                <div style="margin-top: 25px; color: #ffffff; font-size: 0.85rem; font-style: italic;">
                    "Stop guessing. Start fixing. Let's get your fire back on today."
                </div>
            </div>
        </section>

    </section>
</main>

<?php include 'footer.php'; ?>