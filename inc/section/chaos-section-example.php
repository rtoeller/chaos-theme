<?php
	function wpv_customize_example ( $wp_customize ) {
		// SECTION custom_header
		$wp_customize->add_section( 'custom_header', array(
				'title'			=>		'Beispielfelder',
				'priority'		=>		1,
				'description'	=>		'Beschreibung',
			)
		);

		// TEXTFELD
		$wp_customize->add_setting( 'setting_textfield', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textfield', array(
				'label'		=>		'Textfeld',
				'section'	=>		'custom_header',
				'settings'	=>		'setting_textfield',
				'type'		=>		'text',
			)
		);

		// CHECKBOX
		$wp_customize->add_setting( 'setting_checkbox', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'checkbox', // Setting ID
				array(
					'label'     => 'Datenschutz',
					'section'   => 'custom_header', // No hyphen
					'settings'  => 'setting_checkbox', // Setting ID
					'type'      => 'checkbox',
				)
			)
		);

		/*/ SELECTFELD
		$wp_customize->add_setting( 'selectfield', array(
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'themeslug_sanitize_select',
			)
		);
		
		$wp_customize->add_control( 'selectfield', array(
				'type' => 'select',
				'section' => 'custom_header', // Add a default or your own section
				'label' => __( 'Custom Select Option' ),
				'description' => __( 'This is a custom select option.' ),
				'choices' => array(
				'value1' => __( 'Option 1' ),
				'value2' => __( 'Option 2' ),
				'value3' => __( 'Option 3' ),
				),
			)
		);*/

		// RADIOBUTTON


		$wp_customize->add_control(
			'control_radio1',
			array(
				'label'    => 'Radiobuttons',
				'section'  => 'custom_header',
				'settings' => 'setting_radio1',
				'type'     => 'radio',
				'choices'  => array(
					'left'  => 'left',
					'right' => 'right',
				),
			)
		);

		// TEXTAREA
		$wp_customize->add_setting( 'setting_textarea', array(
			'capability' => 'edit_theme_options',
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( 'control_textarea', array(
			'type' => 'textarea',
			'section' => 'custom_header', // // Add a default or your own section
			'settings' =>  'setting_textarea',
			'label' => __( 'Custom Text Area' ),
			'description' => __( 'This is a custom textarea.' ),
		) );

		// CSS
		$wp_customize->add_setting( 'setting_css', array(
			'type' => 'option',
		) );

		$wp_customize->add_control(
			new WP_Customize_Code_Editor_Control(
				$wp_customize,
				'control_css',
				array(
					'label'     => 'Zusätzliches CSS',
					'code_type' => 'css',
					'settings'  => 'setting_css',
					'section'   => 'custom_header',
				)
			)
		);

		// HTML
		$wp_customize->add_setting( 'setting_html', array(
			'type' => 'option',
		) );

		$wp_customize->add_control(
			new WP_Customize_Code_Editor_Control(
				$wp_customize,
				'control_html',
				array(
					'label'     => 'Zusätzliches HTML',
					'code_type' => 'html',
					'settings'  => 'setting_html',
					'section'   => 'custom_header',
				)
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_example' );
