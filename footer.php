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
	<div class="chaos-copyright">
	<?php
		if ( get_theme_mod('setting_100-width-copyright') == 1 ) {
			$fullWidthCopyright = ' chaos-full-width';
		}
		else {
			$fullWidthCopyright = '';
		}
	?>
		<div class="chaos-container <?php echo get_theme_mod('setting_align-copyright').$fullWidthCopyright;?>">
			<?php if ( get_theme_mod('setting_align-copyright') == 'copyright2' ) { ?>
				<div class="chaos-social-media-icons chaos-social-media-copyright">
					<?php if( get_option('setting_facebook-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_facebook-socialmedia');?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_twitter-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_twitter-socialmedia');?>" target="_blank">
							<i class="fab fa-twitter"></i> 
						</a>
					<?php } ?>
					<?php if( get_option('setting_instagram-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_instagram-socialmedia');?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_xing-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_xing-socialmedia');?>" target="_blank">
							<i class="fab fa-xing"></i> 
						</a>
					<?php } ?>
				</div>
				<div class="chaos-copyright-text">
					<?php echo get_theme_mod('setting_text-copyright');?>
				</div>
				<div style="clear: both;"></div>
			<?php } else { ?>
				<div class="chaos-copyright-text">
					<?php echo get_theme_mod('setting_text-copyright');?>
				</div>
				<div class="chaos-social-media-icons chaos-social-media-copyright">
					<?php if( get_option('setting_facebook-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_facebook-socialmedia');?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_twitter-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_twitter-socialmedia');?>" target="_blank">
							<i class="fab fa-twitter"></i> 
						</a>
					<?php } ?>
					<?php if( get_option('setting_instagram-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_instagram-socialmedia');?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_xing-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_xing-socialmedia');?>" target="_blank">
							<i class="fab fa-xing"></i> 
						</a>
					<?php } ?>
				</div>
				<div style="clear: both;"></div>
			<?php }?>			
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
