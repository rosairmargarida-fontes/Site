<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <h3><?php echo esc_html(od__('Oraculista de Delfos')); ?></h3>
            <p><?php echo esc_html(od__('Tarot, numerologia e astrologia para clareza e direcao.')); ?></p>
        </div>
        <div>
            <h4><?php echo esc_html(od__('Redes sociais')); ?></h4>
            <ul class="social-list">
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">YouTube</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Pinterest</a></li>
                <li><a href="#">WhatsApp</a></li>
            </ul>
        </div>
        <div>
            <h4><?php echo esc_html(od__('Contato')); ?></h4>
            <p>contato@exemplo.com</p>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; <?php echo esc_html(date('Y')); ?> Oraculista de Delfos</p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'footer-menu',
            'container' => false,
            'fallback_cb' => false,
        ));
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
