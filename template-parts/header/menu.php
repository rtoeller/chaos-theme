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
			$menu_classes = '';
			$classes = '';
			$fullWidth = '';
			$parent_id = $item->ID;
			$classes = $item->classes;
			foreach( $classes as $class )  {
				$space = ' ';
				$menu_classes .= $space.$class;
			}
			$searchMegaMenu = strpos($menu_classes, 'mega');
			$searchFullWidth = strpos($menu_classes, 'full-width');
			$submenu = hasSubmenu($menuitems, $parent_id); 
			if($submenu) {
				$hasSubmenu = ' has-submenu';
			}
			?>
			<li class="item<?php echo $menu_classes.$hasSubmenu;?>">		
				<a href="<?php echo $link; ?>" class="title">
					<?php echo $title; ?>
				</a>
				<?php if ( $submenu ) { ?>
					<?php if ( $searchMegaMenu !== false ) { ?>
						<?php if ( $searchFullWidth !== false ) { 
							$fullWidth = ' chaos-full-width';
						} ?>
					 	<div class="chaos-container chaos-megamenu-wrapper<?php echo $fullWidth;?>">
					<?php } ?>
						<ul class="chaos-submenu">
							<?php echo doSubmenu($menuitems, $parent_id);?>
						</ul>
					<?php if ( $searchMegaMenu !== false ) { ?>
						<div style="clear: both;"></div>
						</div>
					<?php } ?>
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