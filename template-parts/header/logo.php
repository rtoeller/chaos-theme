<?php if ( get_theme_mod('setting_header-align') == 'right' ) { ?>
	<div class="chaos-container chaos-header chaos-header-alin-right<?php echo $fullWidth;?>">
		<?php require get_template_directory() . '/template-parts/header/menu.php';?>
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
		<?php
			require get_template_directory() . '/template-parts/header/menu.php';
		?>
	</div>
<?php } 