<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container header-inner">
        <div class="logo-wrap">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
            <p class="site-tagline"><?php bloginfo('description'); ?></p>
        </div>
        <nav class="site-nav" aria-label="Primary">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-list',
                'container' => false,
                'fallback_cb' => 'wp_page_menu',
            ));
            ?>
        </nav>
        <a class="btn btn-accent" href="#contato">
            <?php echo esc_html(od__('Falar no WhatsApp')); ?>
        </a>
    </div>
</header>
<main class="site-main">
