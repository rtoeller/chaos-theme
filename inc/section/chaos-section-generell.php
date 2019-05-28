<?php
	function wpv_customize_generell ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_generell', array(
				'title'			=>		'Chaos Generell',
				'priority'		=>		1,
				'description'	=>		'Beschreibung',
			)
		);

		// CONTENTWIDTH
		$wp_customize->add_setting( 'setting_content-width', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_content-width', array(
				'label'		=>		'Contentbreite',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_content-width',
				'type'		=>		'text',
			)
		);
		// PADDING CONTENTELEMENTS
		$wp_customize->add_setting( 'setting_content-padding', array(
				'default'		=>		'30px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_content-padding', array(
				'label'		=>		'Padding Contentelemente',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_content-padding',
				'type'		=>		'text',
			)
		);
		
		// SCHRIFTART
		$wp_customize->add_setting( 'select_font-generell', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-generell', array(
				'type' => 'select',
				'section' => 'chaos_generell', // Add a default or your own section
				'label' => __( 'Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-generell', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font', array(
				'label'		=>		'Schriftstyle',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_font-weight-generell',
				'type'		=>		'text',
			)
		);

		// PRIMARY COLOR
		$wp_customize->add_setting( 'setting_primarycolor-generell' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-primarycolor-generell',
				array(
					'label'      => 'Primary Farbe',
					'section'    => 'chaos_generell',
					'settings'   => 'setting_primarycolor-generell',
				) )
		);

		// TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-generell' , array(
			'default' => '#000',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-generell',
				array(
					'label'      => 'Textfarbe',
					'section'    => 'chaos_generell',
					'settings'   => 'setting_textcolor-generell',
				) )
		);

		// LINKFARBE
		$wp_customize->add_setting( 'setting_linkcolor-generell' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-linkcolor-generell',
				array(
					'label'      => 'Linkfarbe',
					'section'    => 'chaos_generell',
					'settings'   => 'setting_linkcolor-generell',
				) )
		);

		// SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-generell', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-generell', array(
				'label'		=>		'Textgröße',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_textsize-generell',
				'type'		=>		'text',
			)
		);

		// LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-generell', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-generell', array(
				'label'		=>		'Schrift Line Height',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_line-height-generell',
				'type'		=>		'text',
			)
		);
		
		// H1
		$wp_customize->add_setting( 'setting_h1', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_h1', array(
				'label'		=>		'Schriftgröße h1',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_h1',
				'type'		=>		'text',
			)
		);

		// H2
		$wp_customize->add_setting( 'setting_h2', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_h2', array(
				'label'		=>		'Schriftgröße h2',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_h2',
				'type'		=>		'text',
			)
		);

		// H3
		$wp_customize->add_setting( 'setting_h3', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_h3', array(
				'label'		=>		'Schriftgröße h3',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_h3',
				'type'		=>		'text',
			)
		);

		// CHECKBOX SIDEBAR
		$wp_customize->add_setting( 'setting_sidebar-check', array(
				'default'   => 1, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar-check', // Setting ID
				array(
					'description'     => 'Sidebar soll ausgegeben werden?',
					'label'     => 'Sidebar',
					'section'   => 'chaos_generell', // No hyphen
					'settings'  => 'setting_sidebar-check', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);
		// SIDEBARBREITE 
		$wp_customize->add_setting( 'setting_sidebar-width', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_sidebar-width', array(
				'label'		=>		'Sidebarbreite',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_sidebar-width',
				'type'		=>		'text',
			)
		);

		$wp_customize->add_setting( 'setting_page-margin', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_page-margin', array(
				'label'		=>		'Pagecontent Margin',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_page-margin',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_generell' );
