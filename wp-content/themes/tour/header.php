<?php

/*
 * Author: David Rodriguez
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?= language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <title><?= wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?> <?= bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- The WordPress Menu goes here -->
    <?php wp_nav_menu([
        'theme_location' => 'left',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'nav-left',
        'menu_class' => 'nav navbar-nav ml-auto header-list nav-site',
        'fallback_cb' => '',
        'depth' => 2,
        'menu_id' => 'left-menu',
        'walker' => new Harcorp_WP_Bootstrap_Navwalker()
    ]); ?>
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image($custom_logo_id, 'full');
    ?>
    <a class="navbar-brand mx-auto" href="#"><?= $image ?></a>
    <?php wp_nav_menu([
        'theme_location' => 'right',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'nav-right',
        'menu_class' => 'nav navbar-nav mr-auto header-list nav-site',
        'fallback_cb' => '',
        'depth' => 2,
        'menu_id' => 'right-menu',
        'walker' => new Harcorp_WP_Bootstrap_Navwalker()
    ]); ?>
</nav>