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
		.chaos-wrapper  {
			margin-top: <?php echo get_option('setting_page-margin');?>;
			margin-bottom: <?php echo get_option('setting_page-margin');?>;
		}
		.site-branding {
			width: <?php echo get_option('setting_textfield');?>
		}
		.chaos-container {
			width: <?php echo get_option('setting_content-width');?>;
			width: calc(<?php echo get_option('setting_content-width');?> + (<?php echo get_option('setting_content-padding');?>*2));
			padding-left: <?php echo get_option('setting_content-padding');?>;
			padding-right: <?php echo get_option('setting_content-padding');?>;
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
		.chaos-copyright {
			background-color: <?php echo get_theme_mod('setting_background-copyright');?>;
			color: <?php echo get_theme_mod('setting_textcolor-copyright');?>;
			font-family: "<?php echo get_theme_mod( 'select_font-copyright');?>";
			font-size: <?php echo get_option('setting_textsize-copyright');?>;
			font-weight: <?php echo get_option('setting_font-weight-copyright')?>;
			line-height: <?php echo get_option('setting_line-height-copyright')?>;
		}		
		.chaos-copyright a {
			color: <?php echo get_theme_mod('setting_linkkcolor-copyright');?>;
		}
		.chaos-social-media-copyright a {
			color: <?php echo get_theme_mod('setting_iconcolor-copyright');?> ;
			font-size: <?php echo get_theme_mod('setting_iconsize-copyright');?>;
			padding-right: <?php echo get_theme_mod('setting_iconpadding-copyright');?>;
		}
		.chaos-contact-header {
			background-color: <?php echo get_theme_mod('setting_background-contact-header');?>;
			color: <?php echo get_theme_mod('setting_textcolor-contact-header');?>;
			font-family: "<?php echo get_theme_mod( 'select_font-contact-header');?>";
			font-size: <?php echo get_option('setting_textsize-contact-header');?>;
			font-weight: <?php echo get_option('setting_font-weight-contact-header')?>;
			line-height: <?php echo get_option('setting_line-height-contact-header')?>;
		}		
		.chaos-contact-header a {
			color: <?php echo get_theme_mod('setting_linkkcolor-contact-header');?>;
		}
		.chaos-social-media-contact-header a {
			color: <?php echo get_theme_mod('setting_iconcolor-contact-header');?> ;
			font-size: <?php echo get_theme_mod('setting_iconsize-contact-header');?>;
			padding-right: <?php echo get_theme_mod('setting_iconpadding-contact-header');?>;
		}
	</style>	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php if ( get_theme_mod('setting_display-contact-header') == 1 ) { ?>
		<div class="chaos-contact-header">
		<?php
			if ( get_theme_mod('setting_100-width-contact-header') == 1 ) {
				$fullWidthContact = ' chaos-full-width';
			}
			else {
				$fullWidthContact = '';
			}
		?>
			<div class="chaos-container <?php echo get_theme_mod('setting_align-contact-header').$fullWidthContact;?>">
				<?php require get_template_directory() . '/template-parts/header/contact-header.php';?>
			</div>
		</div>
	<?php } ?>
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
		
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>" style="background-size: <?php echo $backgroundSize;?>;" >
			<?php require get_template_directory() . '/template-parts/header/logo.php';?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
