<?php

if (!defined('ABSPATH')) {
    exit;
}

function od__($text) {
    if (function_exists('pll__')) {
        return pll__($text);
    }
    return __($text, 'oraculista-delfos');
}

function od_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('woocommerce');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'od_theme_setup');

function od_woocommerce_wrapper_start() {
    echo '<section class="section"><div class="container">';
}

function od_woocommerce_wrapper_end() {
    echo '</div></section>';
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'od_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'od_woocommerce_wrapper_end', 10);

function od_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'od-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Libre+Franklin:wght@300;400;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'od-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        array('od-google-fonts'),
        $theme_version
    );

    wp_enqueue_script(
        'od-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'od_enqueue_assets');

function od_force_jquery_in_customizer() {
    wp_enqueue_script('jquery');
}
add_action('customize_controls_enqueue_scripts', 'od_force_jquery_in_customizer');
add_action('customize_preview_init', 'od_force_jquery_in_customizer');

function od_excerpt_length($length) {
    return 22;
}
add_filter('excerpt_length', 'od_excerpt_length');

function od_register_sidebar() {
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'od-sidebar',
        'description' => 'Widgets for blog sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'od_register_sidebar');

function od_set_static_front_page() {
    if (get_option('od_front_set') === '1') {
        return;
    }

    $home = get_page_by_path('home');
    $blog = get_page_by_path('blog');

    if ($home && $blog) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home->ID);
        update_option('page_for_posts', $blog->ID);
        update_option('od_front_set', '1');
    }
}
add_action('after_setup_theme', 'od_set_static_front_page');

