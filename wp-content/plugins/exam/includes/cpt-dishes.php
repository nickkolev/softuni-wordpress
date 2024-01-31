<?php

if ( ! class_exists( 'Su_Dishes' ) ) :

 /**
 * This is our simple Dishes Class for our custom functionality
 */
class Su_Dishes {

	private $ctp_name = '';

	public function __construct() {
		// Register the CPT and taxonomies
		add_action( 'init', array( $this, 'dishes_cpt' ) );
		add_action( 'init', array( $this, 'dish_category_taxonomy' ) );

		// Register Metaboxes
		add_action( 'add_meta_boxes', array( $this, 'dish_register_meta_boxes' ) );

		// Save Actions
		add_action( 'save_post', array( $this, 'dishes_meta_save' ) );
	}

    /**
     * Register my Dishes Custom Post Type
     * 
     * @return void
     */
    public function dishes_cpt() {
        $labels = array(
            'name'                  => _x( 'Dishes', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Dish', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Dishes', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'Dish', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'Add New Dish', 'textdomain' ),
            'new_item'              => __( 'New Dish', 'textdomain' ),
            'edit_item'             => __( 'Edit Dish', 'textdomain' ),
            'view_item'             => __( 'View Dish', 'textdomain' ),
            'all_items'             => __( 'All Dishes', 'textdomain' ),
            // 'search_items'          => __( 'Search Dishes', 'textdomain' ),
            // 'parent_item_colon'     => __( 'Parent Dishes:', 'textdomain' ),
            // 'not_found'             => __( 'No Dishes found.', 'textdomain' ),
            // 'not_found_in_trash'    => __( 'No Dishes found in Trash.', 'textdomain' ),
            // 'featured_image'        => _x( 'Dish Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            // 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            // 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            // 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            // 'archives'              => _x( 'Dish archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            // 'insert_into_item'      => _x( 'Insert into Dish', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            // 'uploaded_to_this_item' => _x( 'Uploaded to this Dish', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            // 'filter_items_list'     => _x( 'Filter Dishes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            // 'items_list_navigation' => _x( 'Dishes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            // 'items_list'            => _x( 'Dishes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),
            //'show_in_rest'       => true,
        );

    register_post_type( 'dish', $args );
    }

    /**
     * Register My Category taxonomy for the Dishes CPT
     * 
     * @return void
     */
    public function dish_category_taxonomy () {
        $labels = array(
            'name' => 'Categories',
            'singular_name' => 'Category'
        );

        $args = array(
            'labels'       => $labels,
            'show_in_rest' => true,
            'hierarchical' => true,
        );
        register_taxonomy( 'dish-category', 'dish', $args );
    }

    /**
     * Register meta box(es).
     * 
     * @return void
     */
    public function dish_register_meta_boxes() {
        add_meta_box( 'featured', __( 'Is Featured?', 'softuni' ), array( $this, 'dishes_featured_metabox_callback' ), 'dish', 'side' );
    }

    /**
     * Callback function for the featured metabox
     * 
     * @param int $post_id The ID of the current post.
     * @return void
     */
    public function dishes_featured_metabox_callback( $post_id ) {
        $checked = get_post_meta( $post_id->ID, 'is_featured', true );
        ?>
        <div>
            <label for='is-featured'>Is Featured?</label>
            <input id="is-featured" name="isfeatured" type="checkbox" value="1" <?php checked( $checked, 1, true ); ?>>
        </div>
        <?php
    }

    /**
     * Save my dishes post meta
     * 
     * @param int $post_id The ID of the current post.
     * @return void
     */
    public function dishes_meta_save ( $post_id ) {

        if (empty( $post_id ) ) {
            return;
        }

        $featured = '';

        if ( isset( $_POST['isfeatured'] ) ) {
            $featured = esc_attr( $_POST['isfeatured'] );
        }

        update_post_meta( $post_id, 'is_featured', $featured );
    }
}
$dishes_instance = new Su_Dishes();
endif;