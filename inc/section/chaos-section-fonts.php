<?php
	function wpv_customize_fonts ( $wp_customize ) {
		$wp_customize->add_section( 'chaos_fonts', array(
				'title'			=>		'Chaos Fonts',
				'priority'		=>		3,
				'description'	=>		'Beschreibung',
			)
		);
		
		// BODY SCHRIFTART
		$wp_customize->add_setting( 'select_fontbody-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_fontbody-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'Body Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// BODY SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-body-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-body-fonts', array(
				'label'		=>		'Body Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-body-fonts',
				'type'		=>		'text',
			)
		);

		// BODY TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-body-fonts' , array(
			'default' => '#3d3d3d',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-body-fonts',
				array(
					'label'      => 'Body Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-body-fonts',
				) )
		);

		// BODY SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-body-fonts', array(
				'default'		=>		'18px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-body-fonts', array(
				'label'		=>		'Body Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-body-fonts',
				'type'		=>		'text',
			)
		);

		// BODY LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-body-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-body-fonts', array(
				'label'		=>		'Body Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-body-fonts',
				'type'		=>		'text',
			)
		);
		
		// H1 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h1-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h1-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H1 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H1 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h1-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h1-fonts', array(
				'label'		=>		'H1 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h1-fonts',
				'type'		=>		'text',
			)
		);

		// H1 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h1-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h1-fonts',
				array(
					'label'      => 'H1 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h1-fonts',
				) )
		);

		// H1 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h1-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h1-fonts', array(
				'label'		=>		'H1 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h1-fonts',
				'type'		=>		'text',
			)
		);

		// H1 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h1-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h1-fonts', array(
				'label'		=>		'H1 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h1-fonts',
				'type'		=>		'text',
			)
		);

		// H2 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h2-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h2-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H2 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H2 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h2-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h2-fonts', array(
				'label'		=>		'H2 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h2-fonts',
				'type'		=>		'text',
			)
		);

		// H2 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h2-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h2-fonts',
				array(
					'label'      => 'H2 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h2-fonts',
				) )
		);

		// H2 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h2-fonts', array(
				'default'		=>		'36px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h2-fonts', array(
				'label'		=>		'H2 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h2-fonts',
				'type'		=>		'text',
			)
		);

		// H2 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h2-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h2-fonts', array(
				'label'		=>		'H2 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h2-fonts',
				'type'		=>		'text',
			)
		);

		// H3 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h3-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h3-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H3 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H3 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h3-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h3-fonts', array(
				'label'		=>		'H3 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h3-fonts',
				'type'		=>		'text',
			)
		);

		// H3 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h3-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h3-fonts',
				array(
					'label'      => 'H3 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h3-fonts',
				) )
		);

		// H3 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h3-fonts', array(
				'default'		=>		'28px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h3-fonts', array(
				'label'		=>		'H3 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h3-fonts',
				'type'		=>		'text',
			)
		);

		// H3 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h3-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h3-fonts', array(
				'label'		=>		'H3 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h3-fonts',
				'type'		=>		'text',
			)
		);

		// H4 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h4-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h4-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H4 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H4 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h4-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h4-fonts', array(
				'label'		=>		'H4 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h4-fonts',
				'type'		=>		'text',
			)
		);

		// H4 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h4-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h4-fonts',
				array(
					'label'      => 'H4 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h4-fonts',
				) )
		);

		// H4 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h4-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h4-fonts', array(
				'label'		=>		'H4 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h4-fonts',
				'type'		=>		'text',
			)
		);

		// H4 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h4-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h4-fonts', array(
				'label'		=>		'H4 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h4-fonts',
				'type'		=>		'text',
			)
		);

		// H5 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h5-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h5-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H5 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H5 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h5-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h5-fonts', array(
				'label'		=>		'H5 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h5-fonts',
				'type'		=>		'text',
			)
		);

		// H5 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h5-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h5-fonts',
				array(
					'label'      => 'H5 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h5-fonts',
				) )
		);

		// H5 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h5-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h5-fonts', array(
				'label'		=>		'H5 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h5-fonts',
				'type'		=>		'text',
			)
		);

		// H5 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h5-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h5-fonts', array(
				'label'		=>		'H5 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h5-fonts',
				'type'		=>		'text',
			)
		);

		// H6 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h6-fonts', array(
				'capability' => 'edit_theme_options',
			)
		);
		
		$wp_customize->add_control( 'select_font-h6-fonts', array(
				'type' => 'select',
				'section' => 'chaos_fonts', // Add a default or your own section
				'label' => __( 'H6 Schriftart' ),
				'choices' => chaos_get_fonts(),
			)
		);

		// H6 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h6-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h6-fonts', array(
				'label'		=>		'H6 Schriftstyle',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_font-weight-h6-fonts',
				'type'		=>		'text',
			)
		);

		// H6 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h6-fonts' , array(
			'default' => '#43755c',
			'sanitize_callback' => 'sanitize_hex_color',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h6-fonts',
				array(
					'label'      => 'H6 Textfarbe',
					'section'    => 'chaos_fonts',
					'settings'   => 'setting_textcolor-h6-fonts',
				) )
		);

		// H6 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h6-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_textsize-h6-fonts', array(
				'label'		=>		'H6 Textgröße',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_textsize-h6-fonts',
				'type'		=>		'text',
			)
		);

		// H6 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h6-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type'	=>	'option',
			)
		);
		$wp_customize->add_control( 'control_line-height-h6-fonts', array(
				'label'		=>		'H6 Schrift Line Height',
				'section'	=>		'chaos_fonts',
				'settings'	=>		'setting_line-height-h6-fonts',
				'type'		=>		'text',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_fonts' );
