<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<?php if ( get_theme_mod('setting_display-metatags') == 1 ) { ?>
	<div class="entry-meta">
		<?php if ( get_theme_mod('setting_display-author-metatags') == 1 ) { ?>
			<?php twentynineteen_posted_by(); ?>
			<?php } ?>
		<?php if ( get_theme_mod('setting_display-date-metatags') == 1 ) { ?>
			<?php twentynineteen_posted_on(); ?>
		<?php } ?>
		<?php if ( get_theme_mod('setting_display-comments-metatags') == 1 ) { ?>
			<span class="comment-count">
				<?php
				if ( ! empty( $discussion ) ) {
					twentynineteen_discussion_avatars_list( $discussion->authors );
				}
				?>
				<?php twentynineteen_comment_count(); ?>
			</span>
		<?php } ?>
		<?php
		// Edit post link.
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
				'</span>'
			);
		?>
	</div><!-- .meta-info -->
<?php } ?>
<?php endif; ?>
