<?php
	function wpv_customize_metatags ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_metatags', array(
				'title'			=>		'Chaos Metatags',
				'priority'		=>		4,
				'description'	=>		'Beschreibung',
			)
		);

		// DISPLAY Metatags
		$wp_customize->add_setting( 'setting_display-metatags', array(
				'default'   => 1, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-metatags', // Setting ID
				array(
					'label'     => 'Metatags anzeigen',
					'section'   => 'chaos_metatags', // No hyphen
					'settings'  => 'setting_display-metatags', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		// DISPLAY Author
		$wp_customize->add_setting( 'setting_display-author-metatags', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-author-metatags', // Setting ID
				array(
					'label'     => 'Autor anzeigen',
					'section'   => 'chaos_metatags', // No hyphen
					'settings'  => 'setting_display-author-metatags', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		// DISPLAY DATE
		$wp_customize->add_setting( 'setting_display-date-metatags', array(
				'default'   => 1, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-date-metatags', // Setting ID
				array(
					'label'     => 'Datum anzeigen',
					'section'   => 'chaos_metatags', // No hyphen
					'settings'  => 'setting_display-date-metatags', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);
	
		// DISPLAY COMMENTS
		$wp_customize->add_setting( 'setting_display-comments-metatags', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_display-comments-metatags', // Setting ID
				array(
					'label'     => 'Kommentare anzeigen',
					'section'   => 'chaos_metatags', // No hyphen
					'settings'  => 'setting_display-comments-metatags', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		// DO COMMENTS
		$wp_customize->add_setting( 'setting_do-comments-metatags', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox_do-comments-metatags', // Setting ID
				array(
					'label'     => 'Kommentarfunktion aktivieren',
					'section'   => 'chaos_metatags', // No hyphen
					'settings'  => 'setting_do-comments-metatags', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_metatags' );
