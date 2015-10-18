<?php

/*
ENQUEUE SCRIPTS AND STYLES
*/

function scratch_theme_scripts() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/_js/site-behaviors.js',
		array( 'jquery' ),
		true
	);
}

add_action( 'wp_enqueue_scripts', 'scratch_theme_scripts' );

/*
ADD LOGO UPLOAD CAPABILITY VIA WP THEME CUSTOMIZER
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

/*
ADD WP MENU SUPPORT
*/

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

/*
ADD WP SIDEBAR AND WIDGETIZED AREA SUPPORT
*/

function scratch_theme_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left Home Page Area',
		'id'            => 'promo1',
		'before_widget' => '<div id="promo1" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'The first of three columns on the home page above the footer.',
	) );

        register_sidebar( array(
		'name'          => 'Center Home Page Area',
		'id'            => 'promo2',
		'before_widget' => '<div id="promo2" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'The second of three columns on the home page above the footer.',
	) );

        register_sidebar( array(
		'name'          => 'Right Home Page Area',
		'id'            => 'promo3',
		'before_widget' => '<div id="promo3" class="col span_4_of_12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'	=> 'The third of three columns on the home page above the footer.',
	) );

    	register_sidebar( array(
		'name'          => 'Right Header Area',
		'id'            => 'right_header',
		'before_widget' => '<address>',
		'after_widget'  => '</address>',
		'before_title'  => '',
		'after_title'   => '',
		'description'	=> 'The right side area of the header used for displaying contact information.',
	) );

}

add_action( 'widgets_init', 'scratch_theme_widgets_init' );

/*
REMOVE 'HOWDY' FROM THE ADMIN-BAR
*/

add_filter('admin_bar_menu','change_howdy_text_toolbar');
function change_howdy_text_toolbar($wp_admin_bar)
{
	$getgreetings = $wp_admin_bar->get_node('my-account');
	$rpctitle = str_replace('Howdy,','',$getgreetings->title);
	$wp_admin_bar->add_node(array("id"=>"my-account","title"=>$rpctitle));
}

/*
REMOVE WP LOGO FROM THE ADMIN-BAR
*/

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
