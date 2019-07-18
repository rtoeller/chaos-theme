<div class="chaos-main-menu">
	<?php
		doMainmenu(0);
	?>
	
</div>
<div class="mobile-menu">
		<i class="fas fa-hamburger"></i>		
		<div class="chaos-mobile-menu">
			<?php doMainmenu(1); ?>
		</div>
	</div>
<?php

function doMainmenu($mobile) { 
	$active_id = get_the_ID();
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
	//print_r($menuitems);
	foreach( $menuitems as $item ) {
		$title = $item->title;
		$link = $item->url;
		$id = $item->object_id;
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
				$mobileAfter = '<i class="arrow fas"></i>';
			}
			if( $active_id == $id ) {
				$active_class = ' active ';
			}
			else {
				$active_class = '';
			}
			?>
			<li class="item<?php if( $mobile == false) { echo $menu_classes;} echo $hasSubmenu;?>">		
				<a href="<?php echo $link; ?>" class="title<?php echo $active_class;?>">
					<?php 
						echo $title;
						if( $mobile == true ) {
							echo $mobileAfter;
						}
					?>
				</a>
				<?php if ( $submenu ) { ?>
					<?php if ( ($searchMegaMenu !== false ) and ( $mobile == false ) ) { ?>
						<?php if ( $searchFullWidth !== false ) { 
							$fullWidth = ' chaos-full-width';
						} ?>
					 	<div class="chaos-container chaos-megamenu-wrapper<?php echo $fullWidth;?>">
					<?php } ?>
						<ul class="chaos-submenu">
							<?php echo doSubmenu($menuitems, $parent_id, $submenu, $mobile, $active_id);?>
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
<?php
}

function hasSubmenu ($menuitems, $parent_id) {
	foreach( $menuitems as $child ) { 
		if ( $parent_id == $child->menu_item_parent )  { 
			return true; 
		}
	}
	return false;
}
function doSubmenu ($menuitems, $parent_id, $submenu, $mobile, $active_id) {
	if($submenu == true) {
		$hasSubmenu = ' has-submenu';

		if( $mobile == true ) {
			$mobileAfter = '<i class="arrow fas"></i>';
			
		}	
	}
	foreach( $menuitems as $child ) { 
		$title = $child->title;
		$link = $child->url;
		$id = $child->object_id;

		if( $active_id == $id ) {
			$active_class = ' active ';
		}
		else {
			$active_class = '';
		}
	
		if ( $parent_id == $child->menu_item_parent )  { 
			if( hasSubmenu( $menuitems, $child->ID ) ) {
				$submenu = true;
				$sub .= '<li class="sub-item has-submenu"><a href="'.$link.'" class="title'.$active_class.'">'.$title;
				$sub .= $mobileAfter.'</a><ul class="chaos-submenu">';
				$sub .= doSubmenu($menuitems, $child->ID ,$submenu, $mobile,  $active_class);
				$sub .= '</ul>';
			} 
			else {
				$sub .= '<li class="sub-item">
							<a href="'.$link.'" class="title'.$active_class.'">
								'.$title.	
							'</a>';
			}
			$sub .= '</li>';
		}
	}
	return $sub;
}