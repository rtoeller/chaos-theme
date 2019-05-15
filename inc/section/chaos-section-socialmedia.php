<?php
	function wpv_customize_socialmedia ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_social-media', array(
				'title'			=>		'Chaos Social Media',
				'priority'		=>		6,
				'description'	=>		'Beschreibung',
			)
		);

		// FACEBOOK
		$wp_customize->add_setting( 'setting_facebook-socialmedia', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_facebook-socialmedia', array(
				'label'		=>		'Facebook',
				'section'	=>		'chaos_social-media',
				'settings'	=>		'setting_facebook-socialmedia',
				'type'		=>		'text',
			)
		);

		// TWITTER
		$wp_customize->add_setting( 'setting_twitter-socialmedia', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_twitter-socialmedia', array(
				'label'		=>		'Twitter',
				'section'	=>		'chaos_social-media',
				'settings'	=>		'setting_twitter-socialmedia',
				'type'		=>		'text',
			)
		);

		// INSTAGRAM
		$wp_customize->add_setting( 'setting_instagram-socialmedia', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_instagram-socialmedia', array(
				'label'		=>		'Instagram',
				'section'	=>		'chaos_social-media',
				'settings'	=>		'setting_instagram-socialmedia',
				'type'		=>		'text',
			)
		);

		// XING
		$wp_customize->add_setting( 'setting_xing-socialmedia', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_xing-socialmedia', array(
				'label'		=>		'Xing',
				'section'	=>		'chaos_social-media',
				'settings'	=>		'setting_xing-socialmedia',
				'type'		=>		'text',
			)
		);

		/*/ ICONCOLOR
		$wp_customize->add_setting( 'setting_iconcolor-socialmedia' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker_icon_color',
				array(
					'label'      => 'Iconfarbe',
					'section'    => 'chaos_social-media',
					'settings'   => 'setting_iconcolor-socialmedia',
				) )
		);

		// ICON SIZE
		$wp_customize->add_setting( 'setting_size-socialmedia', array(
				'default'		=>		'30px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_size-socialmedia', array(
				'label'			=>		'Icon Größe',
				'section'		=>		'chaos_social-media',
				'settings'		=>		'setting_size-socialmedia',
				'type'			=>		'text',
			)
		);

		// ICON PADDING
		$wp_customize->add_setting( 'setting_padding-socialmedia', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_padding-socialmedia', array(
				'label'			=>		'Icon Abstand',
				'section'		=>		'chaos_social-media',
				'settings'		=>		'setting_padding-socialmedia',
				'type'			=>		'text',
			)
		);

		// SOCIALMEDIA POSITION
		$wp_customize->add_setting( 'setting_position-socialmedia', array(
				'default'   => 0, // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);

		$wp_customize->add_control(
			'control_radio_position-socialmedia',
			array(
				'label'    => 'Social Media Position',
				'section'  => 'chaos_social-media',
				'settings' => 'setting_position-socialmedia',
				'type'     => 'radio',
				'choices'  => array(
					'0'  => 'Header',
					'1'  => 'Footer',
				),
			)
		);

		// SOCIALMEDIA ALIGN
		$wp_customize->add_setting( 'setting_align-socialmedia', array(
				'default'   => 'right', // Set default value
				'sanitize_callback' => 'esc_attr', // Sanitize input
			)
		);

		$wp_customize->add_control(
			'control_radio_align_socialmedia',
			array(
				'label'    => 'Social Media Ausrichtung',
				'section'  => 'chaos_social-media',
				'settings' => 'setting_align-socialmedia',
				'type'     => 'radio',
				'choices'  => array(
					'left'  => 'left',
					'right' => 'right',
				),
			)
		);*/
	}
	add_action( 'customize_register', 'wpv_customize_socialmedia' );