<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deluxeclimat
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" style="background-color: <?php if (is_page(array(50, 52, 147))) {echo '#ff9200';} else {echo "#3b96ca";}?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="logo_footer col-lg-3 col-md-4 col-sm-6 hidden-xs">
                        <a href="<?php get_home_url(); ?>/" class="logo">
                            <?php if (is_page(array(50, 52, 147))) {
                                echo '<img class="logotype" src="' . get_template_directory_uri() . '/img/logomin.png"/>';
                            } else {
                                echo '<img class="logotype" src="' . get_template_directory_uri() . '/img/logo-2min.png"/>';
                            } ?>
                        </a>
                        <div class="logotext-block">
                            <br>
                            <span class="text-logo">Deluxe Climate</span>
                            <span class="text-logo2">Лучшее решение для Вас</span>
                        </div>
                    </div>
        
                    <p class="col-lg-6 col-md-4 col-sm-3 col-xs-12"><strong>2017, Deluxeclimate</strong></p>
                    <p class="col-lg-3 col-md-4 col-sm-3 hidden-xs"><strong>ИНН 1234567890</strong></p>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<div id="formcallback" class="animated flipInX">
    <div class="callback-container">
        <button id="closeform">X</button><br>
        <span class="callback-head">Консультация специалиста</span>
        <span class="callback-text">Заполнитеформуниже и мы с вами свяжемся</span>
        <?php echo do_shortcode('[contact-form-7 id="131" title="form-callback"]') ?>
    </div>
    <div class="formcallback-overlay"></div>
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/maskedinput.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    new WOW().init();
    (function($){
        $(window).load(function(){

            $(".loop-catalog").mCustomScrollbar({
                theme:"dark-thick"
            });

        });
    })(jQuery);
</script>
</body>
</html>
