<?php
	function wpv_customize_pagetitle ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_pagetitle', array(
				'title'			=>		'Chaos Pagetitle',
				'priority'		=>		4,
				'description'	=>		'Beschreibung',
			)
		);

		// DISPLAGE PAGETITLE
		$wp_customize->add_setting( 'setting_display-pagetitle', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-pagetitle', // Setting ID
				array(
					'label'     => 'Page Title neben Breadcrumb',
					'section'   => 'chaos_pagetitle', // No hyphen
					'settings'  => 'setting_display-pagetitle', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		// HINTERGRUND
		$wp_customize->add_setting( 'setting_bgcolor-pagetitle' , array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-bgcolor-pagetitle',
				array(
					'label'      => 'Hintergrundfarbe',
					'section'    => 'chaos_pagetitle',
					'settings'   => 'setting_bgcolor-pagetitle',
				) )
		);

		// ABSTAND NACH OBEN 
		$wp_customize->add_setting( 'setting_margintop-pagetitle', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_margintop-pagetitle', array(
				'label'		=>		'Abstand nach oben',
				'description' =>	'Margin top',
				'section'	=>		'chaos_pagetitle',
				'settings'	=>		'setting_margintop-pagetitle',
				'type'		=>		'text',
			)
		);

		// PAGE TITLE PADDING
		$wp_customize->add_setting( 'setting_padding-pagetitle', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_padding-pagetitle', array(
				'label'		=>		'Pagetitle Padding',
				'description' =>	'Links und rechts',
				'section'	=>		'chaos_pagetitle',
				'settings'	=>		'setting_padding-pagetitle',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_pagetitle' );
