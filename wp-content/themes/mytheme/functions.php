<?php
function theme_files() {

    wp_register_style('theme_reset', get_template_directory_uri(). '/css/reset.css', array(), filemtime(get_template_directory() . '/css/reset.css'));

   wp_register_style('theme_main', get_template_directory_uri(). '/css/main.css', array(), filemtime(get_template_directory(). '/css/main.css'));

    wp_enqueue_style('theme_reset');
    wp_enqueue_style('theme_main');
    wp_enqueue_script('theme_script');

    wp_register_script('theme_script', get_template_directory_uri(). '/js/main.js', array(), filemtime(get_template_directory(). '/js/main.js'));
}

function custom_excerpt_length($length) {
    return 20;
}

add_action('wp_enqueue_scripts', 'theme_files', 1);

add_filter('excerpt_length', 'custom_excerpt_length', 999);