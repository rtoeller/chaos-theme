<?php
	function wpv_customize_responsive ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_responsive', array(
				'title'			=>		'Chaos Responsive',
				'priority'		=>		2,
				'description'	=>		'Beschreibung',
			)
		);

		// MOBILE MENU
		$wp_customize->add_setting( 'setting_menu-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_menu-responsive', array(
				'label'		=>		'Mobiles Menü ab',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_menu-responsive',
				'type'		=>		'text',
			)
		);

		// MOBILE MENU
		$wp_customize->add_setting( 'setting_content-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_content-responsive', array(
				'label'		=>		'Mobile Contentbreite ab',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_content-responsive',
				'type'		=>		'text',
			)
		);

		// TABLET QUER
		$wp_customize->add_setting( 'setting_tabletquer-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_tabletquer-responsive', array(
				'label'		=>		'Tablet Quer',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_tabletquer-responsive',
				'type'		=>		'text',
			)
		);

		// TABLET HOCHKANT
		$wp_customize->add_setting( 'setting_tablethoch-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_tablethoch-responsive', array(
				'label'		=>		'Tablet Hochkant',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_tablethoch-responsive',
				'type'		=>		'text',
			)
		);

		// MOBILE QUER
		$wp_customize->add_setting( 'setting_mobilequer-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_mobilequer-responsive', array(
				'label'		=>		'Mobil Quer',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_mobilequer-responsive',
				'type'		=>		'text',
			)
		);

		// MOBILE HOCHKANT
		$wp_customize->add_setting( 'setting_mobilehoch-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_mobilehoch-responsive', array(
				'label'		=>		'Mobil Hochkant',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_mobilehoch-responsive',
				'type'		=>		'text',
			)
		);

		// CONTENTCOLUMN TABLET QUER
		$wp_customize->add_setting( 'setting_contentcolumn-tabletquer-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_contentcolumn-tabletquer-responsive', array(
				'label'		=>		'Contentspalten Tablet Quer',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_contentcolumn-tabletquer-responsive',
				'type'		=>		'text',
			)
		);

		// CONTENTCOLUMN TABLET HOCHKANT
		$wp_customize->add_setting( 'setting_contentcolumn-tablethoch-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_contentcolumn-tablethoch-responsive', array(
				'label'		=>		'Contentspalten Tablet Hochkant',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_contentcolumn-tablethoch-responsive',
				'type'		=>		'text',
			)
		);

		// CONTENTCOLUMN MOBILE QUER
		$wp_customize->add_setting( 'setting_contentcolumn-mobilequer-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_contentcolumn-mobilequer-responsive', array(
				'label'		=>		'Contentspalten Mobil Quer',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_contentcolumn-mobilequer-responsive',
				'type'		=>		'text',
			)
		);

		// COTENTCOLUMN MOBILE HOCHKANT
		$wp_customize->add_setting( 'setting_contentcolumn-mobilehoch-responsive', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_contentcolumn-mobilehoch-responsive', array(
				'label'		=>		'Contentspalten Mobil Hochkant',
				'section'	=>		'chaos_responsive',
				'settings'	=>		'setting_contentcolumn-mobilehoch-responsive',
				'type'		=>		'text',
			)
		);	
	
		// FOOTERCOLUMN TABLET QUER
		$wp_customize->add_setting( 'setting_footercolumn-tabletquer-responsive', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_footercolumn-tabletquer-responsive', array(
			'label'		=>		'Footerspalte Tablet Quer',
			'section'	=>		'chaos_responsive',
			'settings'	=>		'setting_footercolumn-tabletquer-responsive',
			'type'		=>		'text',
		)
	);

	// FOOTERCOLUMN TABLET HOCHKANT
	$wp_customize->add_setting( 'setting_footercolumn-tablethoch-responsive', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_footercolumn-tablethoch-responsive', array(
			'label'		=>		'Footerspalte Tablet Hochkant',
			'section'	=>		'chaos_responsive',
			'settings'	=>		'setting_footercolumn-tablethoch-responsive',
			'type'		=>		'text',
		)
	);

	// FOOTERCOLUMN MOBILE QUER
	$wp_customize->add_setting( 'setting_footercolumn-mobilequer-responsive', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_footercolumn-mobilequer-responsive', array(
			'label'		=>		'Footerspalte Mobil Quer',
			'section'	=>		'chaos_responsive',
			'settings'	=>		'setting_footercolumn-mobilequer-responsive',
			'type'		=>		'text',
		)
	);

	// FOOTERCOLUMN MOBILE HOCHKANT
	$wp_customize->add_setting( 'setting_footercolumn-mobilehoch-responsive', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_footercolumn-mobilehoch-responsive', array(
			'label'		=>		'Footerspalte Mobil Hochkant',
			'section'	=>		'chaos_responsive',
			'settings'	=>		'setting_footercolumn-mobilehoch-responsive',
			'type'		=>		'text',
		)
	);
	}
	add_action( 'customize_register', 'wpv_customize_responsive' );
