<?php

/******************************
 * Enqueue scripts and styles *
 ******************************/

function theme_name_scripts() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/site-behaviors.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/******************************************************
 * Add Logo Upload Capability via WP Theme Customizer *
 ******************************************************/

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

/***********************
 * Add WP menu support *
 ***********************/

function register_my_menu() {

  register_nav_menu('header-menu',__( 'Header Menu' ));

}

add_action( 'init', 'register_my_menu' );

/**********************************************
 * Add WP sidebar and widgetized area support *
 **********************************************/

function promo_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left Column Area',
		'id'            => 'promo1',
		'before_widget' => '<div id="promo1" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'Area 1 of 3',
	) );

	register_sidebar( array(
		'name'          => 'Center Column Area',
		'id'            => 'promo2',
		'before_widget' => '<div id="promo2" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'Area 2 of 3',
	) );

	register_sidebar( array(
		'name'          => 'Right Column Area',
		'id'            => 'promo3',
		'before_widget' => '<div id="promo3" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'Area 3 of 3',
	) );

}

add_action( 'widgets_init', 'promo_widgets_init' );
