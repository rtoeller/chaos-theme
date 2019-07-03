<?php
function wpv_customize_copyright ( $wp_customize ) {
	

	$wp_customize->add_section( 'chaos_copyright', array(
			'title'			=>		'Chaos Copyright',
			'priority'		=>		6,
			'description'	=>		'Hier sind alle Einstellungen des Headers',
		)
    );
    
    // COPYRIGHT TEXT
    $wp_customize->add_setting( 'setting_text-copyright', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'theme_mod',
    ) );

    $wp_customize->add_control( 'control_text-copyright', array(
        'type' => 'textarea',
        'section' => 'chaos_copyright',
        'settings' =>  'setting_text-copyright',
        'label' => __( 'Copyright Text' ),
    ) );

    // SOCIALMEDIA ALIGN
	$wp_customize->add_setting( 'setting_menu-copyright', array(
            'default'   => '', // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control(
        'control_radio_menu_copyright',
        array(
            'section'  => 'chaos_copyright',
            'settings' => 'setting_menu-copyright',
            'type' => 'select',
            'label' => 'Copyright Menü',
            'choices' => chaos_get_menus(),
        )
    );

    // SOCIALMEDIA ALIGN
	$wp_customize->add_setting( 'setting_align-copyright', array(
            'default'   => 'right', // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
        )
    );
    $wp_customize->add_control(
        'control_radio_align_copyright',
        array(
            'label'    => 'Social Media Ausrichtung',
            'section'  => 'chaos_copyright',
            'settings' => 'setting_align-copyright',
            'type'     => 'select',
            'choices'  => array(
                'copyright1'  => 'Text left',
                'copyright2' => 'Text right',
                'copyright3' => 'Text center',
                'copyright4' => 'Text center Icon left',
                'copyright5' => 'Text center Icon right',
            ),
        )
    );

    // WIDTH 100%
    $wp_customize->add_setting( 'setting_100-width-copyright', array(
            'default'   => 0, // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'checkbox_100-width-copyright', // Setting ID
            array(
                'label'     => 'Copyright Breite 100%',
                'section'   => 'chaos_copyright', // No hyphen
                'settings'  => 'setting_100-width-copyright', // Setting ID
                'type'      => 'checkbox',
            )
        )
    );
    // BACKGROUND
	$wp_customize->add_setting( 'setting_background-copyright' , array(
        'default' => '#3d3d3d',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_background_copyright',
            array(
                'label'      => 'Hintergrundfarbe',
                'section'    => 'chaos_copyright',
                'settings'   => 'setting_background-copyright',
            ) )
    );

    // TEXTCOLOR
	$wp_customize->add_setting( 'setting_textcolor-copyright' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_textcolor_copyright',
            array(
                'label'      => 'Textfarbe',
                'section'    => 'chaos_copyright',
                'settings'   => 'setting_textcolor-copyright',
            ) )
    );

    // LINKKCOLOR
	$wp_customize->add_setting( 'setting_linkcolor-copyright' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_linkcolor_copyright',
            array(
                'label'      => 'Linkfarbe',
                'section'    => 'chaos_copyright',
                'settings'   => 'setting_linkcolor-copyright',
            ) )
    );

    // SCHRIFTART
		$wp_customize->add_setting( 'select_font-copyright', array(
            'capability' => 'edit_theme_options',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'select_font-copyright', array(
            'type' => 'select',
            'section' => 'chaos_copyright', // Add a default or your own section
            'label' => __( 'Schriftart' ),
            'choices' => chaos_get_fonts(),
        )
    );

    // SCHRIFTSTYLE
    $wp_customize->add_setting( 'setting_font-weight-copyright', array(
            'default'		=>		'',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_font-weight-copyright', array(
            'label'		=>		'Schriftstyle',
            'section'	=>		'chaos_copyright',
            'settings'	=>		'setting_font-weight-copyright',
            'type'		=>		'text',
        )
    );

    // SCHRIFTGRÖßE
    $wp_customize->add_setting( 'setting_textsize-copyright', array(
            'default'		=>		'12px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_textsize-copyright', array(
            'label'		=>		'Textgröße',
            'section'	=>		'chaos_copyright',
            'settings'	=>		'setting_textsize-copyright',
            'type'		=>		'text',
        )
    );

    // LINE HEIGHT
    $wp_customize->add_setting( 'setting_line-height-copyright', array(
            'default'		=>		'',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_line-height-copyright', array(
            'label'		=>		'Schrift Line Height',
            'section'	=>		'chaos_copyright',
            'settings'	=>		'setting_line-height-copyright',
            'type'		=>		'text',
        )
    );

    // ICONCOLOR
    $wp_customize->add_setting( 'setting_iconcolor-copyright' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_icon_color',
            array(
                'label'      => 'Iconfarbe',
                'section'    => 'chaos_copyright',
                'settings'   => 'setting_iconcolor-copyright',
            ) )
    );

    // ICON SIZE
    $wp_customize->add_setting( 'setting_iconsize-copyright', array(
            'default'		=>		'30px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_iconsize-copyright', array(
            'label'			=>		'Icon Größe',
            'section'		=>		'chaos_copyright',
            'settings'		=>		'setting_iconsize-copyright',
            'type'			=>		'text',
        )
    );

    // ICON PADDING
		$wp_customize->add_setting( 'setting_iconpadding-copyright', array(
            'default'		=>		'10px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_iconpadding-copyright', array(
            'label'			=>		'Icon Abstand',
            'section'		=>		'chaos_copyright',
            'settings'		=>		'setting_iconpadding-copyright',
            'type'			=>		'text',
        )
    );
}
add_action( 'customize_register', 'wpv_customize_copyright' );