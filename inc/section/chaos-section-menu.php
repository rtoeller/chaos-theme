<?php
function wpv_customize_menu ( $wp_customize ) {
	if ( get_theme_mod( 'setting_primarycolor-generell' ) ) {
		$primary = get_theme_mod( 'setting_primarycolor-generell' );
	}
	else {
		$primary = '#43755c';
	}

	if ( get_theme_mod( 'select_fontbody-fonts') ) {
		$font_family = strtolower( get_theme_mod( 'select_fontbody-fonts') );
	}
	else {
		$font_family = 'lato';
	}	
	echo $font_family;

	// PANEL
	$wp_customize->add_panel( 'chaos_menu', array(
		'priority'       => 4,
		'capability'     => 'edit_theme_options',
		'title'          => 'Chaos Menü',
		'description'    => 'Hier sind alle Einstellungen des Menü',
	) );

	$wp_customize->add_section( 'mainmenu', array(
			'title'			=>		'Hauptmenü',
			'priority'		=>		1,
			'panel'			=>		'chaos_menu',
		)
	);
	$wp_customize->add_section( 'submenu', array(
			'title'			=>		'Submenü',
			'priority'		=>		2,
			'panel'			=>		'chaos_menu',
		)
	);


	// FONTCOLOR MENU
	$wp_customize->add_setting( 'setting_menu-color' , array(
        'default' => $primary,
		'sanitize_callback' => 'sanitize_hex_color',
		'panel' => 'chaos_menu', 
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker',
            array(
                'label'      => 'Menüpunkte Farbe',
                'section'    => 'mainmenu',
				'settings'   => 'setting_menu-color',
				'panel' 	 => 'chaos_menu',
            ) )
	);

	// HOVERCOLOR MENU
	$wp_customize->add_setting( 'setting_menuhover-color' , array(
        'default' => '#3d3d3d',
		'sanitize_callback' => 'sanitize_hex_color',
		'panel'			=>		'chaos_menu',
	) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker1',
            array(
                'label'      => 'Menüpunkte Hoverfarbe',
                'section'    => 'mainmenu',
				'settings'   => 'setting_menuhover-color',
				'panel' 	 => 'chaos_menu',
            ) )
	);	

	// PADDING
	$wp_customize->add_setting( 'setting_menu-padding', array(
			'default'			=>		'20px',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_menu-padding', array(
			'label'			=>		'Padding',
			'section'		=>		'mainmenu',
			'settings'		=>		'setting_menu-padding',
			'type'			=>		'text',
			'panel'			=>		'chaos_menu',
		)
	);

	// MENUITEMS BACKGROUND
	$wp_customize->add_setting( 'setting_menu-background', array(
			'default'   		=> 0, // Set default value
			'sanitize_callback' => 'esc_attr', // Sanitize input
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'checkbox1', // Setting ID
			array(
				'label'     => 'Menu Item Hintergrund',
				'section'   => 'mainmenu', // No hyphen
				'settings'  => 'setting_menu-background', // Setting ID
				'type'      => 'checkbox',
				'panel'		=> 'chaos_menu',
			)
		)
	);

	// FONT FAMILY
	$wp_customize->add_setting( 'select_font-menu', array(
			'capability' =>		'edit_theme_options',
			'panel'		 =>		'chaos_menu',
			'default'    => 	$font_family,
		)
	);

	$wp_customize->add_control( 'select_font-menu', array(
			'type' 		=> 'select',
			'section'	=> 'mainmenu', // Add a default or your own section
			'label' 	=> 	__( 'Schriftart' ),
			'choices' 	=> 	chaos_get_fonts(),
			'panel'		=>	'chaos_menu',
		)
	);

	// FONTSTYLE
	$wp_customize->add_setting( 'setting_font-weight-menu', array(
			'default'			=>			'',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_font-weight-menu', array(
			'label'		=>		'Schriftstyle Menu',
			'section'	=>		'mainmenu',
			'settings'	=>		'setting_font-weight-menu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// FONTSIZE MENU
	$wp_customize->add_setting( 'setting_textsize-menu', array(
			'default'			=>		'28px',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_textsize-menu', array(
			'label'		=>		'Menü Textgröße',
			'section'	=>		'mainmenu',
			'settings'	=>		'setting_textsize-menu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// 	FONTCOLOR SUBMENÜ
	$wp_customize->add_setting( 'setting_submenu-color' , array(
        'default' => $primary,
		'sanitize_callback' => 'sanitize_hex_color',
		'panel'				=>		'chaos_menu',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_sub',
            array(
                'label'      => 'Subenü Farbe',
                'section'    => 'submenu',
				'settings'   => 'setting_submenu-color',
				'panel'		 =>	'chaos_menu',
            ) )
	);

	// HOVERCOLOR SUBMENÜ
	$wp_customize->add_setting( 'setting_submenuhover-color' , array(
        'default' 			=> '#3d3d3d',
		'sanitize_callback' => 'sanitize_hex_color',
		'panel'				=>		'chaos_menu',
	) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_subhover',
            array(
                'label'      => 'Submenü Hoverfarbe',
                'section'    => 'submenu',
				'settings'   => 'setting_submenuhover-color',
				'panel'		 =>	'chaos_menu',
            ) )
	);

	
	// BACKGROUNDCOLOR SUBMENÜ
	$wp_customize->add_setting( 'setting_bg-submenu-color' , array(
        'default' 			=> '#f1f1f1',
		'sanitize_callback' => 'sanitize_hex_color',
		'panel'				=> 'chaos_menu',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_bg-submenu',
            array(
                'label'      => 	'Submenü Hintergrundfarbe',
                'section'    => 	'submenu',
				'settings'   => 	'setting_bg-submenu-color',
				'panel'		=>		'chaos_menu',
            ) )
	);
	
	// BACKGROUNDCOLOR HOVER SUBMENÜ
	$wp_customize->add_setting( 'setting_bg-submenu-hover-color' , array(
        'default' 			=> 	'#ddd',
		'sanitize_callback' => 	'sanitize_hex_color',
		'panel'				=>	'chaos_menu',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_bg-submenu-hover',
            array(
                'label'      => 'Submenü Hintergrundfarbe Hover',
                'section'    => 'submenu',
				'settings'   => 'setting_bg-submenu-hover-color',
				'panel'		 =>		'chaos_menu',
            ) )
	);

	// FONT FAMILY SUBMENU
	$wp_customize->add_setting( 'select_font-submenu', array(
			'capability' =>		'edit_theme_options',
			'panel'		 =>		'chaos_menu',
			'default'   => 	$font_family,
		)
	);

	$wp_customize->add_control( 'select_font-submenu', array(
			'type' 		=> 'select',
			'section'	=> 'submenu', // Add a default or your own section
			'label' 	=> 	__( 'Schriftart' ),
			'choices' 	=> 	chaos_get_fonts(),
			'panel'		=>	'chaos_menu',
		)
	);

	// FONTSTYLE SUBMENU
	$wp_customize->add_setting( 'setting_font-weight-submenu', array(
			'default'			=>			'',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_font-weight-submenu', array(
			'label'		=>		'Schriftstyle Menu',
			'section'	=>		'submenu',
			'settings'	=>		'setting_font-weight-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// FONTSIZE SUBMENU
	$wp_customize->add_setting( 'setting_textsize-submenu', array(
			'default'			=>		'16px',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_textsize-submenu', array(
			'label'		=>		'Menü Textgröße',
			'section'	=>		'submenu',
			'settings'	=>		'setting_textsize-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// WIDTH SUBMENU
	$wp_customize->add_setting( 'setting_width-submenu', array(
			'default'			=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' 				=> 'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_width_submenu', array(
			'label'		=>		'Submenu width',
			'section'	=>		'submenu',
			'settings'	=>		'setting_width-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// BORDER OUTER SUBMENU
	$wp_customize->add_setting( 'setting_border-outer-submenu', array(
			'default'			=>		'',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_border-outer-submenu', array(
			'label'		=>		'Submenu Border außen',
			'section'	=>		'submenu',
			'settings'	=>		'setting_border-outer-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// BORDER INNEN
	$wp_customize->add_setting( 'setting_border-inner-submenu', array(
			'default'			=>		'1px dotted #3d3d3d',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_border-inner-submenu', array(
			'label'		=>		'Submenu Border innen',
			'section'	=>		'submenu',
			'settings'	=>		'setting_border-inner-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);

	// PADDING SUBITEMS
	$wp_customize->add_setting( 'setting_padding-submenu', array(
			'default'			=>		'5px 8px',
			'sanitize_callback'	=>		'sanitize_text_field',
			'type' 				=> 		'theme_mod',
			'panel'				=>		'chaos_menu',
		)
	);
	$wp_customize->add_control( 'control_padding-submenu', array(
			'label'		=>		'Submenu padding',
			'section'	=>		'submenu',
			'settings'	=>		'setting_padding-submenu',
			'type'		=>		'text',
			'panel'		=>		'chaos_menu',
		)
	);
}
add_action( 'customize_register', 'wpv_customize_menu' ); 