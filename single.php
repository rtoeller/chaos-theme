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
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}

				if ( get_theme_mod('setting_do-comments-metatags') == 1 ) { 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
			endwhile; // End of the loop.
			?>
			</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php
get_footer();
