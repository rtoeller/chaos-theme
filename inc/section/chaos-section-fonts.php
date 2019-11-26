<?php
	function wpv_customize_fonts ( $wp_customize ) {
		if ( get_theme_mod( 'setting_primarycolor-generell' ) ) {
			$primary = get_theme_mod( 'setting_primarycolor-generell' );
		}
		else {
			$primary = '#43755c';
		}

		/*
		FUNKTIONIERT LEIDER NICHT - aufgeschoben
		if ( get_theme_mod( 'select_fontbody-fonts') ) {
			$font_family = 'roboto'; // strtolower( get_theme_mod( 'select_fontbody-fonts') );
			$font_family = strtolower( get_theme_mod( 'select_fontbody-fonts') );
			settype($font_family, 'string');
			echo gettype($font_family). ' '.$font_family;
		}
		else {
			$font_family = 'lato';
		}*/
		$font_family = 'lato';
		
		// PANEL
		$wp_customize->add_panel( 'chaos_fonts', array(
			'priority'       => 3,
			'capability'     => 'edit_theme_options',
			'title'          => 'Chaos Fonts',
			'description'    => 'Hier können die Überschriften geändert werden',
		) );

		$wp_customize->add_section( 'body', array(
				'title'			=>		'Body Schrift',
				'priority'		=>		1,
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h1', array(
				'title'			=>		'Überschrift H1',
				'priority'		=>		2,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h2', array(
				'title'			=>		'Überschrift H2',
				'priority'		=>		3,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h3', array(
				'title'			=>		'Überschrift H3',
				'priority'		=>		4,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h4', array(
				'title'			=>		'Überschrift H4',
				'priority'		=>		5,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h5', array(
				'title'			=>		'Überschrift H5',
				'priority'		=>		6,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		$wp_customize->add_section( 'h6', array(
				'title'			=>		'Überschrift H6',
				'priority'		=>		7,
				'description'	=>		'Beschreibung',
				'panel'			=>		'chaos_fonts',
			)
		);

		
		// BODY SCHRIFTART
		$wp_customize->add_setting( 'select_fontbody-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_fontbody-fonts', array(
				'type' => 'select',
				'section' => 'body', // Add a default or your own section
				'label' => __( 'Body Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// BODY SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-body-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-body-fonts', array(
				'label'		=>		'Body Schriftstyle',
				'section'	=>		'body',
				'settings'	=>		'setting_font-weight-body-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// BODY TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-body-fonts' , array(
			'default' => '#3d3d3d',
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-body-fonts',
				array(
					'label'      => 'Body Textfarbe',
					'section'    => 'body',
					'settings'   => 'setting_textcolor-body-fonts',
					'panel' 	 => 'chaos_fonts',
				) )
		);

		// LINKFARBE
		$wp_customize->add_setting( 'setting_linkcolor-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'type' => 'theme_mod',
			'panel' => 'chaos_fonts',
		) );
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-linkcolor-fonts',
				array(
					'label'      => 'Linkfarbe',
					'section'    => 'body',
					'settings'   => 'setting_linkcolor-fonts',
					'panel' 	 => 'chaos_fonts',
				) )
		);
		

		// BODY SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-body-fonts', array(
				'default'		=>		'18px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-body-fonts', array(
				'label'		=>		'Body Textgröße',
				'section'	=>		'body',
				'settings'	=>		'setting_textsize-body-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// BODY LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-body-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-body-fonts', array(
				'label'		=>		'Body Schrift Line Height',
				'section'	=>		'body',
				'settings'	=>		'setting_line-height-body-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);
		
		// H1 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h1-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h1-fonts', array(
				'type' => 'select',
				'section' => 'h1', // Add a default or your own section
				'label' => __( 'H1 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H1 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h1-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h1-fonts', array(
				'label'		=>		'H1 Schriftstyle',
				'section'	=>		'h1',
				'settings'	=>		'setting_font-weight-h1-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H1 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h1-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h1-fonts',
				array(
					'label'      => 'H1 Textfarbe',
					'section'    => 'h1',
					'settings'   => 'setting_textcolor-h1-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H1 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h1-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h1-fonts', array(
				'label'		=>		'H1 Textgröße',
				'section'	=>		'h1',
				'settings'	=>		'setting_textsize-h1-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H1 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h1-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h1-fonts', array(
				'label'		=>		'H1 Schrift Line Height',
				'section'	=>		'h1',
				'settings'	=>		'setting_line-height-h1-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H2 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h2-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h2-fonts', array(
				'type' => 'select',
				'section' => 'h2', // Add a default or your own section
				'label' => __( 'H2 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H2 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h2-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h2-fonts', array(
				'label'		=>		'H2 Schriftstyle',
				'section'	=>		'h2',
				'settings'	=>		'setting_font-weight-h2-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H2 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h2-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h2-fonts',
				array(
					'label'      => 'H2 Textfarbe',
					'section'    => 'h2',
					'settings'   => 'setting_textcolor-h2-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H2 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h2-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h2-fonts', array(
				'label'		=>		'H2 Textgröße',
				'section'	=>		'h2',
				'settings'	=>		'setting_textsize-h2-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H2 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h2-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h2-fonts', array(
				'label'		=>		'H2 Schrift Line Height',
				'section'	=>		'h2',
				'settings'	=>		'setting_line-height-h2-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H3 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h3-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h3-fonts', array(
				'type' => 'select',
				'section' => 'h3', // Add a default or your own section
				'label' => __( 'H3 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H3 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h3-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h3-fonts', array(
				'label'		=>		'H3 Schriftstyle',
				'section'	=>		'h3',
				'settings'	=>		'setting_font-weight-h3-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H3 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h3-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h3-fonts',
				array(
					'label'      => 'H3 Textfarbe',
					'section'    => 'h3',
					'settings'   => 'setting_textcolor-h3-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H3 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h3-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h3-fonts', array(
				'label'		=>		'H3 Textgröße',
				'section'	=>		'h3',
				'settings'	=>		'setting_textsize-h3-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H3 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h3-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h3-fonts', array(
				'label'		=>		'H3 Schrift Line Height',
				'section'	=>		'h3',
				'settings'	=>		'setting_line-height-h3-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H4 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h4-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h4-fonts', array(
				'type' => 'select',
				'section' => 'h4', // Add a default or your own section
				'label' => __( 'H4 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H4 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h4-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h4-fonts', array(
				'label'		=>		'H4 Schriftstyle',
				'section'	=>		'h4',
				'settings'	=>		'setting_font-weight-h4-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H4 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h4-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h4-fonts',
				array(
					'label'      => 'H4 Textfarbe',
					'section'    => 'h4',
					'settings'   => 'setting_textcolor-h4-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H4 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h4-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h4-fonts', array(
				'label'		=>		'H4 Textgröße',
				'section'	=>		'h4',
				'settings'	=>		'setting_textsize-h4-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H4 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h4-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h4-fonts', array(
				'label'		=>		'H4 Schrift Line Height',
				'section'	=>		'h4',
				'settings'	=>		'setting_line-height-h4-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H5 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h5-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h5-fonts', array(
				'type' => 'select',
				'section' => 'h5', // Add a default or your own section
				'label' => __( 'H5 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H5 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h5-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h5-fonts', array(
				'label'		=>		'H5 Schriftstyle',
				'section'	=>		'h5',
				'settings'	=>		'setting_font-weight-h5-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H5 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h5-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h5-fonts',
				array(
					'label'      => 'H5 Textfarbe',
					'section'    => 'h5',
					'settings'   => 'setting_textcolor-h5-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H5 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h5-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h5-fonts', array(
				'label'		=>		'H5 Textgröße',
				'section'	=>		'h5',
				'settings'	=>		'setting_textsize-h5-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H5 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h5-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h5-fonts', array(
				'label'		=>		'H5 Schrift Line Height',
				'section'	=>		'h5',
				'settings'	=>		'setting_line-height-h5-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H6 SCHRIFTART
		$wp_customize->add_setting( 'select_font-h6-fonts', array(
				'default'	 => $font_family,
				'capability' => 'edit_theme_options',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		
		$wp_customize->add_control( 'select_font-h6-fonts', array(
				'type' => 'select',
				'section' => 'h6', // Add a default or your own section
				'label' => __( 'H6 Schriftart' ),
				'choices' => chaos_get_fonts(),
				'panel' => 'chaos_fonts',
			)
		);

		// H6 SCHRIFTSTYLE
		$wp_customize->add_setting( 'setting_font-weight-h6-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_font-weight-h6-fonts', array(
				'label'		=>		'H6 Schriftstyle',
				'section'	=>		'h6',
				'settings'	=>		'setting_font-weight-h6-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);

		// H6 TEXTFARBE
		$wp_customize->add_setting( 'setting_textcolor-h6-fonts' , array(
			'default' => $primary,
			'sanitize_callback' => 'sanitize_hex_color',
			'panel' => 'chaos_fonts',
		) );

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'color_picker-textcolor-h6-fonts',
				array(
					'label'      => 'H6 Textfarbe',
					'section'    => 'h6',
					'settings'   => 'setting_textcolor-h6-fonts',
					'panel' => 'chaos_fonts',
				) )
		);

		// H6 SCHRIFTGRÖßE
		$wp_customize->add_setting( 'setting_textsize-h6-fonts', array(
				'default'		=>		'40px',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_textsize-h6-fonts', array(
				'label'		=>		'H6 Textgröße',
				'section'	=>		'h6',
				'settings'	=>		'setting_textsize-h6-fonts',
				'type'		=>		'text',
				'panel'		=> 		'chaos_fonts',
			)
		);

		// H6 LINE HEIGHT
		$wp_customize->add_setting( 'setting_line-height-h6-fonts', array(
				'default'		=>		'',
				'sanitize_callback'	=>	'sanitize_text_field',
				'type' => 'theme_mod',
				'panel' => 'chaos_fonts',
			)
		);
		$wp_customize->add_control( 'control_line-height-h6-fonts', array(
				'label'		=>		'H6 Schrift Line Height',
				'section'	=>		'h6',
				'settings'	=>		'setting_line-height-h6-fonts',
				'type'		=>		'text',
				'panel' 	=> 		'chaos_fonts',
			)
		);
	}
	add_action( 'customize_register', 'wpv_customize_fonts' );
