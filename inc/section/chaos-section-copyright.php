<?php
function wpv_customize_copyright ( $wp_customize ) {
	

	$wp_customize->add_section( 'chaos_copyright', array(
			'title'			=>		'Chaos Copyright',
			'priority'		=>		6,
			'description'	=>		'Hier sind alle Einstellungen des Headers',
		)
	);

	$wp_customize->add_setting( 'setting_copyright-background' , array(
        'default' => '#3d3d3d',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_copyright_background',
            array(
                'label'      => 'Hintergrundfarbe',
                'section'    => 'chaos_copyright',
                'settings'   => 'setting_copyright-background',
            ) )
    );

}
add_action( 'customize_register', 'wpv_customize_copyright' );