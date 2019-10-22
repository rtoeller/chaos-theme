<?php
	function wpv_customize_background ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_background', array(
				'type' 			=>	 	'theme_mod',
				'title'			=>		'Chaos Background',
				'priority'		=>		1,
				'description'	=>		'Beschreibung',
			)
		);

		// BACKGROUND COLOR
		$wp_customize->add_setting( 'setting_backgroundcolor-background' , array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-primarycolor-generell',
				array(
					'label'      => 'Hintergundfarbe',
					'section'    => 'chaos_background',
					'settings'   => 'setting_backgroundcolor-background',
				) )
		);

		// BACKGROUND IMAGE
		$wp_customize->add_setting('setting_background', array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'background-img',
				array(
					'label'      => 'Hintergrundbild',
					'section'    => 'chaos_background',
					'settings'   => 'setting_background',
				)
			)
		);

		// BACKGROUND POSITION
		$wp_customize->add_setting( 'select_background-position', array(
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
			)
		);
		$wp_customize->add_control( 'select_background-position', array(
				'type' => 'select',
				'section' => 'chaos_background', // Add a default or your own section
				'label' => __( 'Hintergrund Position' ),
				'choices' => chaos_get_background_position(),
			)
		);
		
		// BACKGROUND REPEAT
		$wp_customize->add_setting( 'select_background-repeat', array(
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
			)
		);

		$wp_customize->add_control( 'select_background-repeat', array(
				'type' => 'select',
				'section' => 'chaos_background', // Add a default or your own section
				'label' => __( 'Background Repeat' ),
				'choices' => chaos_get_background_repeat(),
			)
		);

		// BACKGROUND BEGIN
		$wp_customize->add_setting( 'setting_background-begin', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);

		$wp_customize->add_control(
			'control_radio_background-begin',
			array(
				'label'    => 'Background begin',
				'section'  => 'chaos_background',
				'settings' => 'setting_background-begin',
				'type'     => 'radio',
				'choices'  => array(
					'content'  => 'Content',
					'body' => 'Body',
				),
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_background' );
