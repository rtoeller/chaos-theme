<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php if ( ! is_page() ) : ?>
<?php if ( get_theme_mod('setting_display-metatags') == 1 ) { ?>
	<div class="entry-meta">
		<?php if ( get_theme_mod('setting_display-author-metatags') == 1 ) { ?>
			<?php twentynineteen_posted_by(); echo get_theme_mod('setting_display-date-metatags');?>
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
		<?php }
		if ( get_theme_mod('setting_display-categories-metatags') == 1 ) { 
			/* translators: used between list items, there is a space after the comma. */
			$categories_list = get_the_category_list( __( ', ', 'twentynineteen' ) );
			if ( $categories_list ) {
				printf(
					/* translators: 1: SVG icon. 2: posted in label, only visible to screen readers. 3: list of categories. */
					'<span class="cat-links">%1$s<span class="screen-reader-text">%2$s</span>%3$s</span>',
					twentynineteen_get_icon_svg( 'archive', 16 ),
					__( 'Posted in', 'twentynineteen' ),
					$categories_list
				); // WPCS: XSS OK.
			}
		}
		if ( get_theme_mod('setting_display-tags-metatags') == 1 ) { 
			/* translators: used between list items, there is a space after the comma. */
			$tags_list = get_the_tag_list( '', __( ', ', 'twentynineteen' ) );
			if ( $tags_list ) {
				printf(
					/* translators: 1: SVG icon. 2: posted in label, only visible to screen readers. 3: list of tags. */
					'<span class="tags-links">%1$s<span class="screen-reader-text">%2$s </span>%3$s</span>',
					twentynineteen_get_icon_svg( 'tag', 16 ),
					__( 'Tags:', 'twentynineteen' ),
					$tags_list
				); // WPCS: XSS OK.
			}
		}
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
