<!-- Add footer -->
<footer class="site-footer">
	<div class="container">
        <div class="copyright">
            <p>Copyright X - All Rights Reserved </p>
        </div>
        <div class="footer-menu">
            <?php wp_nav_menu(
                    array(
                            'theme_location'    =>  'miscapu_footer_menu',
                            'depth'             =>  1
                    )
            );?>
        </div>
    </div>
</footer>
<!-- End Footer -->

</div>

<!-- Add wp_footer function -->
<?php wp_footer();?>
</body>
</html>