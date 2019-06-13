<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="chaos-pagetitle-wrapper">
	<?php require get_template_directory() . '/template-parts/content/breadcrumb.php';?>
</div>
<div class="chaos-wrapper">
	<section id="primary" class="content-area">
		
			<main id="main" class="site-main">
				<?php
					if( get_theme_mod('setting_sidebar-check') == 1 ) {
						$hasSidebar = ' has-sidebar';
					}
				?>
				<div class="chaos-container<?php echo $hasSidebar;?>">
					<div class="chaos-content">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					endwhile; // End of the loop.
					?>
					</div>
					<div class="chaos-sidebar">
						<div class="chaos-content">
							<?php dynamic_sidebar('custom-side-bar');?>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		
	</section><!-- #primary -->
</div>
<?php
get_footer();
