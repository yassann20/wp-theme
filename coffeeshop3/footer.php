<footer>
        <!--ここからはフッター-->
        <p>@ kaisei yasuzaki</p>
        <div id="footer-menu">
            <nav>
                <ul>
                <?php
wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'container' => 'nav',
    'container_class' => 'footer-navigation',
    'menu_class' => 'menu',
));
?>
                </ul>
            </nav>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <!-- Link Swiper's JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/site-data/js/action.js"></script>
    <?php wp_footer(); ?>
</body>

</html>