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
