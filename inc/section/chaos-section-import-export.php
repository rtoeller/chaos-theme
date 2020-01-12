<?php
	function wpv_customize_import_export ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_import-export', array(
				'title'			=>		'Chaos Import / Export',
				'priority'		=>		10,
				'description'	=>		'Beschreibung',
			)
		);

		//$theme_options = chaos_export_custom_option();
		
		// textfield
		$wp_customize->add_setting( 'setting_text-import-export', array(
			
			'capability' => 'edit_theme_options',
			'default' => $theme_options,
			'sanitize_callback' => 'sanitize_text_field',
			'type' => 'theme_mod',
		) );
	
		$wp_customize->add_control( 'control_text-contact-header', array(
			'type' => 'textarea',
			'section' => 'chaos_import-export',
			'settings' =>  'setting_text-import-export',
			'label' => 'Import / Export',
		) );
		
	}
	add_action( 'customize_register', 'wpv_customize_import_export' );