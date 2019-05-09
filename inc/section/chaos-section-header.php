<?php
function wpv_customize_header ( $wp_customize ) {
	

	$wp_customize->add_section( 'chaos_header', array(
			'title'			=>		'Chaos Header',
			'priority'		=>		2,
			'description'	=>		'Hier sind alle Einstellungen des Headers',
		)
	);

	$wp_customize->add_setting('setting_header-background', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header-background',
			array(
				'label'      => 'Hintergrundbild',
				'section'    => 'chaos_header',
				'settings'   => 'setting_header-background'
			)
		)
	);

	$wp_customize->add_setting( 'setting_color-header' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker',
            array(
                'label'      => 'Hintergrundfarbe',
                'section'    => 'chaos_header',
                'settings'   => 'setting_color-header',
            ) )
    );

	$wp_customize->add_setting( 'setting_header-align', array(
			'default'   => 0, // Set default value
			'sanitize_callback' => 'esc_attr', // Sanitize input
		)
	);

	$wp_customize->add_control(
		'control_radio',
		array(
			'label'    => 'Ausrichtung',
			'section'  => 'chaos_header',
			'settings' => 'setting_header-align',
			'type'     => 'radio',
			'choices'  => array(
				'left'  => 'left',
				'center' => 'center',
				'right' => 'right',
			),
		)
	);

	$wp_customize->add_setting( 'setting_header-padding', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_header-padding', array(
			'label'			=>		'Padding',
			'description'	=>		'Oben und unten',
			'section'		=>		'chaos_header',
			'settings'		=>		'setting_header-padding',
			'type'			=>		'text',
		)
	);

	$wp_customize->add_setting( 'setting_header-borderbottom', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	$wp_customize->add_control( 'control_header-borderbottom', array(
			'label'			=>		'Border Bottom',
			'section'		=>		'chaos_header',
			'settings'		=>		'setting_header-borderbottom',
			'type'			=>		'text',
		)
	);
}
add_action( 'customize_register', 'wpv_customize_header' );