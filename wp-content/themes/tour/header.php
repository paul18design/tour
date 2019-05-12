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

<header>
    <nav class="navbar navbar-expand-md bg-white">
<!--        <div class="d-flex w-50 order-0">-->
<!--            <a class="navbar-brand mr-1" href="#"></a>-->
<!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--        </div>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar"
                aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="<?php esc_attr_e('Toggle navigation', 'ecosistemas'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container_class' => 'collapse navbar-collapse justify-content-center order-2',
                'container_id' => 'collapsingNavbar',
                'menu_class' => 'navbar-nav align-middle nav-site header-list',
                'fallback_cb' => '',
                'menu_id' => 'main-menu',
                'depth' => 2,
                'walker' => new Harcorp_WP_Bootstrap_Navwalker(),
            )
        ); ?>
<!--        <div class="navbar-collapse collapse justify-content-center order-2 " id="collapsingNavbar">-->
<!--            <ul class="navbar-nav  align-middle nav-site header-list">-->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link dark-color upper agane-regular align-middle fs_20  active-nav" href="index.html">inicio</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link dark-color upper agane-regular fs_20" href="nosotros.html">nosotros</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link dark-color upper agane-regular fs_20" href="destinos.html">destinos</a>-->
<!--                </li>-->
<!--                <li class="">-->
<!--                    <a class="nav-link dark-color upper agane-regular fs_20 d-none d-sm-block d-md-block" href="index.html">-->
<!--                        <span class="logo-tour"></span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link dark-color upper agane-regular fs_20" href="blog.html">blog</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link dark-color upper agane-regular fs_20" href="contacto.html">contacto</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="#" target="_blank"><span class="icon-fb_blue"></span></a>-->
<!--                    <a href="#" target="_blank" class="pl-1 pr-1"><span class="icon-ig_blue"></span></a>-->
<!--                    <a href="#" target="_blank"><span class="icon-yt_blue"></span></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
    </nav>
</header>