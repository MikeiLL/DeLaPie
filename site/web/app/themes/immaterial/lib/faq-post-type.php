<?php

namespace Roots\Sage\FAQ;

use Roots\Sage\Extras;

//* BOF FAQ POST TYPE
// Our custom post type function
function create_faq_posttype() {

	register_post_type( 'FAQ',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'FAQs' ),
				'singular_name' => __( 'FAQ' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'FAQ'),
			'menu_icon'   => 'dashicons-book',
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init',  __NAMESPACE__ . '\\create_faq_posttype' );

/*
* Create FAQ Post Type
*/

function faq_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'FAQ', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'FAQ', 'sage' ),
		'parent_item_colon'   => __( 'Parent FAQ', 'sage' ),
		'all_items'           => __( 'All FAQs', 'sage' ),
		'view_item'           => __( 'View FAQ', 'sage' ),
		'add_new_item'        => __( 'Add New FAQ', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'edit_item'           => __( 'Edit FAQ', 'sage' ),
		'update_item'         => __( 'Update FAQ', 'sage' ),
		'search_items'        => __( 'Search FAQ', 'sage' ),
		'not_found'           => __( 'Not Found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'FAQ', 'sage' ),
		'description'         => __( 'New FAQs to showcase', 'sage' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'FAQ', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init',  __NAMESPACE__ . '\\create_faq_posttype' );

//EOF FAQ POST TYPE

add_action( 'pre_get_posts', __NAMESPACE__ . '\\add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'FAQ' ) );
	return $query;
}

//*EOF CUSTOM POST TYPES
?>
