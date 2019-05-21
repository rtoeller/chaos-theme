<?php if ( get_theme_mod('setting_header-align') == 'right' ) { ?>
	<div class="chaos-container chaos-header chaos-header-alin-right<?php echo $fullWidth;?>">
		<div class="chaos-main-menu">
			<?php
			 if ( get_theme_mod('setting_menu-background') == 1 ) { 
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'main-menu',
						'container_class'		=>	'menu-background',
					)
				);
			 }
			 else {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'main-menu',
					)
				);
			 }
			?>
		</div>
		<div class="chaos-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
				<img src="<?php echo get_theme_mod('setting_logo-img');?>" width="<?php echo get_option('setting_logo-width');?>" alt="logo" itemprop="logo" />
			</a>
		</div>
	</div>
<?php } 
else { ?>
	<div class="chaos-container chaos-header chaos-header-alin-<?php echo get_theme_mod('setting_header-align').$fullWidth;?>">
		<div class="chaos-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
				<img src="<?php echo get_theme_mod('setting_logo-img');?>" width="<?php echo get_option('setting_logo-width');?>" alt="logo" itemprop="logo" />
			</a>
		</div>
		<div class="chaos-main-menu mega-menu">
		<?php
			require get_template_directory() . '/template-parts/header/menu.php';
		?>
		</div>
	</div>
<?php } 