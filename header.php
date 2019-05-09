<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

	<style type="text/css">
		body {
			font-family: "<?php echo get_theme_mod( 'select_font-generell');?>";
			font-size: <?php echo get_option('setting_textsize');?>;
			font-weight: <?php echo get_option('setting_font-weight-generell')?>;
			line-height: <?php echo get_option('setting_line-height-generell')?>;
			color: <?php echo get_theme_mod('setting_textcolor-generell');?>;
		}
		a {
			color: <?php echo get_theme_mod('setting_linkcolor-generell');?>;
		}
		#content {
			background-color: <?php echo get_theme_mod('setting_generell-header');?>;
			background-image: url(<?php echo get_theme_mod('setting_generell-background');?>);
			background-position: <?php echo get_theme_mod('select_generell-background-position');?>;
			background-repeat: <?php echo get_theme_mod('select_generell-background-repeat');?>;
		}
		#masthead {
			background-color: <?php echo get_theme_mod('setting_color-header');?>;
			background-image: url(<?php echo get_theme_mod('setting_header-background');?>);
			background-position: <?php echo get_theme_mod('select_header-background-position');?>;
			background-repeat: <?php echo get_theme_mod('select_header-background-repeat');?>;
			padding-top: <?php echo get_theme_mod('setting_header-padding');?>;
			padding-bottom: <?php echo get_theme_mod('setting_header-padding');?>;
			border-bottom: <?php echo get_theme_mod('setting_header-borderbottom');?>;
		
		}
		.chaos-wrapper  {
			margin-top: <?php echo get_option('setting_page-margin');?>;
			margin-bottom: <?php echo get_option('setting_page-margin');?>;
		}
		.site-branding {
			width: <?php echo get_option('setting_textfield');?>
		}
		.chaos-container {
			width: <?php echo get_option('setting_content-width');?>
		}
		.chaos-container h1 {
			font-size: <?php echo get_option('setting_h1');?>
		}
		.chaos-container h2 {
			font-size: <?php echo get_option('setting_h2');?>
		}
		.chaos-container h3 {
			font-size: <?php echo get_option('setting_h3');?>
		}
		.has-sidebar .chaos-content {
			display: inline-block;
			width: calc(100% - <?php echo get_option('setting_sidebar-width');?>);
		}
		.has-sidebar .chaos-sidebar {
			width: <?php echo get_option('setting_sidebar-width');?>;
			display: inline-block;
			float: right;
		}
		.chaos-main-menu ul.main-menu li {
			padding: <?php echo get_theme_mod('setting_menu-padding');?>;
		}
		.chaos-main-menu ul.main-menu li a {
			color: <?php echo get_theme_mod('setting_menu-color');?>
		}
		.chaos-main-menu ul.main-menu li a:hover,
		.chaos-main-menu ul.main-menu li.current_page_item a {
			color: <?php echo get_theme_mod('setting_menuhover-color');?>;
		}
		.menu-background ul li.current_page_item,
		.menu-background ul li:hover {
			background-color: <?php echo get_theme_mod('setting_menuhover-color');?>;
			color: <?php echo get_theme_mod('setting_menu-color');?>;
		}
		.menu-background ul li.current_page_item a,
		.menu-background ul li a:hover  {
			color: <?php echo get_theme_mod('setting_menu-color');?> !important;
		}
		.chaos-footer {
			border-top: <?php echo get_theme_mod('setting_footer-bordertop');?>;
			background-color: <?php echo get_theme_mod('setting_color-footer');?>;
			padding-top: <?php echo get_theme_mod('setting_footer-padding')?>;
			padding-bottom: <?php echo get_theme_mod('setting_footer-padding')?>;
			font-family: "<?php echo get_theme_mod( 'select_font-footer');?>";
			font-size: <?php echo get_option('setting_textsize-footer');?>;
			font-weight: <?php echo get_option('setting_font-weight-footer')?>;
			line-height: <?php echo get_option('setting_line-height-footer')?>;
		}
		.chaos-footer-widget {
			color: <?php echo get_theme_mod('setting_color-text-footer');?>; 
		}
		.chaos-footer-widget .widget-content a {
			color: <?php echo get_option('setting_color-link-footer');?>
		}
		.chaos-contact-header a i {
			padding-right: <?php echo get_theme_mod('setting_padding-socialmedia');?>;
			font-size: <?php echo get_theme_mod('setting_size-socialmedia');?>;
			color: <?php echo get_theme_mod('setting_iconcolor-socialmedia');?>;
		}		
	</style>	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
		<?php 
			if ( get_theme_mod('setting_header-background-100') == 1 ) {
				$backgroundSize = '100%';
			}
			else {
				$backgroundSize = 'auto';
			}
			
			if ( get_theme_mod('setting_header-100-width') == 1 ) {
				$fullWidth = ' chaos-full-width';
			}
			else {
				$fullWidth = '';
			}
		?>
		<div class="chaos-contact-header">
			<div class="chaos-container">
				<div class="chaos-social-media-icons chaos-social-media-align-<?php echo get_theme_mod('setting_align-socialmedia');?>">
					<?php if( get_option('setting_facebook-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_facebook-socialmedia');?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_twitter-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_twitter-socialmedia');?>" target="_blank">
							<i class="fab fa-twitter"></i> 
						</a>
					<?php } ?>
					<?php if( get_option('setting_instagram-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_instagram-socialmedia');?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					<?php } ?>
					<?php if( get_option('setting_xing-socialmedia')) { ?>
						<a href="<?php echo get_option('setting_xing-socialmedia');?>" target="_blank">
							<i class="fab fa-xing"></i> 
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>" style="background-size: <?php echo $backgroundSize;?>;" >
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
				</div>
			<?php } ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
