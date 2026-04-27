<style>
    /* --- SELF-CONTAINED NAV GASKET --- */
    nav { 
        background: #000; 
        border-bottom: 2px solid #ff6600; 
        padding: 10px 0; 
        position: sticky; 
        top: 0; 
        z-index: 1000; 
    }

    .nav-container { 
        max-width: 1200px; 
        margin: 0 auto; 
        display: flex; 
        flex-direction: column; 
        align-items: center; 
        gap: 8px; 
    }

    .nav-brand { 
        font-weight: 900; 
        font-size: 1.6rem; 
        color: #ffffff; 
        text-transform: uppercase; 
        letter-spacing: 1px; 
    }

    .test-stamp {
        color: #ff0000;
        border: 1px solid #ff0000;
        font-size: 0.7rem;
        padding: 2px 5px;
        vertical-align: middle;
        margin-left: 5px;
        text-transform: uppercase;
    }

    .nav-social { display: flex; gap: 12px; margin-bottom: 5px; }
    .nav-social img { height: 28px; width: auto; opacity: 0.9; }

    .nav-links { display: flex; gap: 15px; padding: 5px 0; }
    .nav-links a { 
        text-decoration: none !important; 
        color: #ffffff; 
        font-weight: 700; 
        font-size: 0.85rem; 
        text-transform: uppercase; 
        white-space: nowrap; 
    }

    .nav-links a.active-page { 
        color: #ff6600; 
        border-bottom: 2px solid #ff6600; 
    }

    /* --- MOBILE NAV OVERRIDES --- */
    @media (max-width: 768px) {
        .nav-container { 
            flex-direction: row; 
            flex-wrap: wrap; 
            justify-content: space-between; 
            padding: 0 15px; 
        }
        .nav-brand { font-size: 1.1rem; flex: 1; text-align: left; }
        .nav-links { 
            width: 100%; 
            justify-content: flex-start; 
            overflow-x: auto; 
            padding: 10px 0 5px 0; 
            gap: 15px; 
            scrollbar-width: none; 
        }
        .nav-links::-webkit-scrollbar { display: none; }
        .nav-links a { font-size: 0.75rem; padding: 4px 2px; }
    }
</style>
<?php $current = basename($_SERVER['PHP_SELF']); ?>
<nav>
    <div class="nav-container">
        <div class="nav-brand">
            THE STOVE DOC. <span class="test-stamp">TESTING</span>
        </div>
        
        <div class="nav-social">
            <a href="https://www.facebook.com/thestovedoc" target="_blank"><img src="fb-icon.png" alt="FB"></a>
            <a href="https://www.youtube.com/@stovedoctor" target="_blank"><img src="yt_logo_full.png" alt="YT"></a>
        </div>

        <div class="nav-links">
            <a href="index.php" class="<?php echo ($current == 'index.php') ? 'active-page' : ''; ?>">Home</a>
            <a href="telehearth_booking.php" class="<?php echo ($current == 'telehearth_booking.php') ? 'active-page' : ''; ?>">Telehearth</a>
            <a href="tools2.php" class="<?php echo ($current == 'tools2.php') ? 'active-page' : ''; ?>">Tools</a>
            <a href="faq.php" class="<?php echo ($current == 'faq.php') ? 'active-page' : ''; ?>">FAQ</a>
            <a href="legacy.php" class="<?php echo ($current == 'legacy.php') ? 'active-page' : ''; ?>">Legacy</a>
        </div>
    </div>
</nav>