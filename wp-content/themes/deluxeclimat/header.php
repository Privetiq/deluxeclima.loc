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
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-1 col-md-2 col-sm-3 col-xs-5">
                    <?php echo get_custom_logo(); ?>
                </div>
                <nav id="site-navigation" class="main-navigation col-lg-7 col-md-8 hidden-sm hidden-xs">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                <div class="col-lg-2 hidden-md col-sm-4 col-xs-5">
                    <p class="phone">
                        <a href="tel:0672262629">(067)226-26-29</a><br>
                        <a href="tel:0952872629">(095)287-26-29</a><br>
                        <a href="tel:0948282629">(094)828-26-29</a>
                    </p>
                </div>
                <div class="zvonok col-lg-2 col-md-2 col-sm-4 hidden-xs">
                    <a href="#" class="main-button"><?php _e('Заказать звонок', 'deluxeclimat')?></a>
                </div>
                <div class="hamb-block hidden-lg hidden-md col-sm-1 col-xs-1">
                    <a href="#voprosi" class="hamburger">☰</a>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
