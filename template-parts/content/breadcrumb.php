<div class="chaos-container">
	<?php if ( get_theme_mod('setting_display-pagetitle') == 1 ) { ?>
	<div class="chaos-pagetitle">
		<h1><?php echo get_the_title();?> </h1>
	</div>
	<?php } ?>
	<?php if ( get_theme_mod('setting_display-breadcrumb') == 1 ) { ?>
		<div class="chaos-breadcrumb">
			<?php 
				$id = get_the_ID();
				echo doBreadcrumb($id); 
			?>
		</div>
	<?php } ?>
</div>

<?php
function doBreadcrumb( $pid ){ 
	$parent = wp_get_post_parent_id( $page_id );
	$postType = get_post_type();

	if( !is_archive() ) {
		while ( $pid != 0 ) {
			$page_name = get_the_title( $pid );
			$link = get_the_permalink( $pid );
			$breadcrumb = '<a href="'.$link.'">'.$page_name. '</a>'.$space.$breadcrumb;
			$space = get_theme_mod('setting_symbol-breadcrumb');
			$pid = wp_get_post_parent_id( $pid );
		}
	}
	else {
		$space = get_theme_mod('setting_symbol-breadcrumb');
	}

	if( $postType == 'post' ) {
		$categories = get_the_category( $page_id );
		$cat_name = $categories[0]->name;
		$cat_ID = $categories[0]->cat_ID;
		$link = get_category_link( $cat_ID );
		$parent_id  = $categories[0]->parent;
		$catLinks .= '<a href="'.$link.'">'.$cat_name. '</a>';
		$parentCat = get_category_parents( $parent_id, true, $space); 
		$catLinks = $parentCat.$catLinks;
		if( !is_archive() ) {
			$catLinks .= $space; 
		}
		$breadcrumb = $catLinks.$breadcrumb;
	}
    
	$wp_query = null; 
	$wp_query = $temp;
	
	return $breadcrumb;
}
