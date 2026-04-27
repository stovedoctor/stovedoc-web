<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telehearth Clinic | The Stove Doctor</title>
   <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
     <meta name="darkreader-lock"> 
</head>
<body>

    <?php include 'nav.php'; ?>
    
    
<section class="hero-header" style="background:#000; padding: 40px 0; text-align: center; border-bottom: 1px solid #333;">
    <div class="hero-overlay-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="main-body-logo" style="height: 220px; width: auto; filter: drop-shadow(0 0 15px rgba(0,0,0,0.9));">
        <h1 style="margin-top:20px; font-size: 2rem; color: #fff; text-transform: uppercase;">Patient Intake Form</h1>
    </div>
</section>

<div class="section-wrapper">
    <div class="info-card" style="max-width: 850px; margin: 0 auto; text-align: left; border-top-color: #fff;">
        <h2 style="text-align:center; color:#fff; margin-top:0; text-transform: uppercase;">Intake Form</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data" style="margin-top: 25px;">
            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; font-weight:bold;">Full Name*</label>
                <input type="text" name="name" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label style="display:block; margin-bottom:5px; font-weight:bold;">Email Address*</label>
                    <input type="email" name="email" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                </div>
                <div>
                    <label style="display:block; margin-bottom:5px; font-weight:bold;">Cell Number*</label>
                    <input type="tel" name="phone" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; font-weight:bold;">Video Call Preference*</label>
                <select name="video_preference" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                    <option value="">-- How should the Doctor call you? --</option>
                    <option value="google">Google Meet / Android Video</option>
                    <option value="fb">FB Messenger</option>
                    <option value="teams">Microsoft Teams</option>
                </select>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 15px;">
                <div>
                    <label style="display:block; margin-bottom:5px; font-weight:bold;">Brand & Model*</label>
                    <input type="text" name="brand_model" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                </div>
                <div>
                    <label style="display:block; margin-bottom:5px; font-weight:bold;">Serial Number*</label>
                    <input type="text" name="serial" required style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;">
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; margin-bottom:5px; font-weight:bold;">The "Crime Scene" Photo (Before Cleaning)*</label>
                <input type="file" name="crime_scene_photo" required style="width:100%; padding:10px; background:#0a0a0a; color:#fff; border:1px solid #444;">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display:block; margin-bottom:5px; font-weight:bold;">Notes / Symptoms</label>
                <textarea name="notes" rows="4" style="width:100%; padding:12px; background:#000; color:#fff; border:1px solid #444; border-radius:4px;"></textarea>
            </div>

            <button type="submit" class="cta-btn" style="width:100%; border:none; cursor:pointer; font-size: 1.2rem;">SUBMIT CASE & BOOK SESSION</button>

            <div style="text-align: center; margin-top: 30px;">
                <p class="beta-text">
                    <strong style="color:var(--flame);">BETA SITE NOTICE:</strong> Form mail is currently being dialed-in.<br>
                    If the submit button hangs, please message me on 
                    <a href="https://www.facebook.com/thestovedoc" target="_blank">Facebook</a> or 
                    email <a href="mailto:hearthtools@gmail.com">hearthtools@gmail.com</a> with your details.
                </p>

                <a href="data:text/vcard;charset=utf-8,BEGIN:VCARD%0AVERSION:3.0%0AFN:The%20Stove%20Doctor%0AORG:Hearthtools%0AEMAIL:hearthtools@gmail.com%0AURL:https://hearthtools.com%0AEND:VCARD" 
                   download="Stove_Doctor.vcf" 
                   class="cta-btn" style="background:#222 !important; border-radius:50px; font-size: 0.85rem; padding: 12px 25px; border-color: #444; margin-top: 15px;">
                   📥 SAVE THE STOVE DOC TO CONTACTS
                </a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
