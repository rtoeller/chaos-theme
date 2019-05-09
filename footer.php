<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer chaos-footer">
		<div class="chaos-container"><!-- 
			<?php
				if ( get_option('setting_footer-columns') != '' ){
					$footerCols = intval(get_option('setting_footer-columns'));
				
					for( $i = 1; $i <= $footerCols; $i++ ) { 
						$footerWidget = 100 / $footerCols; ?>
					#footer-widget --><div class="chaos-footer-widget" style="width: <?php echo $footerWidget;?>%"><!--
					--><?php dynamic_sidebar('footer-'.$i.'-widget'); ?><!--
					--></div><!--
					<?php
					}
				}	
			?>-->
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?> <!--
				--></nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
