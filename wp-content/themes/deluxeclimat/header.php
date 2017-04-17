<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deluxeclimat
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site ">
	<header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-3 hidden-xs col-lg-1 col-md-1">
                    <?php echo get_custom_logo(); ?>
                </div>
                <nav id="site-navigation" class="main-navigation hidden-sm hidden-xs col-md-6 col-lg-7" role="navigation">
                    <div class="hidden-sm hidden-xs"><?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?></div>
                </nav><!-- #site-navigation -->
                <button class="zvonok col-lg-2 col-md-2 col-sm-3 hidden-xs">Заказать звонок</button>
                <p class="phone col-sm-5 col-xs-4 col-lg-2 col-md-2"><a href="tel:0963757535">(096)375-75-35</a><br><a href="tel:0963757535">(095)810-37-81</a></p>
                <button class="hamburger hidden-lg hidden-md col-sm-1 col-xs-1">☰</button>
            </div>
        </div>


<!--        --><?php //echo do_shortcode('[contact-form-7 id="28" title="Заказать звонок"]') ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
