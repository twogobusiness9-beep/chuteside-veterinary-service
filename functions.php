<?php
/**
 * Chuteside Veterinary Service theme functions.
 *
 * @package Chuteside
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function chuteside_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 64, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'chuteside' ) ) );
}
add_action( 'after_setup_theme', 'chuteside_setup' );

function chuteside_scripts() {
	wp_enqueue_style(
		'chuteside-fonts',
		'https://fonts.googleapis.com/css2?family=Bitter:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'chuteside-style', get_stylesheet_uri(), array( 'chuteside-fonts' ), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script(
		'chuteside-script',
		get_stylesheet_directory_uri() . '/assets/js/chuteside.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'chuteside_scripts' );

/**
 * VeterinaryCare schema for the homepage.
 */
function chuteside_schema() {
	if ( ! is_front_page() ) {
		return;
	}

	$schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'VeterinaryCare',
		'name'       => 'Chuteside Veterinary Service, PLLC',
		'legalName'  => 'Chuteside Veterinary Service, PLLC',
		'url'        => home_url( '/' ),
		'telephone'  => '+14062853923',
		'email'      => 'info@chutesidevet.com',
		'description'=> 'Large-animal veterinary care for cattle, horses, pigs and goats — on-farm and in-clinic, with 24-hour emergency service.',
		'address'    => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => '2520 Bench Road',
			'addressLocality' => 'Three Forks',
			'addressRegion'   => 'MT',
			'postalCode'      => '59752',
			'addressCountry'  => 'US',
		),
		'areaServed' => array( 'Gallatin County', 'Broadwater County', 'Jefferson County', 'Madison County' ),
		'openingHoursSpecification' => array(
			array(
				'@type'     => 'OpeningHoursSpecification',
				'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
				'opens'     => '08:00',
				'closes'    => '17:00',
			),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . "</script>\n";
}
add_action( 'wp_head', 'chuteside_schema' );

/**
 * Fallback menu until one is assigned under Appearance -> Menus.
 */
function chuteside_default_menu() {
	echo '<ul>';
	echo '<li><a href="#services">' . esc_html__( 'Services', 'chuteside' ) . '</a></li>';
	echo '<li><a href="#about">' . esc_html__( 'About', 'chuteside' ) . '</a></li>';
	echo '<li><a href="#patients">' . esc_html__( 'Patients', 'chuteside' ) . '</a></li>';
	echo '<li><a href="#contact">' . esc_html__( 'Contact', 'chuteside' ) . '</a></li>';
	echo '</ul>';
}
