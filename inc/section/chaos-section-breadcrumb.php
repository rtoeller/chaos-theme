<?php
	function wpv_customize_breadcrumb ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_breadcrumb', array(
				'title'			=>		'Chaos Breadcrumb',
				'priority'		=>		4,
				'description'	=>		'Beschreibung',
			)
		);

		// DISPLAY BREADCRUMB
		$wp_customize->add_setting( 'setting_display-breadcrumb', array(
				'default'   => 1, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-breadcrumb', // Setting ID
				array(
					'label'     => 'Breadcrumb anzeigen',
					'section'   => 'chaos_breadcrumb', // No hyphen
					'settings'  => 'setting_display-breadcrumb', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		// BREADCRUMB BEFORE
		$wp_customize->add_setting( 'setting_before-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_before-breadcrumb', array(
				'label'		=>		'Text vor Breadcrumb',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_before-breadcrumb',
				'type'		=>		'text',
			)
		);
	
		// BREADCRUMB PADDING
		$wp_customize->add_setting( 'setting_padding-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_padding-breadcrumb', array(
				'label'		=>		'Breadcrumb padding',
				'description' =>	'Links und rechts',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_padding-breadcrumb',
				'type'		=>		'text',
			)
		);
		
		// BREADCRUMB TRENNZEICHEN
		$wp_customize->add_setting( 'setting_symbol-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_symbol-breadcrumb', array(
				'label'		=>		'Breadcrumb Trennzeichen',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_symbol-breadcrumb',
				'type'		=>		'text',
			)
		);
		
		// BREADCRUMB SCHRIFTART
		$wp_customize->add_setting( 'select_font-breadcrumb', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-breadcrumb', array(
				'type' => 'select',
				'section' => 'chaos_breadcrumb', // Add a default or your own section
				'label' => 'Breadcrumb Schriftart',
				'choices' => chaos_get_fonts(),
			)
		);

		// BREADCRUMB SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-breadcrumb', array(
				'label'		=>		'Breadcrumb Schriftstyle',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_font-weight-breadcrumb',
				'type'		=>		'text',
			)
		);

		// BREADCRUMB TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-breadcrumb' , array(
			'default' => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-breadcrumb',
				array(
					'label'      => 'Breadcrumb Textfarbe',
					'section'    => 'chaos_breadcrumb',
					'settings'   => 'setting_textcolor-breadcrumb',
				) )
		);

		// BREADCRUMB LINKFARBE
		$wp_customize->add_setting( 'setting_linkcolor-breadcrumb' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-linkcolor-breadcrumb',
				array(
					'label'      => 'Breadcrumb Linkfarbe',
					'section'    => 'chaos_breadcrumb',
					'settings'   => 'setting_linkcolor-breadcrumb',
				) )
		);

		// BREADCRUMB SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-breadcrumb', array(
				'label'		=>		'Breadcrumb Textgröße',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_textsize-breadcrumb',
				'type'		=>		'text',
			)
		);

		// BREADCRUMB LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-breadcrumb', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-breadcrumb', array(
				'label'		=>		'Breadcrumb Schrift Line Height',
				'section'	=>		'chaos_breadcrumb',
				'settings'	=>		'setting_line-height-breadcrumb',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_breadcrumb' );
