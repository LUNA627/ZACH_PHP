    <footer class="footer_section">
        <div class="container">
            <div class="footer_copyright">
                © 2025 fdfgdfgd@gmail.com Все права защищены.
            </div>

            <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class'     => 'footer_nav',
                'fallback_cb'    => false,
            )); ?>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>