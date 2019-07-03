<?php
	function wpv_customize_logo ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_logo', array(
				'title'			=>		'Chaos Logo',
				'priority'		=>		3,
				'description'	=>		'Hier sind alle Einstellungen des Logos',
			)
		);

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
	}
	add_action( 'customize_register', 'wpv_customize_logo' );