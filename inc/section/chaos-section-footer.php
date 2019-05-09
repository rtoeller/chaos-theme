<?php
	function wpv_customize_footer ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_footer', array(
				'title'			=>		'Chaos Footer',
				'priority'		=>		5,
				'description'	=>		'Beschreibung',
			)
		);

		// CONTENTBREITE 
		$wp_customize->add_setting( 'setting_footer-columns', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_content-width', array(
				'label'		=>		'Footer Spalten',
				'section'	=>		'chaos_footer',
				'settings'	=>		'setting_footer-columns',
				'type'		=>		'text',
			)
		);

		// BACKGROUND IMAGE
		$wp_customize->add_setting('setting_footer-img', array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'footer-img',
				array(
					'label'      => 'Hintergrundbild',
					'section'    => 'chaos_footer',
					'settings'   => 'setting_footer-img',
				)
			)
		);
		// BACKGROUND POSITION
		$wp_customize->add_setting( 'setting_footer-bg-position', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'themeslug_sanitize_select',
			)
		);
		$wp_customize->add_control( 'select_footer-bg-position', array(
				'type' => 'select',
				'section' => 'chaos_footer', // Add a default or your own section
				'label' => __( 'Background Position' ),
				'settings' => 'setting_footer-bg-position',
				'choices' => array(
					'center center' => __( 'center center' ),
					'left top' => __( 'left top' ),
					'left center' => __( 'left center' ),
					'left bottom' => __( 'left bottom' ),
					'right top' => __( 'right top' ),
					'right center' => __( 'right center' ),
					'right bottom' => __( 'right bottom' ),
				),
			)
		);

		$wp_customize->add_setting( 'setting_color-footer' , array(
			'default' => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker_footer',
				array(
					'label'      => 'Hintergrundfarbe',
					'section'    => 'chaos_footer',
					'settings'   => 'setting_color-footer',
				) )
		);

		$wp_customize->add_setting( 'setting_footer-bordertop', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_footer-bordertop', array(
				'label'			=>		'Border Top',
				'section'		=>		'chaos_footer',
				'settings'		=>		'setting_footer-bordertop',
				'type'			=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_footer' );