<?php

add_theme_support( 'post-thumbnails' );

/**
 * Never worry about cache again!
 */
function softuni_assets ( $hook  ) {
	
    $args = array( 
        'in_footer' => true,
        'strategy' => 'defer',
    );

    // java script
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/vendor/bootstrap-4.1.3.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'gmaps-min', get_template_directory_uri() . '/assets/js/vendor/gmaps.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/vendor/jquery-2.2.4.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'jquery-datetimepicker', get_template_directory_uri() . '/assets/js/vendor/jquery.datetimepicker.full.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'jquery-nice-select', get_template_directory_uri() . '/assets/js/vendor/jquery.nice-select.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/vendor/owl-carousel.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array(), '1.0.0', $args );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', $args );

    // css
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', false, filemtime( get_template_directory() . '/assets/css/style.css' ) );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl-carousel.min.css', false, '1.0.0' );
	wp_enqueue_style( 'nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css', false, '1.0.0' );
	wp_enqueue_style( 'jquery-datetimepicker-css', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css', false, '1.0.0' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome-4.7.0.min.css', false, '1.0.0' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap-4.1.3.min.css', false, '1.0.0' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate-3.7.0.css', false, '1.0.0' );

}
add_action('wp_enqueue_scripts', 'softuni_assets');

 /**
 * Register my navigation menus
 *
 * @return void
 */
function softuni_register_nav_menus() {
	register_nav_menus(
		array(
			'primary_menu'     => __( 'Primary Menu', 'softuni' ),
			'contact_us'       => __( 'Contact Us', 'softuni' ),
			'important_links'    => __( 'Important Links', 'softuni' ),
			'opening_hours'    => __( 'Opening Hours', 'softuni' ),
		)
	);
}

add_action( 'after_setup_theme', 'softuni_register_nav_menus' );

 /**
 * Sidebars
 *
 * @return void
 */
function softuni_sidebars() {
/* Register the 'primary' sidebar. */
	register_sidebar( array (
		'id' => 'footer-1',
		'name' => __( 'Footer 01' ),
		'description' => __( 'A short description of the sidebar.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array (
		'id' => 'footer-2',
		'name' => __( 'Footer 02' ),
		'description' => __( 'A short description of the sidebar.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array (
		'id' => 'footer-3',
		'name' => __( 'Footer 03' ),
		'description' => __( 'A short description of the sidebar.' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'softuni_sidebars' );
	