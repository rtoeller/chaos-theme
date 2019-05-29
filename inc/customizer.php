<?php
/**
 * Twenty Nineteen: Customizer
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twentynineteen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'twentynineteen_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'twentynineteen_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Primary color.
	 */
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => 'default',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'twentynineteen_sanitize_color_option',
		)
	);

	$wp_customize->add_control(
		'primary_color',
		array(
			'type'     => 'radio',
			'label'    => __( 'Primary Color', 'twentynineteen' ),
			'choices'  => array(
				'default' => _x( 'Default', 'primary color', 'twentynineteen' ),
				'custom'  => _x( 'Custom', 'primary color', 'twentynineteen' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	// Add primary color hue setting and control.
	$wp_customize->add_setting(
		'primary_color_hue',
		array(
			'default'           => 199,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color_hue',
			array(
				'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', 'twentynineteen' ),
				'section'     => 'colors',
				'mode'        => 'hue',
			)
		)
	);

	// Add image filter setting and control.
	$wp_customize->add_setting(
		'image_filter',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'image_filter',
		array(
			'label'   => __( 'Apply a filter to featured images using the primary color', 'twentynineteen' ),
			'section' => 'colors',
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'twentynineteen_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function twentynineteen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function twentynineteen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentynineteen_customize_preview_js() {
	wp_enqueue_script( 'twentynineteen-customize-preview', get_theme_file_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '20181231', true );
}
add_action( 'customize_preview_init', 'twentynineteen_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentynineteen_panels_js() {
	wp_enqueue_script( 'twentynineteen-customize-controls', get_theme_file_uri( '/js/customize-controls.js' ), array(), '20181231', true );
}
add_action( 'customize_controls_enqueue_scripts', 'twentynineteen_panels_js' );

/**
 * Sanitize custom color choice.
 *
 * @param string $choice Whether image filter is active.
 *
 * @return string
 */
function twentynineteen_sanitize_color_option( $choice ) {
	$valid = array(
		'default',
		'custom',
	);

	if ( in_array( $choice, $valid, true ) ) {
		return $choice;
	}

	return 'default';
}


require get_template_directory() . '/inc/section/chaos-section-footer.php';
require get_template_directory() . '/inc/section/chaos-section-generell.php';
require get_template_directory() . '/inc/section/chaos-section-logo.php';
require get_template_directory() . '/inc/section/chaos-section-header.php';
require get_template_directory() . '/inc/section/chaos-section-menu.php';
require get_template_directory() . '/inc/section/chaos-section-socialmedia.php';
require get_template_directory() . '/inc/section/chaos-section-copyright.php';
require get_template_directory() . '/inc/section/chaos-section-contact-header.php';
require get_template_directory() . '/inc/section/chaos-section-background.php';
require get_template_directory() . '/inc/section/chaos-section-responsive.php';
require get_template_directory() . '/inc/section/chaos-section-breadcrumb.php';
require get_template_directory() . '/inc/section/chaos-section-pagetitle.php';
require get_template_directory() . '/inc/section/chaos-section-metatags.php';
//require get_template_directory() . '/inc/section/chaos-section-example.php';

function chaos_get_fonts() {
	$fonts = array();

	foreach( glob( get_template_directory() . '/fonts/*', GLOB_ONLYDIR) as $dir ) {
		$font = basename($dir);
		$fonts[$font] = ucfirst( $font );
	}

	return  $fonts;
}

function chaos_get_background_position() {
	$position = array(
			'left top' => 'left top',
			'left center' => 'left center',
			'left bottom' => 'left bottom',
			'center center' => 'center center',
			'right top' => 'right top',
			'right center' => 'right center',
			'right bottom' => 'right bottom',
	);

	return  $position;
}

function chaos_get_background_repeat() {
	$repeat = array(
			'no repeat' => 'no repeat',
			'repeat' => 'repeat',
			'repeat-x' => 'repeat-x',
			'repeat-y' => 'repeat-y',
	);

	return  $repeat;
}

function chaos_get_menus() {
	$menus = get_terms('nav_menu');
	$custom_menus = array();
	$custom_menus[0] = '';
	foreach($menus as $menu){
		$custom_menus[$menu->slug] = $menu->name;
	} 

	return  $custom_menus;
}

function javascript_register ( $wp_customize ) {

    // SECTION custom_header
    $wp_customize->add_section('section_custom_js', array(
            'title' => 'Zusätzliches JavaScript',
            'priority' => 90,
            'description' => 'Beschreibung',
        )
    );
    // JAVASCRIPT
    $wp_customize->add_setting('custom_js', array(
        'type' => 'option',
    ));

    $wp_customize->add_control(
        new WP_Customize_Code_Editor_Control(
            $wp_customize,
            'custom_html',
            array(
                'label' => 'Zusätzliches JavaScript',
                'code_type' => 'javascript',
                'settings' => 'custom_js',
                'section' => 'section_custom_js',
            )
        )
    );
}
add_action( 'javascript_register', 'wpv_customize_register' );

function themeslug_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );
  
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
  
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  }

function prefix_customizer_register( $wp_customize ) {
	$wp_customize->add_section( 'contact_detail', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Contact Detail', 'daemmfabrik' ),
		'description'    => ''
	) );

	$wp_customize->add_setting( 'contact_address', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => ''
	) );

	$wp_customize->add_control( 'contact_address', array(
		'type'        => 'text',
		'priority'    => 10,
		'section'     => 'contact_detail',
		'label'       => __( 'Address', 'daemmfabrik' ),
		'description' => '',
	) );

	$wp_customize->add_setting( 'contact_email', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'contact_email', array(
		'type'        => 'text',
		'priority'    => 10,
		'section'     => 'contact_detail',
		'label'       => __( 'E-Mail', 'daemmfabrik' ),
		'description' => '',
	) );

	$wp_customize->add_setting( 'contact_phone', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'contact_phone', array(
		'type'        => 'text',
		'priority'    => 10,
		'section'     => 'contact_detail',
		'label'       => __( 'Phone', 'daemmfabrik' ),
		'description' => '',
	) );

	$wp_customize->add_setting( 'contact_phone_secondary', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'contact_phone_secondary', array(
		'type'        => 'text',
		'priority'    => 10,
		'section'     => 'contact_detail',
		'label'       => __( 'Phone Secondary', 'daemmfabrik' ),
		'description' => '',
	) );
	$wp_customize->add_setting( 'contact_office_hour', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => '',
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'contact_office_hour', array(
		'type'        => 'text',
		'priority'    => 10,
		'section'     => 'contact_detail',
		'label'       => __( 'Office Hour', 'daemmfabrik' ),
		'description' => '',
	) );
}

add_action( 'customize_register', 'prefix_customizer_register' );