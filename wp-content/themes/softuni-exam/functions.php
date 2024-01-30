<?php

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