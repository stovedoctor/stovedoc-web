<style>
    /* Pinning these rules directly to the footer to prevent "leaks" */
    .site-footer { 
        border-top: 6px solid #ff6600; 
        padding: 30px 20px; 
        background: #000;
        width: 100%;
        margin-top: 40px;
    }

    .footer-grid { 
        display: grid; 
        grid-template-columns: auto 1fr; 
        gap: 30px; 
        max-width: 1100px; 
        margin: 0 auto; 
    }

    .footer-col {
        color: #ffffff;
        font-size: 0.9rem;
        line-height: 1.4;
        text-align: left !important; 
    }

    .footer-col a { color: #ff6600; text-decoration: none; font-weight: bold; }

    @media (max-width: 768px) {
        .footer-grid { 
            grid-template-columns: 1fr !important; 
            gap: 0 !important; 
        }
        .footer-col { margin-bottom: 0 !important; }
    }
</style>

<footer class="site-footer">
    <div class="footer-grid">
        <div class="footer-col">
            <strong>Rod Poplarchick</strong> | 35+ Years Expertise<br>
            <strong>Regulatory:</strong> Former <a href="https://hpbapacific.org" target="_blank">HPBA Pacific</a> Board Member<br>
            <strong>Legacy:</strong> Online parts sales pioneer (1995-2009)
        </div>
        
        <div class="footer-col">
            <strong>Experience:</strong> Owner/Licensed Contractor of Climate Control Systems (1990-2009)<br>
            <strong>Service:</strong> National Remote Hearth Product Technical Support<br>
            <strong>Contact:</strong> <a href="booking.php">Contact and booking info</a>
            <span style="font-size: 0.8rem; color: #666; display: block; margin-top: 5px;">
                &copy; <?php echo date("Y"); ?> Hearthtools. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

</body>
</html>