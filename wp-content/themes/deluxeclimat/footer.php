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
		<div class="site-info">
            <div class="logo_footer hidden-sm hidden-xs">
                <?php echo get_custom_logo(); ?>
            </div>
            <p><strong>2017, Deluxeclimate</strong></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/maskedinput.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
