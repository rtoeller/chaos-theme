<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
<div class="chaos-wrapper" style="margin-top: <?php echo get_option('setting_page-margin');?>; margin-bottom: <?php echo get_option('setting_page-margin');?>;">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
				if( get_theme_mod('setting_sidebar-check') == 1 ) {
					$hasSidebar = ' has-sidebar';
				}
			?>
			<div class="chaos-container<?php echo $hasSidebar;?>">
				<div class="chaos-content">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
					<?php if ( have_posts() ) : ?>
						<?php
						// Start the Loop.
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content/content', 'excerpt' );

							// End the loop.
						endwhile;

						// Previous/next page navigation.
						twentynineteen_the_posts_navigation();

						// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content/content', 'none' );

					endif;
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
