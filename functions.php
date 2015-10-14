<?php
/**
 * Enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/site-behaviors.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/** 
 * Add Logo Upload Capability via WP Theme Customizer
 */

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
	    'title'       => __( 'Logo', 'themeslug' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
		)
	);

	$wp_customize->add_setting( 'themeslug_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		    'label'    => __( 'Logo', 'themeslug' ),
		    'section'  => 'themeslug_logo_section',
		    'settings' => 'themeslug_logo',
			) 
		) 
	);

}

add_action( 'customize_register', 'themeslug_theme_customizer' );
