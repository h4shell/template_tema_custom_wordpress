<?php

/**
 * Enqueue theme styles
 *
 * Registers and enqueues the main theme stylesheet and a custom CSS file.
 */
function custom_theme_enqueue_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


function custom_add_css()
{
    $css_dir = "./wp-content/themes/tema-custom/assets/css";
    $css_files = scandir($css_dir);
    $css_files = array_slice($css_files, 2);

    foreach ($css_files as $css_file) {
        wp_register_style('custom-main-css-' . $css_file, get_template_directory_uri() . '/assets/css/' . $css_file);
        wp_enqueue_style('custom-main-css-' . $css_file);
    }
}

add_action('wp_enqueue_scripts', 'custom_add_css');

function custom_add_js()
{

    $js_dir = "./wp-content/themes/tema-custom/assets/js";
    $js_files = scandir($js_dir);
    $js_files = array_slice($js_files, 2);
    foreach ($js_files as $js_file) {
        wp_register_script('custom-main-js-' . $js_file, get_template_directory_uri() . '/assets/js/' . $js_file);
        wp_enqueue_script('custom-main-js-' . $js_file);
    }
}

add_action('wp_enqueue_scripts', 'custom_add_js');

/**
 * Theme setup
 *
 * Registers a primary navigation menu and enables post thumbnails.
 */
function custom_theme_setup()
{
    register_nav_menu('primary', 'Primary Menu');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');


function import_php_files($dir)
{
    $directory = get_template_directory() . "/" . $dir . "/";
    $files = glob($directory . "*.php");
    foreach ($files as $file) {
        if (is_file($file)) {
            include_once($file);
        }
    }
}
