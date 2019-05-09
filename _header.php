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
			font-family: "<?php echo get_option('setting_font');?>";
			font-size: <?php echo get_option('setting_textsize');?>;
		}
		#masthead {
			background-color: <?php echo get_theme_mod('setting_color-header');?>;
			background-image: url(<?php echo get_theme_mod('setting_header-background');?>);
			padding-top: <?php echo get_theme_mod('setting_header-padding');?>;
			padding-bottom: <?php echo get_theme_mod('setting_header-padding');?>;
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
		ul#menu-main li {
			padding: <?php echo get_theme_mod('setting_menu-padding');?>;
		}
		ul#menu-main li a {
			color: <?php echo get_theme_mod('setting_menu-color');?>
		}
		ul#menu-main li a:hover,
		ul#menu-main li.current_page_item a {
			color: <?php echo get_theme_mod('setting_menuhover-color');?>
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php echo get_theme_mod('select_font');?>
<?php echo get_option('select_font');?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
	
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
		<?php echo get_option('setting-radio')?>
			<?php if ( get_theme_mod('setting_header-align') == 'right' ) { ?>
				<div class="chaos-container chaos-header chaos-header-alin-right">
					<div class="chaos-main-menu siteBranding">
						<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class'     => 'main-menu',
									'container_class'		=>	'site-navigation',
								)
							);
						?>
						</nav>
					</div>
					<div class="chaos-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
							<img src="<?php echo get_theme_mod('setting_logo-img');?>" width="<?php echo get_option('setting_logo-width');?>" alt="logo" itemprop="logo" />
						</a>
					</div>
				</div>
			<?php } 
			else { ?>
				<div class="chaos-container chaos-header chaos-header-alin-<?php echo get_theme_mod('setting_header-align');?>">
					<div class="chaos-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
							<img src="<?php echo get_theme_mod('setting_logo-img');?>" width="<?php echo get_option('setting_logo-width');?>" alt="logo" itemprop="logo" />
						</a>
					</div>
					<div class="chaos-main-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu'
							)
						);
					?>
					</div>
				</div>
			<?php } ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
