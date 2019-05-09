<?php
function wpv_customize_menu ( $wp_customize ) {
	$wp_customize->add_section( 'chaos_menu', array(
			'title'			=>		'Chaos Menü',
			'priority'		=>		4,
			'description'	=>		'Hier sind alle Einstellungen des Menü',
		)
	);

	$wp_customize->add_setting( 'setting_menu-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker',
            array(
                'label'      => 'Farbe',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menu-color',
            ) )
	);

	$wp_customize->add_setting( 'setting_menuhover-color' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
	) );
	
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker1',
            array(
                'label'      => 'Farbe Hover',
                'section'    => 'chaos_menu',
                'settings'   => 'setting_menuhover-color',
            ) )
	);

	$wp_customize->add_setting( 'setting_menu-padding', array(
			'default'		=>		'',
			'sanitize_callback'	=>	'sanitize_text_field',
			'type' => 'theme_mod',
		)
	);
	
	$wp_customize->add_control( 'control_menu-padding', array(
			'label'			=>		'Padding',
			'section'		=>		'chaos_menu',
			'settings'		=>		'setting_menu-padding',
			'type'			=>		'text',
		)
	);
	$wp_customize->add_setting( 'setting_menu-background', array(
			'default'   => 0, // Set default value
			'sanitize_callback' => 'esc_attr', // Sanitize input
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'checkbox1', // Setting ID
			array(
				'label'     => 'Menu Item Hintergrund',
				'section'   => 'chaos_menu', // No hyphen
				'settings'  => 'setting_menu-background', // Setting ID
				'type'      => 'checkbox',
			)
		)
	);
}
add_action( 'customize_register', 'wpv_customize_menu' );