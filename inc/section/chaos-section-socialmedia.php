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
				'type' => 'theme_mod',
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
				'type' => 'theme_mod',
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
				'type' => 'theme_mod',
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
				'type' => 'theme_mod',
			)
		);
		$wp_customize->add_control( 'control_xing-socialmedia', array(
				'label'		=>		'Xing',
				'section'	=>		'chaos_social-media',
				'settings'	=>		'setting_xing-socialmedia',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_socialmedia' );