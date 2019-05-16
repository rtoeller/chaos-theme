<?php 
	$file =  $_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-content/themes/twentynineteen/chaos-customizer.css';
	$css = '';

	// #content
	if ( get_theme_mod('setting_background-begin') == 'content' ) { 
		$css .= '#content {';
		if( get_theme_mod('setting_generell-header') ) {
			$css .= 'background-color: '.get_theme_mod('setting_generell-header').';';
		}
		if( get_theme_mod('setting_background') ) {
			$css .= 'background-image: url('. get_theme_mod('setting_background').');';
		}
		if( get_theme_mod('select_background-position') ) {
			$css .= 'background-position: '. get_theme_mod('select_background-position').';';
		}
		if( get_theme_mod('select_background-repeat') ) {
			$css .= 'background-repeat: '.get_theme_mod('select_background-repeat').';';
		}
		$css .= '}';
	}
	
	// body
	$css .= 'body {';
		if ( get_theme_mod('setting_background-begin') == 'body' ) { 
			if( get_theme_mod('setting_generell-header') ) {
				$css .= 'background-color: '.get_theme_mod('setting_generell-header').';';
			}
			if( get_theme_mod('setting_background') ) {
				$css .= 'background-image: url('. get_theme_mod('setting_background').');';
			}
			if( get_theme_mod('select_background-position') ) {
				$css .= 'background-position: '. get_theme_mod('select_background-position').';';
			}
			if( get_theme_mod('select_background-repeat') ) {
				$css .= 'background-repeat: '.get_theme_mod('select_background-repeat').';';
			}
		}
		if ( get_theme_mod( 'select_font-generell') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-generell').'";';
		}
		if ( get_option('setting_textsize') ){
			$css .= 'font-size: '.get_option('setting_textsize').';';
		}
		if ( get_option('setting_font-weight-generell') ){
			$css .= 'font-weight: '.get_option('setting_font-weight-generell').';';
		}
		if ( get_option('setting_line-height-generell') ){
			$css .= 'line-height: '.get_option('setting_line-height-generell').';';
		}
		if ( get_theme_mod('setting_textcolor-generell') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-generell').';';
		}
	$css .= '}';
	

	// a
	if ( get_theme_mod( 'setting_linkcolor-generell') ){
		$css .= 'a {
					color: '.get_theme_mod('setting_linkcolor-generell').';
				}';
	}

	//#masthead
	$css .= '#masthead {';
		if ( get_theme_mod( 'setting_color-header') ){
			$css .= 'background-color: '.get_theme_mod('setting_color-header').';';
		}
		if ( get_theme_mod('setting_header-background') ){
			$css .= 'background-image: url("'.get_theme_mod('setting_header-background').'");';
		}
		if ( get_theme_mod('select_header-background-position') ){
			$css .= 'background-position: '.get_theme_mod('select_header-background-position').';';
		}
		if ( get_theme_mod('select_header-background-repeat') ){
			$css .= 'background-repeat: '.get_theme_mod('select_header-background-repeat').';';
		}
		if ( get_theme_mod('setting_header-padding') ){
			$css .= 'padding-top: '.get_theme_mod('setting_header-padding').';';
			$css .= 'padding-bottom: '.get_theme_mod('setting_header-padding').';';
		}
		if ( get_theme_mod('setting_header-borderbottom') ){
			$css .= 'border-bottom: '.get_theme_mod('setting_header-borderbottom').';';
		}
	$css .= '}';
	/*
	.chaos-wrapper  {
		margin-top: <?php echo get_option('setting_page-margin');?>;
		margin-bottom: <?php echo get_option('setting_page-margin');?>;
	}
	.site-branding {
		width: <?php echo get_option('setting_textfield');?>
	}
	.chaos-container {
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
	}*/

	file_put_contents($file, $css);
?>