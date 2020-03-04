<?php /*
   Plugin Name: samsmusic
   Plugin URI: https://www.genetechsolutions.com/
   description:A plugin to create samsmusic
   Version: 1.0
   Author: symabatool */


   // Register Custom samsmusic
function samsmusic_post_type() {

	$labels = array(
		'name'                  => _x( 'samsmusic', 'samsmusic General Name', 'samsmusic' ),
		'singular_name'         => _x( 'samsmusic', 'samsmusic Singular Name', 'samsmusic' ),
		'menu_name'             => __( 'samsmusics', 'samsmusic' ),
		'name_admin_bar'        => __( 'samsmusic', 'samsmusic' ),
		'archives'              => __( 'Item Archives', 'samsmusic' ),
		'attributes'            => __( 'Item Attributes', 'samsmusic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'samsmusic' ),
		'all_items'             => __( 'All Items', 'samsmusic' ),
		'add_new_item'          => __( 'Add New Item', 'samsmusic' ),
		'add_new'               => __( 'Add New', 'samsmusic' ),
		'new_item'              => __( 'New Item', 'samsmusic' ),
		'edit_item'             => __( 'Edit Item', 'samsmusic' ),
		'update_item'           => __( 'Update Item', 'samsmusic' ),
		'view_item'             => __( 'View Item', 'samsmusic' ),
		'view_items'            => __( 'View Items', 'samsmusic' ),
		'search_items'          => __( 'Search Item', 'samsmusic' ),
		'not_found'             => __( 'Not found', 'samsmusic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'samsmusic' ),
		'featured_image'        => __( 'Featured Image', 'samsmusic' ),
		'set_featured_image'    => __( 'Set featured image', 'samsmusic' ),
		'remove_featured_image' => __( 'Remove featured image', 'samsmusic' ),
		'use_featured_image'    => __( 'Use as featured image', 'samsmusic' ),
		'insert_into_item'      => __( 'Insert into item', 'samsmusic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'samsmusic' ),
		'items_list'            => __( 'Items list', 'samsmusic' ),
		'items_list_navigation' => __( 'Items list navigation', 'samsmusic' ),
		'filter_items_list'     => __( 'Filter items list', 'samsmusic' ),
	);
	$args = array(
		'label'                 => __( 'samsmusic', 'samsmusic' ),
		'description'           => __( 'samsmusic Description', 'samsmusic' ),
		'labels'                => $labels,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        "rewrite"               => [ "slug" => "samsmusic"],
		"query_var"             => true,
		"supports"              => [ "title", "editor", "thumbnail", "revisions", "author" ],
	);
	register_post_type( 'samsmusic', $args );

}
add_action( 'init', 'samsmusic_post_type');
?>
   