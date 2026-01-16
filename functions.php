<?php
/**
 * Novel Homes Theme Functions
 */

function novel_homes_setup()
{
    // Add support for document title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for WooCommerce
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'novel_homes_setup');

function novel_homes_scripts()
{
    // Enqueue Main Stylesheet
    wp_enqueue_style('novel-homes-style', get_stylesheet_uri());

    // Enqueue Main Script
    // Using true for $in_footer parameter to load scripts before </body>
    wp_enqueue_script('novel-homes-script', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'novel_homes_scripts');
