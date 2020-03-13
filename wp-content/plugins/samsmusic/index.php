<?php /*
   Plugin Name: samsmusic
   Plugin URI: https://www.genetechsolutions.com/
   description:A plugin to create samsmusic
   Version: 1.0
   Author: symabatool */


   // Register Custom samsmusic
function samsmusic_post_type() {

	$labels = array(
		'name'                  => _x( 'samsmusics', 'samsmusic General Name', 'samsmusic' ),
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

  
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_singers_taxonomy');
 
function create_singers_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Singers', 'taxonomy general name' ),
    'singular_name' => _x( 'Singer', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Singers' ),
    'all_items' => __( 'All Singers' ),
    'parent_item' => __( 'Parent Singer' ),
    'parent_item_colon' => __( 'Parent Singer:' ),
    'edit_item' => __( 'Edit Singer' ), 
    'update_item' => __( 'Update Singer' ),
    'add_new_item' => __( 'Add New Singer' ),
    'new_item_name' => __( 'New Singer Name' ),
    'menu_name' => __( 'Singers' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('singers',array('samsmusic'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'singers' ),
  ));
  
 
}
function team_shortcode_ss($atts){

    $atts = shortcode_atts(
        array(
            'id'  => false,
        ),
        $atts,
        'team_shortcode_ss'
    );
	ob_start();
    $query = new WP_Query( array(
        'post_type' => 'samsmusic',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'orderby' => 'date',
    ) );
	
	$count = $query->post_count;
	
    if ( $query->have_posts() ) { ?>
       <ul class="team-members-list">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li class="team-list">
					<div class="image-container">
                  		  <?php echo get_the_post_thumbnail();?>
					</div>
                    <h3> <?php the_title();?></h3>
                    <p><?php the_content();?></p>
                </li>     
            
            <?php $class == 'left' ? $class = 'right' : $class = 'left';$i++;?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    </ul>
    <?php
	$data = ob_get_clean();
    return $data;
	}
}
 
add_shortcode('team-timeline_ss','team_shortcode_ss');
   ?>