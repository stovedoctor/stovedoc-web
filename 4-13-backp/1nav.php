<?php $current = basename($_SERVER['PHP_SELF']); ?>
<nav>
    <div class="nav-container">
        <div class="logo-text">
            THE STOVE DOC. <span class="test-stamp">TESTING SITE</span>
        </div>
        
        <div class="nav-social">
            <a href="https://www.facebook.com/thestovedoc" target="_blank"><img src="fb-icon.png" alt="FB"></a>
            <a href="https://www.youtube.com/@stovedoctor" target="_blank"><img src="yt_logo_full.png" alt="YT"></a>
        </div>

        <input type="checkbox" id="menu-toggle" class="menu-toggle" style="display:none;">
        <label for="menu-toggle" class="menu-icon">&#9776; MENU</label>

        <div class="nav-links">
            <a href="index.php" class="<?php echo ($current == 'index.php') ? 'active-page' : ''; ?>">Home</a>
            <a href="telehearth_booking.php" class="<?php echo ($current == 'telehearth_booking.php') ? 'active-page' : ''; ?>">Telehearth</a>
            <a href="tools2.php" class="<?php echo ($current == 'tools2.php') ? 'active-page' : ''; ?>">Tools</a>
            <a href="faq.php" class="<?php echo ($current == 'faq.php') ? 'active-page' : ''; ?>">FAQ</a>
            <a href="legacy.php" class="<?php echo ($current == 'legacy.php') ? 'active-page' : ''; ?>">The Legacy</a>
        </div>
    </div>
</nav>