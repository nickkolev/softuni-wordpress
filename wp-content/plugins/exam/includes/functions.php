<?php
// File for generic functions


/**
 * Custom Shortcode to show the title by ID
 *
 * @return void
 */
function show_post_title_by_id( $atts ) {

    $shortcode_atts = shortcode_atts(array(
            'id' => '',
            'option_1' => 'Option 1',
        ),
        $atts
    );

    $title = '';

    if ( ! empty( $shortcode_atts['id'] ) ) {
        $title = get_the_title( $shortcode_atts['id'] );
    }

    return $title;
}
add_shortcode( 'show_post_title', 'show_post_title_by_id' );

/**
 * Function that handles the AJAX call and add a dish to Favorite
 *
 * @return void
 */
function dishes_favorites() {

    var_dump( $_POST );
    die();

    if ( empty( $_POST['action'] ) ) {
        return;
    }

    $post_id = esc_attr( $_POST['post_id'] );

    $favorites_number = get_post_meta( $post_id, 'favorites', true );

    if ( empty( $favorites_number ) ) {
        $favorites_number = 0;
    }

    update_post_meta( $post_id, 'favorites', $favorites_number + 1 );
}

add_action( 'wp_ajax_nopriv_dishes_favorites', 'dishes_favorites' );
add_action( 'wp_ajax_dishes_favorites', 'dishes_favorites' );