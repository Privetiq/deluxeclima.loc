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
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Days+One|Roboto:400,500,700" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="mywrap">
            <div class="logo">
                <a href="<?php get_home_url(); ?>/" class="logo">
                <?php if (is_page(array(50, 52, 147))) {
                    echo '<img class="logotype" src="' . get_template_directory_uri() . '/img/logomin.png"/>';
                } else {
                    echo '<img class="logotype" src="' . get_template_directory_uri() . '/img/logo-2min.png"/>';
                } ?>
                </a>
            </div>
            <div class="logotext-block">
                <span class="text-logo">Deluxe Climate</span>
                <span class="text-logo2">Лучшее решение для Вас</span>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
            <div class="block-phones">
                <p class="phone">
                    <a href="tel:0672262629">(067)226-26-29</a>
                    <a href="tel:0952872629">(095)287-26-29</a>
                    <a href="tel:0442282629">(044)228-26-29</a>
                </p>
            </div>
            <div class="zvonok">
                <button class="callbackmenu main-button"><?php _e('Заказать звонок', 'deluxeclima')?></button>
            </div>
            <div class="hamb-block">
                <span class="text-menu">МЕНЮ</span>
                <button id="hamb" class="hamburger">☰</button>
            </div>
        </div>
	</header><!-- #masthead -->
    <div id="menuactive" class="menuactive animated flipInY">
        <button id="closemenu">X</button><br>
        <div class="inmenuwrap">
            <div class="inmenu-block">
                <a class="inmenu" href="#">Комплексные решения для дома и офиса</a>
                <a class="inmenu" href="#">Отопление</a>
                <a class="inmenu" href="<?php get_home_url()?>/conditioners">Охлаждение</a>
                <a class="inmenu" href="#">Энергозберегающие технологии</a>
            </div>
            <button class="callbackmenu main-button"><?php _e('Заказать звонок', 'deluxeclima')?></button><br>
            <div class="languageblock">
                <a class="language-pick" href="#">Рус</a>
                <a class="language-pick" href="#">Укр</a>
                <a class="language-pick" href="#">Eng</a>
            </div>
        </div>
    </div>
    <div id="formcallback" class="animated flipInX">
        <button id="closeform">X</button><br>
        <p class="tenminutes">Укажите контакты и специалист в течении 10 минут свяжется с Вами</p>
        <?php echo do_shortcode('[contact-form-7 id="131" title="form-callback"]') ?>
    </div>

	<div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php echo do_shortcode("[metaslider id=58]"); ?>
                <div class="container">
                    <section class="buttonblock row">
                        <div class="buttonblock-button"><a href="<?php get_home_url(); ?>/" class="but_komleks">Комплексное решение</a></div>
                        <div class="buttonblock-button"><a href="<?php get_home_url(); ?>/" class="but_otoplenie">Отопление</a></div>
                        <div class="buttonblock-button"><a href="<?php get_home_url(); ?>/conditioners" class="but_ohlad">Охлаждение</a></div>
                        <div class="buttonblock-button"><a href="<?php get_home_url(); ?>/" class="but_energoteh">Энергосберегающие технологии</a></div>
                    </section>
                </div>
