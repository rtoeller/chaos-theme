<div class="chaos-container">
	<?php if ( get_theme_mod('setting_display-pagetitle') == 1 ) { ?>
	<div class="chaos-pagetitle">
		<h1><?php echo get_the_title();?> </h1>
	</div>
	<?php } ?>
	<div class="chaos-breadcrumb">
		<?php 
			$id = get_the_ID();
			echo doBreadcrumb($id); 
		?>
	</div>
</div>

<?php
function doBreadcrumb( $pid ){ 
    $parent = wp_get_post_parent_id( $page_id );
    while ( $pid != 0 ) {
        $page_name = get_the_title( $pid );
        $link = get_the_permalink( $pid );
        $breadcrumb = '<a href="'.$link.'">'.$page_name. '</a>'.$space.$breadcrumb;
        $space = get_option('setting_symbol-breadcrumb');
        $pid = wp_get_post_parent_id( $pid );
    }
	$wp_query = null; 
	$wp_query = $temp;
	
	return $breadcrumb;
}
