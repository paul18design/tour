<?php

/*
 * Author: David Rodriguez
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (function_exists('add_theme_support')) {

    add_theme_support('menus');

    function tour_custom_logo_setup()
    {
        $defaults = array(
            'width' => 400,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $defaults);
    }

    add_action('after_setup_theme', 'tour_custom_logo_setup');

    register_nav_menus(array(
        'left' => __('Left Menu', 'tour'),
        'right' => __('Right Menu', 'tour'),
    ));
}

$harcorp_includes = array(
    '/class-wp-bootstrap-navwalker.php' // Load custom WordPress nav walker.
);

foreach ($harcorp_includes as $file) {
    $filepath = locate_template('inc' . $file);
    if (!$filepath) {
        trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}

function add_theme_scripts()
{

    wp_enqueue_style('style', get_template_directory_uri() . '/css/theme.css', array(), null, 'all');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');