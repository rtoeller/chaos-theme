<?php
	function wpv_customize_logo ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_logo', array(
				'title'			=>		'Chaos Logo',
				'priority'		=>		3,
				'description'	=>		'Hier sind alle Einstellungen des Logos',
			)
		);

		// LOGO
		$wp_customize->add_setting('setting_logo-img', array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));		
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo',
				array(
					'label'      => 'Logo',
					'section'    => 'chaos_logo',
					'settings'   => 'setting_logo-img'
				)
			)
		);

		// LOGO WIDTH
		$wp_customize->add_setting( 'setting_logo-width', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_logo-width', array(
				'label'		=>		'Logobreite',
				'section'	=>		'chaos_logo',
				'settings'	=>		'setting_logo-width',
				'type'		=>		'text',
			)
		);

		// LOGO MOBILE
		$wp_customize->add_setting('setting_logo-img-mobile', array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));		
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo-mobile',
				array(
					'label'      => 'Logo Mobil',
					'section'    => 'chaos_logo',
					'settings'   => 'setting_logo-img-mobile'
				)
			)
		);
	
		// LOGO WIDTH MOBILE
		$wp_customize->add_setting( 'setting_logo-width-mobile', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_logo-width-mobile', array(
				'label'		=>		'Logobreite mobile',
				'section'	=>		'chaos_logo',
				'settings'	=>		'setting_logo-width-mobile',
				'type'		=>		'text',
			)
		);

		// DISPLAY MOBILE LOGO 
		$wp_customize->add_setting( 'setting_display-logo-mobile', array(
				'default'		=>		'640px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_display-logo-mobile', array(
				'label'		=>		'Logobreite',
				'section'	=>		'chaos_logo',
				'settings'	=>		'setting_display-logo-mobile',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_logo' );