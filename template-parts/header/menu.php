<?php
	$menu_name = 'menu-1';
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	if ( get_theme_mod('setting_menu-background') == 1 ) { 
		$extraClass = ' menu-background';
	}
	else {
		$extraClass = '';
	} ?>
	<ul class="chaos-main-menu<?php echo $extraClass;?>">
	<?php
	$count = 0;
	$submenu = false;
	foreach( $menuitems as $item ) {
		$title = $item->title;
		$link = $item->url;
		if ( !$item->menu_item_parent ) {
			$hasSubmenu = '';
			$parent_id = $item->ID;
			$submenu = hasSubmenu($menuitems, $parent_id); 
			if($submenu) {
				$hasSubmenu = ' has-submenu';
			}
			?>
			<li class="item<?php echo $hasSubmenu;?>">		
				<a href="<?php echo $link; ?>" class="title">
					<?php echo $title; ?>
				</a>
				<?php if ( $submenu ) { ?>
					<div class="chaos-megamenu-wrapper">
						<ul class="chaos-submenu">
							<?php echo doSubmenu($menuitems, $parent_id);?>
						</ul>
					<div style="clear: both;"></div>
				</div>
				<?php }?>
			</li>
		<?php } ?>	
	<?php } ?>
	</ul>
	<div class="mobile-menu">
		<i style="font-size: 50px; color: #43755c;" class="fas fa-hamburger"></i>		
	</div>
<?php

function hasSubmenu ($menuitems, $parent_id) {
	foreach( $menuitems as $child ) { 
		if ( $parent_id == $child->menu_item_parent )  { 
			return true; 
		}
	}
	return false;
}
function doSubmenu ($menuitems, $parent_id) {
	foreach( $menuitems as $child ) { 
		$title = $child->title;
		$link = $child->url;
		
		if ( $parent_id == $child->menu_item_parent )  { 
			$sub .= '<li class="sub-item">
						<a href="'.$link.'" class="title">
							'.$title.'
						</a>';
			if( hasSubmenu( $menuitems, $child->ID ) ) {
				$sub .= '<ul class="chaos-submenu">';
				$sub .= doSubmenu($menuitems, $child->ID);
				$sub .= '</ul>';
			} 
			$sub .= '</li>';
		}
	}
	return $sub;
}