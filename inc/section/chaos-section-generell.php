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
				'default'		=>		'1000px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
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
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_content-padding', array(
				'label'		=>		'Padding Contentelemente',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_content-padding',
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
				'color_picker-textcolor-test',
				array(
					'label'      => 'Primary Farbe',
					'section'    => 'chaos_generell',
					'settings'   => 'setting_primarycolor-generell',
				) )
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
				'type' => 'theme_mod',
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
				'default'		=>		'50px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
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
