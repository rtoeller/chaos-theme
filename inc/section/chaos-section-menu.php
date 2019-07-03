<?php
function wpv_customize_menu ( $wp_customize ) {
	$wp_customize->add_section( 'chaos_menu', array(
			'title'			=>		'Chaos Menü',
			'priority'		=>		4,
			'description'	=>		'Hier sind alle Einstellungen des Menü',
		)
	);

	// SCHRIFTFARBE MENÜ
	$wp_customize->add_setting( 'setting_menu-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker',
            array(
                'label'      => 'Menü Farbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menu-color',
            ) )
	);

	// HOVERFARBE MENÜ
	$wp_customize->add_setting( 'setting_menuhover-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
	) );
	
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker1',
            array(
                'label'      => 'Menü Hoverfarbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menuhover-color',
            ) )
	);

	// SCHRIFTFARBE MENÜ
	$wp_customize->add_setting( 'setting_menu-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker',
            array(
                'label'      => 'Menü Farbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menu-color',
            ) )
	);

	// HOVERFARBE MENÜ
	$wp_customize->add_setting( 'setting_menuhover-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
	) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker1',
            array(
                'label'      => 'Menü Hoverfarbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menuhover-color',
            ) )
	);

	$wp_customize->add_setting( 'setting_menu-padding', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	
	// SCHRIFTFARBE SUBMENÜ
	$wp_customize->add_setting( 'setting_submenu-color' , array(
        'default' => '#3d3d3d',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_sub',
            array(
                'label'      => 'Subenü Farbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_submenu-color',
            ) )
	);

	// HOVERFARBE SUBMENÜ
	$wp_customize->add_setting( 'setting_submenuhover-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
	) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_subhover',
            array(
                'label'      => 'Submenü Hoverfarbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_submenuhover-color',
            ) )
	);

	
	// HINTERGRUNDFARBE SUBMENÜ
	$wp_customize->add_setting( 'setting_bg-submenu-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_bg-submenu',
            array(
                'label'      => 'Submenü Hintergrundfarbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_bg-submenu-color',
            ) )
	);
	
	// HINTERGRUNDFARBE SUBMENÜ
	$wp_customize->add_setting( 'setting_bg-submenu-hover-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_bg-submenu-hover',
            array(
                'label'      => 'Submenü Hintergrundfarbe Hover',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_bg-submenu-hover-color',
            ) )
	);

	// PADDING
	$wp_customize->add_setting( 'setting_menu-padding', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_menu-padding', array(
			'label'			=>		'Padding',
			'section'		=>		'chaos_menu',
			'settings'		=>		'setting_menu-padding',
			'type'			=>		'text',
		)
	);
	$wp_customize->add_setting( 'setting_menu-background', array(
			'default'   => 0, // Set default value
			'sanitize_callback' => 'esc_attr', // Sanitize input
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'checkbox1', // Setting ID
			array(
				'label'     => 'Menu Item Hintergrund',
				'section'   => 'chaos_menu', // No hyphen
				'settings'  => 'setting_menu-background', // Setting ID
				'type'      => 'checkbox',
			)
		)
	);
	// SCHRIFTART
	$wp_customize->add_setting( 'select_font-menu', array(
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control( 'select_font-menu', array(
			'type' => 'select',
			'section' => 'chaos_menu', // Add a default or your own section
			'label' => __( 'Schriftart' ),
			'choices' => chaos_get_fonts(),
		)
	);

	// SCHRIFTSTYLE
	$wp_customize->add_setting( 'setting_font-weight-menu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_font-weight-menu', array(
			'label'		=>		'Schriftstyle Menu',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_font-weight-menu',
			'type'		=>		'text',
		)
	);

	// SCHRIFTGRÖßE MENU
	$wp_customize->add_setting( 'setting_textsize-menu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_textsize-menu', array(
			'label'		=>		'Menü Textgröße',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_textsize-menu',
			'type'		=>		'text',
		)
	);

	// SCHRIFTSTYLE
	$wp_customize->add_setting( 'setting_font-weight-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_font-weight-submenu', array(
			'label'		=>		'Schriftstyle Submenu',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_font-weight-submenu',
			'type'		=>		'text',
		)
	);

	// SCHRIFTGRÖßE SUBMENU
	$wp_customize->add_setting( 'setting_textsize-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_textsize_submenu', array(
			'label'		=>		'Submenu Textgröße',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_textsize-submenu',
			'type'		=>		'text',
		)
	);
	// WEITE SUBMENU
	$wp_customize->add_setting( 'setting_width-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_width_submenu', array(
			'label'		=>		'Submenu width',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_width-submenu',
			'type'		=>		'text',
		)
	);

	// BORDER AUßEN
	$wp_customize->add_setting( 'setting_border-outer-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_border-outer-submenu', array(
			'label'		=>		'Submenu Border außen',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_border-outer-submenu',
			'type'		=>		'text',
		)
	);
	
	// BORDER INNEN
	$wp_customize->add_setting( 'setting_border-inner-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_border-inner-submenu', array(
			'label'		=>		'Submenu Border innen',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_border-inner-submenu',
			'type'		=>		'text',
		)
	);

	// BORDER INNEN
	$wp_customize->add_setting( 'setting_padding-submenu', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_padding-submenu', array(
			'label'		=>		'Submenu padding',
			'section'	=>		'chaos_menu',
			'settings'	=>		'setting_padding-submenu',
			'type'		=>		'text',
		)
	);
}
add_action( 'customize_register', 'wpv_customize_menu' ); 