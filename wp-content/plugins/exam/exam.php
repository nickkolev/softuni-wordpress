<?php
/**
* Plugin Name: SoftUni Exam Plugin
* Plugin URI: https://softuni.bg
* Description: My plugin for the exam
* Version: 1.0.0
* Requires at least: 5.0
* Requires PHP: 8.0
* Author: SoftUni
* Author URI: https://softuni.bg/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/my-plugin/
* Text Domain: softuni
* Domain Path: /languages
*/

if ( ! defined( 'DISHES_INCLUDE' ) ) {
    define( 'DISHES_INCLUDE', plugin_dir_path( __FILE__ ) . 'includes'  );
}

require DISHES_INCLUDE . '/functions.php';
require DISHES_INCLUDE . '/cpt-dishes.php';

/**
 * Enqueue all of the assets for my plugin
 *
 * @return void
 */
function su_dishes_enqueue() {
    
    wp_enqueue_script( 'dishes-script', plugins_url( 'assets/js/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );

    wp_localize_script( 'dishes-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'su_dishes_enqueue' );