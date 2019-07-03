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
		<div class="chaos-container">
		<?php 
			if ( get_theme_mod('setting_footer-columns') != '' ){
				$footerCols = intval(get_theme_mod('setting_footer-columns')); 
			?>
			<div class="wp-block-columns has-<?php echo $footerCols;?>-columns"><!-- 
				<?php
					for( $i = 1; $i <= $footerCols; $i++ ) { 
						$footerWidget = 100 / $footerCols; ?>
					#footer-widget --><div class="wp-block-column" ><!--
					--><?php dynamic_sidebar('footer-'.$i.'-widget'); ?><!--
					--></div><!--
					<?php
					}
				?>-->
			</div>
		<?php }
		else { 
			$footerCols = 4;
			?>
			<div class="wp-block-columns has-<?php echo $footerCols;?>-columns"><!-- 
				<?php
					for( $i = 1; $i <= $footerCols; $i++ ) { 
						$footerWidget = 100 / $footerCols; ?>
					#footer-widget --><div class="wp-block-column" ><!--
					--><h3>Überschrift</h3><!--
					--><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptuvolua.</p><!--
					--></div><!--
					<?php
					}						 
				?>-->
			</div>
		<?php } ?>
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
			<?php require get_template_directory() . '/template-parts/footer/copyright.php';?>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
