<?php 
	// path to wordpress
	$file = ABSPATH . 'wp-content/themes/chaos/chaos-customizer.css';
	$css = '';

	//primary color
	if ( get_theme_mod( 'setting_primarycolor-generell' ) ) {
		$primary = get_theme_mod( 'setting_primarycolor-generell' );
	}
	else {
		$primary = '#43755c';
	}

	// contentwidth
	if ( get_theme_mod('setting_content-width') ) {
		$width = get_theme_mod('setting_content-width');
		$width = str_replace('px', '', $width);
		$width = str_replace('%', '', $width);
		$width = intval($width);
	}
	if ( get_theme_mod('setting_content-padding') ) {
		$padding = get_theme_mod('setting_content-padding');
		$padding = str_replace('px', '', $padding);
		$padding = str_replace('%', '', $padding);
		$padding = intval($padding);
	}
	if ( get_theme_mod('setting_menu-responsive') ) {
		$burgermenu = get_theme_mod('setting_menu-responsive');
		$burgermenu = str_replace('px', '', $burgermenu);
		$burgermenu = str_replace('%', '', $burgermenu);
		$burgermenu = intval($burgermenu);
	}
	

	// #content
	if ( get_theme_mod('setting_background-begin') == 'content' ) { 
		$css .= '#content {';
		if( get_theme_mod('setting_backgroundcolor-background') ) {
			$css .= 'background-color: '.get_theme_mod('setting_backgroundcolor-background').';';
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
			if( get_theme_mod('setting_backgroundcolor-background') ) {
				$css .= 'background-color: '.get_theme_mod('setting_backgroundcolor-background').';';
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
		if ( get_theme_mod( 'select_fontbody-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_fontbody-fonts').'";';
		}
		else {
			$css .= 'font-family: "Lato";';
		}

		if ( get_theme_mod('setting_textsize-body-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-body-fonts').';';
		}
		else {
			$css .= 'font-size: 16px;';	
		}

		if ( get_theme_mod('setting_font-weight-body-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-body-fonts').';';
		}
		
		if ( get_theme_mod('setting_line-height-body-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-fonts').';';
		}
		
		if ( get_theme_mod('setting_textcolor-body-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-body-fonts').';';
		}
		else {
			$css .= 'color: #3d3d3d;';
		}
	$css .= '}';

	// main 
	if ( get_theme_mod('setting_page-margin') ) {
		$css .= '#main { ';
			$css .= 'margin-top: '.get_theme_mod('setting_page-margin').';';
			$css .= 'margin-bottom: '.get_theme_mod('setting_page-margin').';';
		$css .= '}';
	}
	else {
		$css .= '#main { ';
			$css .= 'margin-top: 50px;';
			$css .= 'margin-bottom: 50px;';
		$css .= '}';
	}
	
	// chaos-container
	if ( get_theme_mod('setting_content-width') ){
		$css .= '.chaos-container, .chaos-content-text, #main .chaos-container.has-sidbar { ';
			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'max-width: calc('.get_theme_mod('setting_content-width').' + ('.get_theme_mod('setting_content-padding').'*2));';
			}
			else {
				$css .= 'max-width: calc('.get_theme_mod('setting_content-width').' + (30px*2));';
			}		

			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'padding-left: '.get_theme_mod('setting_content-padding').';';
				$css .= 'padding-right: '.get_theme_mod('setting_content-padding').';';
			}
			else {
				$css .= 'padding-left: 30px;';
				$css .= 'padding-right: 30px;';
			}
			$css .= 'margin: auto;';
		$css .= '}';
		$css .= '#main .entry-content > *, article header, .entry .entry-header, #main .entry .entry-footer {';
			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'max-width: calc('.get_theme_mod('setting_content-width').' + ('.get_theme_mod('setting_content-padding').'*2));';
			}
			else {
				$css .= 'max-width: calc('.get_theme_mod('setting_content-width').' + (30px*2));';
			}
			$css .= 'margin-left: auto !important;';
			$css .= 'margin-right: auto !important;';
			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'padding-left: '.get_theme_mod('setting_content-padding').';';
				$css .= 'padding-right: '.get_theme_mod('setting_content-padding').';';
			}
			else {
				$css .= 'padding-left: 30px;';
				$css .= 'padding-right: 30px;';
			}
		$css .= '}';
	
		// chaos-container fullwidth
		$css .= '#main .entry-content > div.alignfull {';
			$css .= 'left: 0px;';
			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'padding-left: '.get_theme_mod('setting_content-padding').';';
				$css .= 'padding-right: '.get_theme_mod('setting_content-padding').';';
				$css .= 'max-width: calc(100% + ('.get_theme_mod('setting_content-padding').'*2));';
				$css .= 'width: calc(100% + ('.get_theme_mod('setting_content-padding').'*2));';
			}
			else {
				$css .= 'padding-left: 30px;';
				$css .= 'padding-right: 30px;';
				$css .= 'max-width: calc(100% + (30px*2));';
				$css .= 'width: calc(100% + (30px*2));';
			}
			
		$css .= '}';
	
		// has sidebar
		$css .= '.has-sidebar .chaos-content {';
			$css .= 'display: inline-block;';
			$css  .= 'width: calc(100% - '.get_theme_mod('setting_sidebar-width').');';
			$css .= 'padding-right: calc('.get_theme_mod('setting_content-padding').' / 2);';
		$css .= '}';
		$css .= '.has-sidebar .chaos-sidebar {';
			$css .= 'width: '.get_theme_mod('setting_sidebar-width').';';
			$css .= 'display: inline-block;';
			$css .= 'float: right;';
			$css .= 'padding-left: calc('.get_theme_mod('setting_content-padding').' / 2);';
		$css .= '}';
	}
	else {
		$css .= '.chaos-container, .chaos-content-text, #main .chaos-container.has-sidbar { ';
			$css .= 'max-width: calc(1000px + (30px*2));';
			$css .= 'padding-left: 30px;';
			$css .= 'padding-right: 30px;';
			$css .= 'margin: auto;';
		$css .= '}';
		$css .= '#main .entry-content > *, article header, .entry .entry-header, #main .entry .entry-footer {';
			$css .= 'max-width: calc(1000px + (30px*2));';
			$css .= 'margin-left: auto !important;';
			$css .= 'margin-right: auto !important;';
			$css .= 'padding-left: 30px;';
			$css .= 'padding-right: 30px;';
		$css .= '}';
	}
	$css .= '.chaos-content-text { ';
		$css .= 'padding-left: 0px;';
		$css .= 'padding-right: 0px;';
	$css .= '}';

	// chaos-container in main
	$css .= '#main .chaos-container { ';
		$css .= 'max-width: 100%;';
		$css .= 'width: 100%;';
		$css .= 'padding-left: 0px;';
		$css .= 'padding-right: 0px;';
	$css .= '}';
	
	
	// h1 
	$css .= '.chaos-container h1 { ';
		if ( get_theme_mod( 'select_font-h1-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h1-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h1-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h1-fonts').';';
		}
		else {
			$css .= 'font-size: 40px;';
		}
		if ( get_theme_mod('setting_font-weight-h1-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h1-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h1-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h1-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h1-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h1-fonts').';';
		}
	$css .= '}';
	
	// h2 
	$css .= '.chaos-container h2 { ';
		if ( get_theme_mod( 'select_font-h2-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h2-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h2-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h2-fonts').';';
		}
		else {
			$css .= 'font-size: 36px;';
		}
		if ( get_theme_mod('setting_font-weight-h2-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h2-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h2-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h2-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h2-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h2-fonts').';';
		}
	$css .= '}';

	// h3 
	$css .= '.chaos-container h3 { ';
		if ( get_theme_mod( 'select_font-h3-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h3-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h3-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h3-fonts').';';
		}
		else {
			$css .= 'font-size: 28px;';
		}
		if ( get_theme_mod('setting_font-weight-h3-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h3-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h3-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h3-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h3-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h3-fonts').';';
		}
	$css .= '}';
	
	// h4 
	$css .= '.chaos-container h4 { ';
		if ( get_theme_mod( 'select_font-h4-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h4-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h4-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h4-fonts').';';
		}
		if ( get_theme_mod('setting_font-weight-h4-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h4-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h4-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h4-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h4-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h4-fonts').';';
		}
	$css .= '}';

	// h5 
	$css .= '.chaos-container h5 { ';
		if ( get_theme_mod( 'select_font-h5-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h5-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h5-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h5-fonts').';';
		}
		if ( get_theme_mod('setting_font-weight-h5-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h5-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h5-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h5-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h5-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h5-fonts').';';
		}
	$css .= '}';
	
	// h6 
	$css .= '.chaos-container h6 { ';
		if ( get_theme_mod( 'select_font-h6-fonts') ){
			$css .= 'font-family: "'.get_theme_mod( 'select_font-h6-fonts').'";';
		}
		if ( get_theme_mod('setting_textsize-h6-fonts') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-h6-fonts').';';
		}
		if ( get_theme_mod('setting_font-weight-h6-fonts') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-h6-fonts').';';
		}
		if ( get_theme_mod('setting_line-height-h6-fonts') ){
			$css .= 'line-height: '.get_theme_mod('setting_line-height-h6-fonts').';';
		}
		if ( get_theme_mod('setting_textcolor-h6-fonts') ){
			$css .= 'color: '.get_theme_mod('setting_textcolor-h6-fonts').';';
		}
	$css .= '}';

	// a
	if ( get_theme_mod( 'setting_linkcolor-fonts') ){
		$css .= 'a { ';
			$css .= 'color: '.get_theme_mod('setting_linkcolor-fonts').';';
		$css .= '}';
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
		else {
			$css .= 'padding-top: 30px;';
			$css .= 'padding-bottom: 30px;';
		}

		if ( get_theme_mod('setting_header-borderbottom') ){
			$css .= 'border-bottom: '.get_theme_mod('setting_header-borderbottom').';';
		}
		else {
			$css .= 'border-bottom: 8px solid '.$primary.';';
		}
	$css .= '}';

	//.chaos-main-menu
	if ( get_theme_mod('setting_submenu-color') ){
		$css .= 'ul.chaos-submenu li.sub-item a { ';
			$css .= 'background-color: '.get_theme_mod('setting_submenu-color').';';
		$css .= '}';
	}
	else {
		$css .= 'ul.chaos-submenu li.sub-item a { ';
			$css .= 'background-color: #f1f1f1;';
		$css .= '}';
	}
	
	if ( get_theme_mod('setting_menuhover-color') ) {
		$css .= 'ul.chaos-main-menu.menu-background > li:hover > a,	ul.chaos-main-menu.menu-background > li.current_page_item > a { ';
			$css .= 'color: '. get_theme_mod('setting_menuhover-color').';';
		$css .= '}';
	}
	else {
		$css .= 'ul.chaos-main-menu.menu-background > li:hover > a,	ul.chaos-main-menu.menu-background > li.current_page_item > a { ';
			$css .= 'color: #3d3d3d;';
		$css .= '}';
	}

	$css .= 'ul.chaos-main-menu.menu-background > li > a:hover, ul.chaos-main-menu.menu-background > li.active > a  { ';
		$css .= 'background-color: '.$primary.';';
		$css .= 'color: #3d3d3d;';
	$css .= '}';

	$css .= 'ul.chaos-main-menu.menu-background > li > a { ';
		$css .= 'padding: 10px';
	$css .= '}';

	$css .= 'ul.chaos-main-menu.menu-background > li { '; 
		$css .= 'padding: 0px;';
	$css .= '}';

	$css .= 'ul.chaos-main-menu > li > a {';
		if ( get_theme_mod('setting_menu-color') ){
			$css .= 'color: '.get_theme_mod('setting_menu-color').';';
		}
		else {
			$css .= 'color: '.$primary.';';
		}

		if ( get_theme_mod('setting_font-weight-menu') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-menu').';';
		}

		if ( get_theme_mod('setting_font-menu') ){
			$css .= 'font-family: '.get_theme_mod('setting_font-menu').';';
		}
		
		if ( get_theme_mod('setting_textsize-menu') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-menu').';';
		}
		else {
			$css .= 'font-size: 28px;';
		}
	$css .= '}';

	$css .= 'ul.chaos-main-menu > li { ';
		if ( get_theme_mod('setting_menu-padding') ) {
			$css .= 'padding-right: '.get_theme_mod('setting_menu-padding').';';
		}
		else {
			$css .= 'padding-right: 20px;';
		}
	$css .= '}';

	$css .= 'ul.chaos-main-menu > li > a {';
		if ( get_theme_mod('setting_menu-color') ){
			$css .= 'color: '.get_theme_mod('setting_menu-color').';';
		}
		else {
			$css .= 'color: '.$primary.';';
		}
	$css .= '}';

	$css .= 'ul.chaos-main-menu > li > a {';
		if ( get_theme_mod('setting_menu-color') ){
			$css .= 'color: '.get_theme_mod('setting_menu-color').';';
		}
		else {
			$css .= 'color: '.$primary.';';
		}
	$css .= '}';
	
	// chaos-main-menu hoversetting_menu-color
	$css .= 'ul.chaos-main-menu li a:hover,	ul.chaos-main-menu li.current_page_item a { ';
		if ( get_theme_mod('setting_menuhover-color') ){
			$css .= 'color: '. get_theme_mod('setting_menuhover-color').';';
		}
		else {
			$css .= 'color: #3d3d3d;';
		}
	$css .= '}';	

	// chaos-main-menu submenu
	$css .= 'ul.chaos-submenu li.sub-item a, .mobile-menu ul.chaos-main-menu > li > a {';
		if ( get_theme_mod('setting_menu-color') ){
			$css .= 'color: '.get_theme_mod('setting_menu-color').';';
		}
		else {
			$css .= 'color: '.$primary.';';
		}

		if ( get_theme_mod('setting_font-weight-submenu') ){
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-submenu').';';
		}

		if ( get_theme_mod('setting_textsize-submenu') ){
			$css .= 'font-size: '.get_theme_mod('setting_textsize-submenu').';';
		}
		else {
			$css .= 'font-size: 16px;';
		}
		
		if ( get_theme_mod('setting_padding-submenu') ){
			$css .= 'padding: '.get_theme_mod('setting_padding-submenu').';';
		}
		else { 
			$css .= 'padding: 5px 8px;';
		}
		
		if ( get_theme_mod('setting_width-submenu') ){
			$css .= 'width: '.get_theme_mod('setting_width-submenu').';';
		}
		else {
			$css .= 'width: 250px;';
		}

		if ( get_theme_mod('setting_border-inner-submenu') ){
			$css .= 'border-bottom: '.get_theme_mod('setting_border-inner-submenu').';';
		}
		else {
			$css .= 'border-bottom: 1px dotted #3d3d3d;';
		}
	$css .= '}';
	
	/*$css .= '.mobile-menu ul.chaos-main-menu > li:last-child > a {';
		$css .= 'border-bottom: none;';
	$css .= '}';*/

	$css .= 'ul.chaos-submenu li.sub-item a:hover, ul.chaos-submenu li.sub-item.active > a {';
		if ( get_theme_mod('setting_bg-submenu-hover-color') ){
			$css .= 'background-color: '.get_theme_mod('setting_bg-submenu-hover-color').';';
		}
		else {
			$css .= 'background-color: #ddd;';
		}		
		if ( get_theme_mod('setting_menuhover-color') ){
			$css .= 'color: '. get_theme_mod('setting_menuhover-color').';';
		}
		else {
			$css .= 'color: #3d3d3d;';
		}
	$css .= '}';

	
	$css .= '.chaos-megamenu-wrapper { ';
		if ( get_theme_mod('setting_bg-submenu-color') ) {
			$css .= 'background-color: '.get_theme_mod('setting_bg-submenu-color').';';
		} 
		else {
			$css .= 'background-color: #f1f1f1;';
		}

		if ( get_theme_mod('setting_content-width') ) {
			$width = get_theme_mod('setting_content-width');
			$width = str_replace('px', '', $width);
			$width = str_replace('%', '', $width);
			$width = intval($width);
			if ( get_theme_mod('setting_content-padding') ) {
				$padding = get_theme_mod('setting_content-padding');
				$padding = str_replace('px', '', $padding);
				$padding = str_replace('%', '', $padding);
				$padding = intval($padding);
				$padding = $padding * 2;
			}
			else {
				$padding = 60;
			}
			$widthPadding = $width + $padding;
			$left = $widthPadding / 2;
			$css .= 'left: -'.$left.'px;';
		}
		else {
			$width = 1000;
			if ( get_theme_mod('setting_content-padding') ) {
				$padding = get_theme_mod('setting_content-padding');
				$padding = str_replace('px', '', $padding);
				$padding = str_replace('%', '', $padding);
				$padding = intval($padding);
				$padding = $padding * 2;
			}
			else {
				$padding = 60;
			}
			$widthPadding = $width + $padding;
			$css .= 'width: '.$widthPadding.'px;';
			$left = $width / 2;
			$css .= 'left: -'.$left.'px;';
		}
		$css .= 'width: '.$widthPadding.'px;';
		$css .= 'margin-left: 50%;';
		$css .= 'padding-left: 0px;';
		$css .= 'padding-right: 0px;';
	$css .= '}';
	
	

		// chaos-main-menu megamenu
		$css .= '.chaos-main-menu ul.chaos-main-menu > li > ul.chaos-submenu {';
			if ( get_theme_mod('setting_border-outer-submenu') ){
				$css .= 'border: '.get_theme_mod('setting_border-outer-submenu').';';
			}
			$css .= 'border-top: 3px solid '.get_theme_mod('setting_menu-color').';';
			
		$css .= '}';
		$css .= '.chaos-megamenu-wrapper > ul.chaos-submenu {';
			$css .= 'border-top: 3px solid '.get_theme_mod('setting_menu-color').';';
		$css .= '}';

		
		// mobile menü
		$css .= '.chaos-mobile-menu .chaos-main-menu { ';
			if ( get_theme_mod('setting_bg-submenu-color') ) {
				$css .= 'background-color: '.get_theme_mod('setting_bg-submenu-color').';';
			}
			else {
				$css .= 'background-color: #f1f1f1;';
			}
			if ( get_theme_mod('setting_content-padding') ) {
				$css .= 'padding-left: '.get_theme_mod('setting_content-padding').';';
				$css .= 'padding-right: '.get_theme_mod('setting_content-padding').';';
			}
			else {
				$css .= 'padding-left: 30px;';
				$css .= 'padding-right: 30px;';
			}
			
		$css .= '}';
		$css .= '.chaos-mobile-menu .chaos-main-menu { ';
			$css .= 'background-color: '.get_theme_mod('setting_bg-submenu-color').';';
		$css .= '}';
		$css .= '.chaos-mobile-menu .chaos-submenu .sub-item.has-submenu.open { ';
			$css .= 'border-bottom: 2px solid '.get_theme_mod('setting_menu-color').';';
		$css .= '}';

		// responsive menu
		if ( $width <= $burgermenu )  {
			$css .= '.mobile-menu { display: block !important;}';
			$css .= '.chaos-main-menu { display: none;}';
			$css .= '.chaos-header.chaos-container { margin: inherit; }';
			$css .= '.mobile-menu .fas { position: relative;';
				$css .= 'font-size: 50px;';
				if ( get_theme_mod('setting_content-padding') ) {
					$css .= 'right: '.get_theme_mod('setting_content-padding').';';
				}
				else {
					$css .= 'right: 30px;';
				}	

				if ( get_theme_mod('setting_menu-color') ) {
					$css .= 'color: '.get_theme_mod('setting_menu-color').';';
				}
				else {
					$css .= 'color: '.$primary.';';
				}
			
			$css .= '}';
			$css .= '.mobile-menu .chaos-main-menu { ';
				$left = $width / 2;
				$css .= 'width: '.$width.'px;';
				$css .= 'left: -'.$left.'px;';
				$css .= 'margin-left: 50% !important;';
			$css .= '}';
		}
		if ( get_theme_mod('setting_menu-responsive') ){
			$css .= '@media screen and (max-width: '.get_theme_mod('setting_menu-responsive').') {';
				$css .= '.mobile-menu { display: block !important;}';
				$css .= '.chaos-main-menu { display: none;}';
				$css .= '.chaos-header.chaos-container { margin: inherit; }';
				$css .= '.mobile-menu .fas { position: relative;';
					$css .= 'font-size: 50px;';
					if ( get_theme_mod('setting_content-padding') ) {
						$css .= 'right: '.get_theme_mod('setting_content-padding').';';
					}
					else {
						$css .= 'right: 30px;';
					}	

					if ( get_theme_mod('setting_menu-color') ) {
						$css .= 'color: '.get_theme_mod('setting_menu-color').';';
					}
					else {
						$css .= 'color: '.$primary.';';
					}
				
				$css .= '}';
				$css .= '.mobile-menu .chaos-main-menu { ';
					$css .= 'width: 100%;';
					$css .= 'left: 0px;';
					$css .= 'margin-left: 0px !important;';
				$css .= '}';
			$css .= '}';
		}
		else {
			$css .= '@media screen and (max-width: 800px) {';
				$css .= '.mobile-menu { display: block !important;}';
				$css .= '.chaos-main-menu { display: none;}';
				$css .= '.chaos-header.chaos-container { margin: inherit; }';
				$css .= '.mobile-menu .fas { position: relative;';
					$css .= 'font-size: 50px;';
					if ( get_theme_mod('setting_content-padding') ) {
						$css .= 'right: '.get_theme_mod('setting_content-padding').';';
					}
					else {
						$css .= 'right: 30px;';
					}	

					if ( get_theme_mod('setting_menu-color') ) {
						$css .= 'color: '.get_theme_mod('setting_menu-color').';';
					}
					else {
						$css .= 'color: '.$primary.';';
					}
				
				$css .= '}';
			$css .= '}';
		}

		// -------- Macht das Sinn ------------ //
		/*$css .= '@media screen and (max-width: 640px) {';
			$css .= '.wp-block-column { ';
				$css .= 'flex-basis: 100%;';
				$css .= 'margin-left: 0px !important;';
				$css .= 'margin-right: 0px !important;';
			$css .= '}';
		$css .= '}';*/
		// --------------------------------- //


		// pagetitle
		$css .= '.chaos-pagetitle-wrapper { ';
			if ( get_theme_mod('setting_bgcolor-pagetitle') ) {
				$css .= 'background-color: '.get_theme_mod('setting_bgcolor-pagetitle').';';
			}
			if ( get_theme_mod('setting_margintop-pagetitle') ) {
				$css .= 'margin-top: '.get_theme_mod('setting_margintop-pagetitle').';';
			}
			if ( get_theme_mod('setting_padding-pagetitle') ) {
				$css .= 'padding-top: '.get_theme_mod('setting_padding-pagetitle').';';
				$css .= 'padding-bottom: '.get_theme_mod('setting_padding-pagetitle').';';
			}
		$css .= '}';

		// breadcrumb
		$css .= '.chaos-breadcrumb { ';
			if ( get_theme_mod('setting_font-breadcrumb') ) {
				$css .= 'font-family: '.get_theme_mod('setting_font-breadcrumb').';';
			}
			if ( get_theme_mod('setting_textsize-breadcrumb') ) {
				$css .= 'font-size: '.get_theme_mod('setting_textsize-breadcrumb').';';
			}
			if ( get_theme_mod('setting_textcolor-breadcrumb') ) {
				$css .= 'color: '.get_theme_mod('setting_textcolor-breadcrumb').';';
			}
			if ( get_theme_mod('setting_font-weight-breadcrumb') ) {
				$css .= 'font-weight: '.get_theme_mod('setting_font-weight-breadcrumb').';';
			}
		$css .= '}';
		$css .= '.chaos-breadcrumb a { ';
			if ( get_theme_mod('setting_linkcolor-breadcrumb') ) {
				$css .= 'color: '.get_theme_mod('setting_linkcolor-breadcrumb').' !important;';
			}
			if ( get_theme_mod('setting_padding-breadcrumb') ) {
				$css .= 'padding-left: '.get_theme_mod('setting_padding-breadcrumb').';';
				$css .= 'padding-right: '.get_theme_mod('setting_padding-breadcrumb').';';
			}
		$css .= '}';
		$css .= '.chaos-breadcrumb:before { ';
			if ( get_theme_mod('setting_before-breadcrumb') ) {
				$css .= 'content: "'.get_theme_mod('setting_before-breadcrumb').'";';
			}
		$css .= '}';

		// Footer
		$css .= '.chaos-footer { ';
			if ( get_theme_mod('setting_footer-bordertop') ) {
				$css .= 'border-top: '.get_theme_mod('setting_footer-bordertop').';';
			}

			if ( get_theme_mod('setting_color-footer') ) {
				$css .= 'background-color: '.get_theme_mod('setting_color-footer').';';
			}
			else {
				$css .= 'background-color: '.$primary.';';
			}

			if ( get_theme_mod('setting_footer-padding') ) {
				$css .= 'padding-top: '.get_theme_mod('setting_footer-padding').';';
				$css .= 'padding-bottom: '.get_theme_mod('setting_footer-padding').';';
			}
			else {
				$css .= 'padding-top: 30px;';
				$css .= 'padding-bottom: 30px;';
			}

			if ( get_theme_mod( 'select_font-footer') ) {
				$css .= 'font-family: "'.get_theme_mod( 'select_font-footer').'";';
			}
			if ( get_theme_mod('setting_textsize-footer') ) {
				$css  .= 'font-size: '.get_theme_mod('setting_textsize-footer').';';
			}
			if ( get_theme_mod('setting_font-weight-footer') ) {
				$css .= 'font-weight: '.get_theme_mod('setting_font-weight-footer').';';
			}
			if ( get_theme_mod('setting_line-height-footer') ) {
				$css .= 'line-height: '.get_theme_mod('setting_line-height-footer').';';
			}
		$css .= '}';
		
		if ( get_theme_mod('setting_color-text-footer') ) {
			$css .= '.chaos-footer .wp-block-columns .wp-block-column { ';
				$css .= 'color: '.get_theme_mod('setting_color-text-footer').';';
			$css .= '}';
		}
		else {
			$css .= '.chaos-footer .wp-block-columns .wp-block-column { ';
				$css .= 'color: #fff;';
			$css .= '}';
		}

		if ( get_theme_mod('setting_color-link-footer') ) {
			$css .= '.chaos-footer .wp-block-columns .widget-content a { ';
				$css .= 'color: '.get_theme_mod('setting_color-link-footer').';';
			$css .= '}';
		}
		else {
			$css .= '.chaos-footer .wp-block-columns .widget-content a { ';
				$css .= 'color: #fff;';
			$css .= '}';
		}
		
		// copyright
		$css .= '.chaos-copyright { ';
			if ( get_theme_mod('setting_background-copyright') ) {
				$css .= 'background-color: '.get_theme_mod('setting_background-copyright').';';
			}
			else {
				$css .= 'background-color: #3d3d3d;';
			}

			if ( get_theme_mod('setting_textcolor-copyright') ) {
				$css .= 'color: '.get_theme_mod('setting_textcolor-copyright').';';
			}
			else {
				$css .= 'color: #fff;';
			}
			
			if ( get_theme_mod( 'select_font-copyright') ) {
				$css .= 'font-family: "'.get_theme_mod( 'select_font-copyright').'" !important;';
			}
			else {
				$css .= 'font-family: "Lato" !important;';
			}

			if ( get_theme_mod('setting_textsize-copyright') ) {
				$css .= 'font-size: '.get_theme_mod('setting_textsize-copyright').';';
			}
			else {
				$css .= 'font-size: 14px;';
			}

			if ( get_theme_mod('setting_font-weight-copyright') ) {
				$css .= 'font-weight: '.get_theme_mod('setting_font-weight-copyright').';';
			}
			if ( get_theme_mod('setting_line-height-copyright') ) {
				$css .= 'line-height: '.get_theme_mod('setting_line-height-copyright').';';
			}
		$css .= '}';

		$css .= '.chaos-copyright a { ';
			if ( get_theme_mod('setting_linkkcolor-copyright') ) {
				$css .= 'color: '.get_theme_mod('setting_linkkcolor-copyright').';';
			}
			else {
				$css .= 'color: #fff;';
			}
		$css .= '}';
		
		$css .= '.chaos-social-media-copyright a { ';
			if ( get_theme_mod('setting_iconcolor-copyright') ) {
				$css .= 'color: '.get_theme_mod('setting_iconcolor-copyright').';';
			}
			else {
				$css .= 'color: #fff;';
			}
			
			if ( get_theme_mod('setting_iconsize-copyright') ) {
				$css .= 'font-size: '.get_theme_mod('setting_iconsize-copyright').';';
			}
			else {
				$css .= 'font-size: 20px;';
			}
			
			if ( get_theme_mod('setting_iconpadding-copyright') ) {
				$css .= 'padding-right: '.get_theme_mod('setting_iconpadding-copyright').';';
			}
			else {
				$css .= 'padding-right: 10px;';
			}
		$css .= '}';
		$css .= '.chaos-social-media-copyright a:hover { ';
			if ( get_theme_mod('setting_iconcolor-hover-copyright') ) {
				$css .= 'color: '.get_theme_mod('setting_iconcolor-hover-copyright').';';
			}
			else {
				$css .= 'color: '.$primary.';';
			}
		$css .= '}';
		
		$css .= '.chaos-contact-header { ';
			if ( get_theme_mod('setting_background-contact-header') ) {
				$css .= 'background-color: '.get_theme_mod('setting_background-contact-header').';';
			}
			else {
				$css .= 'background-color: #3d3d3d;';
			}
			
			if ( get_theme_mod('setting_textcolor-contact-header') ) {
				$css .= 'color: '.get_theme_mod('setting_textcolor-contact-header').';';
			}
			else {
				$css .= 'color: #fff;';
			}
			
			$css .= 'font-family: "'.get_theme_mod( 'select_font-contact-header').'";';
			$css .= 'font-size: '.get_theme_mod('setting_textsize-contact-header').';';
			$css .= 'font-weight: '.get_theme_mod('setting_font-weight-contact-header').';';
			$css .= 'line-height: '.get_theme_mod('setting_line-height-contact-header').';';
		$css .= '}';
		
		$css .= '.chaos-contact-header a { ';
			if ( get_theme_mod('setting_linkkcolor-contact-header') ) {
				$css .= 'color: '.get_theme_mod('setting_linkkcolor-contact-header').';';
			}
			else {
				$css .= 'color: #fff;';
			}			
		$css .= '}';
		
		$css .= '.chaos-social-media-contact-header a { ';
			if ( get_theme_mod('setting_iconcolor-contact-header') ) {
				$css .= 'color: '.get_theme_mod('setting_iconcolor-contact-header').';';
			}
			else {
				$css .= 'color: #fff;';
			}
			
			if ( get_theme_mod('setting_iconsize-contact-header') ) {
				$css .= 'font-size: '.get_theme_mod('setting_iconsize-contact-header').';';
			}
			else {
				$css .= 'font-size: 20px;';
			}
			
			if ( get_theme_mod('setting_iconpadding-contact-header') ) {
				$css .= 'padding-right: '.get_theme_mod('setting_iconpadding-contact-header').';';
			}
			else {
				$css .= 'padding-right: 10px;';
			}
		$css .= '}';
		
		file_put_contents($file, $css);
?>