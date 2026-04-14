<?php 
$v = filemtime('style.css'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic Error | The Stove Doc Beta</title>
    <link rel="stylesheet" href="style.css?v=<?php echo $v; ?>">
    <meta name="darkreader-lock"> 
</head>
<body>

<?php include 'nav.php'; ?>

<section class="hero-header" style="height: 30vh; background: #000;">
    <div class="hero-overlay-content tray-header-box">
        <h1 style="color:var(--flame); margin:0; text-transform:uppercase; font-size: 3rem; text-shadow: 3px 3px 5px #000;">
            CODE 404
        </h1>
        <div class="pill-text-unit" style="color: #fff; font-size: 1.2rem; margin-top: 15px;">
            <strong style="color: var(--flame);">YOU REACHED THE END OF THE INTERNET! LOL :</strong> <br>
            The page you're looking for has changed or under construction.
        </div>
    </div>
</section>

<div class="section-wrapper" style="margin-top: -50px; z-index: 10;">
    <div class="box-base look-smoky accent-top" style="max-width: 800px; text-align: left;">
        <h3 style="color: var(--flame); text-transform: uppercase;">Beta Site Notice</h3>
        <p>You’ve reached a dead-end but you can U turn. This is a <strong>Development & Testing Site</strong>. Some links are still being piped in, and some pages haven't been scrubbed yet.</p>
        
        <div class="quote-highlight" style="margin: 20px 0;">
            "If you found a Bleeder, help the Doctor plug it."
        </div>

        <p><strong>Found a bug or a typo?</strong> Please snap a screenshot and send your suggestions directly to the Doctor. Your feedback ensures the final version is as sharp as a fresh T20 bit.</p>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="index.php" class="cta-btn">Return to Surgery (Home)</a>
            <p style="margin-top: 15px; font-size: 1.2rem; color: #888;">Or email suggestions to: <a href="mailto:hearthtools@gmail.com?subject=Beta Site Feedback - [404 Error]" style="color: var(--flame); text-decoration: underline;">hearthtools@gmail.com</a></p>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>