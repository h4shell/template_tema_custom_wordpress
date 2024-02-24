<?php

/**
 * Enqueue theme styles
 *
 * Registers and enqueues the main theme stylesheet and a custom CSS file.
 */
function custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


function custom_add_css(){
    //dichiarazioni CSS
    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/custom.css');
        
    // Caricamento su wordpress
    wp_enqueue_style('main-css');
}

add_action('wp_enqueue_scripts', 'custom_add_css');

function custom_add_js(){
    //dichiarazioni JS
    wp_register_script('custom-main-js', get_template_directory_uri() . '/assets/js/script.js');

    // Caricamento su wordpress
    wp_enqueue_script('custom-main-js');
}

add_action('wp_enqueue_scripts', 'custom_add_js');

/**
 * Theme setup
 *
 * Registers a primary navigation menu and enables post thumbnails.
 */
function custom_theme_setup() {
    register_nav_menu('primary', 'Primary Menu');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

