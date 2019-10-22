<?php
function wpv_customize_contact_header ( $wp_customize ) {
	

	$wp_customize->add_section( 'chaos_contact-header', array(
			'title'			=>		'Chaos Contact Header',
			'priority'		=>		2,
			'description'	=>		'Hier sind alle Einstellungen des Headers',
		)
    );
    
    // DISPLAY CONTACTHEADER
    $wp_customize->add_setting( 'setting_display-contact-header', array(
            'default'   => 0, // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'checkbox_display-contact-header', // Setting ID
            array(
                'label'     => 'Contact Header anzeigen',
                'section'   => 'chaos_contact-header', // No hyphen
                'settings'  => 'setting_display-contact-header', // Setting ID
                'type'      => 'checkbox',
            )
        )
    );
    // contact-header TEXT
    $wp_customize->add_setting( 'setting_text-contact-header', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'theme_mod',
    ) );

    $wp_customize->add_control( 'control_text-contact-header', array(
        'type' => 'textarea',
        'section' => 'chaos_contact-header',
        'settings' =>  'setting_text-contact-header',
        'label' => __( 'contact-header Text' ),
    ) );

    
    // SOCIALMEDIA ALIGN
	$wp_customize->add_setting( 'setting_align-contact-header', array(
            'default'   => 'right', // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
            'type' => 'theme_mod',
        )
    );
  
    $wp_customize->add_control(
        'control_radio_align_contact-header',
        array(
            'label'    => 'Social Media Ausrichtung',
            'section'  => 'chaos_contact-header',
            'settings' => 'setting_align-contact-header',
            'type'     => 'select',
            'choices'  => array(
                'header1'  => 'Text links, Icons rechts',
                'header2' => 'Text rechts, Icons links',
                'header3' => 'Text mitte, Icons mitte',
                'header4' => 'Text mitte Icon links',
                'header5' => 'Text mitte Icon rechts',
            ),
        )
    );

  
    // DISPLAY SOCIALMEDIA ICONS
    $wp_customize->add_setting( 'setting_display_socialicons-contact-header', array(
            'default'   => 0, // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
            'type' => 'theme_mod',
        )
    );
  
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'checkbox_display-contact-header', // Setting ID
            array(
                'label'     => 'Socialmedia Icons anzeigen',
                'section'   => 'chaos_contact-header', // No hyphen
                'settings'  => 'setting_display_socialicons-contact-header', // Setting ID
                'type'      => 'checkbox',
            )
        )
    );

    // WIDTH 100%
    $wp_customize->add_setting( 'setting_100-width-contact-header', array(
            'default'   => 0, // Set default value
            'sanitize_callback' => 'esc_attr', // Sanitize input
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'checkbox_100-width-contact-header', // Setting ID
            array(
                'label'     => 'Contact Header Breite 100%',
                'section'   => 'chaos_contact-header', // No hyphen
                'settings'  => 'setting_100-width-contact-header', // Setting ID
                'type'      => 'checkbox',
            )
        )
    );
    // BACKGROUND
	$wp_customize->add_setting( 'setting_background-contact-header' , array(
        'default' => '#3d3d3d',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_background_contact-header',
            array(
                'label'      => 'Hintergrundfarbe',
                'section'    => 'chaos_contact-header',
                'settings'   => 'setting_background-contact-header',
            ) )
    );

    // TEXTCOLOR
	$wp_customize->add_setting( 'setting_textcolor-contact-header' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_textcolor_contact-header',
            array(
                'label'      => 'Textfarbe',
                'section'    => 'chaos_contact-header',
                'settings'   => 'setting_textcolor-contact-header',
            ) )
    );

    // LINKKCOLOR
	$wp_customize->add_setting( 'setting_linkcolor-contact-header' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_linkcolor_contact-header',
            array(
                'label'      => 'Linkfarbe',
                'section'    => 'chaos_contact-header',
                'settings'   => 'setting_linkcolor-contact-header',
            ) )
    );

    // SCHRIFTART
		$wp_customize->add_setting( 'select_font-contact-header', array(
            'capability' => 'edit_theme_options',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'select_font-contact-header', array(
            'type' => 'select',
            'section' => 'chaos_contact-header', // Add a default or your own section
            'label' => __( 'Schriftart' ),
            'choices' => chaos_get_fonts(),
        )
    );

    // SCHRIFTSTYLE
    $wp_customize->add_setting( 'setting_font-weight-contact-header', array(
            'default'		=>		'',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_font-weight-contact-header', array(
            'label'		=>		'Schriftstyle',
            'section'	=>		'chaos_contact-header',
            'settings'	=>		'setting_font-weight-contact-header',
            'type'		=>		'text',
        )
    );

    // SCHRIFTGRÖßE
    $wp_customize->add_setting( 'setting_textsize-contact-header', array(
            'default'		=>		'12px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_textsize-contact-header', array(
            'label'		=>		'Textgröße',
            'section'	=>		'chaos_contact-header',
            'settings'	=>		'setting_textsize-contact-header',
            'type'		=>		'text',
        )
    );

    // LINE HEIGHT
    $wp_customize->add_setting( 'setting_line-height-contact-header', array(
            'default'		=>		'',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_line-height-contact-header', array(
            'label'		=>		'Schrift Line Height',
            'section'	=>		'chaos_contact-header',
            'settings'	=>		'setting_line-height-contact-header',
            'type'		=>		'text',
        )
    );

    // ICONCOLOR
    $wp_customize->add_setting( 'setting_iconcolor-contact-header' , array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'color_picker_icon_color_header',
            array(
                'label'      => 'Iconfarbe',
                'section'    => 'chaos_contact-header',
                'settings'   => 'setting_iconcolor-contact-header',
            ) )
    );

    // ICON SIZE
    $wp_customize->add_setting( 'setting_iconsize-contact-header', array(
            'default'		=>		'30px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_iconsize-contact-header', array(
            'label'			=>		'Icon Größe',
            'section'		=>		'chaos_contact-header',
            'settings'		=>		'setting_iconsize-contact-header',
            'type'			=>		'text',
        )
    );

    // ICON PADDING
		$wp_customize->add_setting( 'setting_iconpadding-contact-header', array(
            'default'		=>		'10px',
            'sanitize_callback'	=>	'sanitize_text_field',
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control( 'control_iconpadding-contact-header', array(
            'label'			=>		'Icon Abstand',
            'section'		=>		'chaos_contact-header',
            'settings'		=>		'setting_iconpadding-contact-header',
            'type'			=>		'text',
        )
    );
}
add_action( 'customize_register', 'wpv_customize_contact_header' );