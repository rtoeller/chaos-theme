<?php
	$menu_name = 'menu-1';
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	?>
	<ul class="chaos-main-menu">
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
					<ul class="chaos-submenu">
					<?php foreach( $menuitems as $item2 ) { 
						$title = $item2->title;
						$link = $item2->url;
						?>
						<?php if ( $parent_id == $item2->menu_item_parent )  { 
							?>
							<li class="sub-item">
								<a href="<?php echo $link; ?>" class="title">
									<?php echo $title; ?>
								</a>
							</li>
						<?php } ?>								
					<?php }?>
				</ul>
				<?php }?>
			</li>
		<?php } ?>	
	<?php } ?>
	</ul>
		