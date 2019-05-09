<?php
	function wpv_customize_generell ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_generell', array(
				'title'			=>		'Chaos Generell',
				'priority'		=>		1,
				'description'	=>		'Beschreibung',
			)
		);

		// CONTENTBREITE 
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

		// SCHRIFTART
		$wp_customize->add_setting( 'select-font', array(
				'capability' => 'edit_theme_options',
	//			'sanitize_callback' => 'themeslug_sanitize_select',
			)
		);
		
		$wp_customize->add_control( 'select-font', array(
				'type' => 'select',
				'section' => 'chaos_generell', // Add a default or your own section
				'label' => __( 'Schriftart' ),
				//'description' => __( 'This is a custom select option.' ),
				'choices' => array(
				'montserrat' => __( 'Montserrat' ),
				'value2' => __( 'Option 2' ),
				'value3' => __( 'Option 3' ),
				),
			)
		);
		/*function themeslug_sanitize_select( $input, $setting ) {

			// Ensure input is a slug.
			$input = sanitize_key( $input );
			
			// Get list of choices from the control associated with the setting.
			$choices = $setting->manager->get_control( $setting->id )->choices;
		  
			// If the input is a valid key, return it; otherwise, return the default.
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
		}*/
		$wp_customize->add_setting( 'setting_font', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font', array(
				'label'		=>		'Schriftart',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_font',
				'type'		=>		'text',
			)
		);
		// SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize', array(
				'label'		=>		'Textgröße',
				'section'	=>		'chaos_generell',
				'settings'	=>		'setting_textsize',
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
