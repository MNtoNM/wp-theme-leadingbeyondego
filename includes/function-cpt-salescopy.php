<?php

// ======================================
// CUSTOM POST TYPE: Sales Page Copy
// ======================================

add_action( 'init', 'lbe_salespage_post_type', 0 );

function lbe_salespage_post_type() {

	$labels = array(
		'name'                => _x( 'Sales Copy', 'Post Type General Name', 'leading-beyond-ego' ),
		'singular_name'       => _x( 'Sales Copy', 'Post Type Singular Name', 'leading-beyond-ego' ),
		'menu_name'           => __( 'Sales Copy', 'leading-beyond-ego' ),
		'parent_item_colon'   => __( 'Parent Copy ', 'leading-beyond-ego' ),
		'all_items'           => __( 'All Sales Copy', 'leading-beyond-ego' ),
		'view_item'           => __( 'View Sales Copy Segment', 'leading-beyond-ego' ),
		'add_new_item'        => __( 'Add New Sales Copy Segment', 'leading-beyond-ego' ),
		'add_new'             => __( 'Add New Sales Copy Segment', 'leading-beyond-ego' ),
		'edit_item'           => __( 'Edit Sales Copy Segments', 'leading-beyond-ego' ),
		'update_item'         => __( 'Update Sales Copy Segments', 'leading-beyond-ego' ),
		'search_items'        => __( 'Search Sales Copy Segments', 'leading-beyond-ego' ),
		'not_found'           => __( 'Not Found', 'leading-beyond-ego' ),
		'not_found_in_trash'  => __( 'Not Found in Trash', 'leading-beyond-ego' ),
	);

	$args = array(
		'label'               => __( 'Sales Copy Segments', 'leading-beyond-ego' ),
		'description'         => __( 'Sales Copy Segments', 'leading-beyond-ego' ),
		'labels'              => $labels,
		'supports'            => array( 'editor', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
   		'menu_icon'         => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
	);

	register_post_type( 'salespagecopy', $args );

}

// =========================================
// Manage SalesPage Copy Admin Page Columns
// =========================================

function lbe_salespage_admin_columns($columns) {
  // unset($columns['title']);
  $columns = array(
    'label' => __('Label'),
    'headline' => __('Headline')
  );
  return $columns;
}

function my_column_init() {
  add_filter('manage_salespagecopy_posts_columns', 'lbe_salespage_admin_columns');
  add_filter('manage_salespagecopy_posts_columns', 'lbe_filter_posts_columns');
}

function lbe_filter_posts_columns( $columns ) {
  $columns['label'] = __( 'Label' );
  $columns['headline'] = __( 'Headline' );
  return $columns;
}

add_action('admin_init', 'my_column_init');

add_action('manage_salespagecopy_posts_custom_column', 'lbe_salespagecopy_column', 10, 2);
function lbe_salespagecopy_column($column, $post_id) {
  switch($column) {
    case 'label':
      // echo "label here";
      // echo $post_id;
      echo get_post_meta($post_id, 'internal_label', true);
      break;
    case 'headline':
      echo get_post_meta($post_id, 'headline', true);
      break;
  }
}
