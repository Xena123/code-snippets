<?
/*
  Post Types
**/


// Change Post title to Insights
function fl_change_post_menu_text() {
	global $menu;
	global $submenu;
	// Change menu item
	$menu[5][0] = 'Insights';
	// Change post submenu
	$submenu['edit.php'][5][0] = 'Insights';
	$submenu['edit.php'][10][0] = 'Add Insight';
}
add_action( 'admin_menu', 'fl_change_post_menu_text' );

function fl_change_post_type_labels() {
  global $wp_post_types;
  $postLabels = $wp_post_types['post']->labels;
  $postLabels->name = 'Insights';
  $postLabels->singular_name = 'Insight';
  $postLabels->add_new = 'Add Insight';
  $postLabels->add_new_item = 'Add Insight';
  $postLabels->edit_item = 'Edit Insight';
  $postLabels->new_item = 'Insight';
  $postLabels->view_item = 'View Insight';
}
add_action( 'init', 'fl_change_post_type_labels' );


/*
  Fact Sheets
**/

// Register Fact Sheet Post Type
function fact_sheet() {

	$labels = array(
		'name'                  => _x( 'Fact Sheets', 'Post Type General Name', 'fanatic' ),
		'singular_name'         => _x( 'Fact Sheet', 'Post Type Singular Name', 'fanatic' ),
		'menu_name'             => __( 'Fact Sheets', 'fanatic' ),
		'name_admin_bar'        => __( 'Fact Sheets', 'fanatic' ),
		'archives'              => __( 'Item Archives', 'fanatic' ),
		'attributes'            => __( 'Item Attributes', 'fanatic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fanatic' ),
		'all_items'             => __( 'All Items', 'fanatic' ),
		'add_new_item'          => __( 'Add New Item', 'fanatic' ),
		'add_new'               => __( 'Add New', 'fanatic' ),
		'new_item'              => __( 'New Item', 'fanatic' ),
		'edit_item'             => __( 'Edit Item', 'fanatic' ),
		'update_item'           => __( 'Update Item', 'fanatic' ),
		'view_item'             => __( 'View Item', 'fanatic' ),
		'view_items'            => __( 'View Items', 'fanatic' ),
		'search_items'          => __( 'Search Item', 'fanatic' ),
		'not_found'             => __( 'Not found', 'fanatic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fanatic' ),
		'featured_image'        => __( 'Featured Image', 'fanatic' ),
		'set_featured_image'    => __( 'Set featured image', 'fanatic' ),
		'remove_featured_image' => __( 'Remove featured image', 'fanatic' ),
		'use_featured_image'    => __( 'Use as featured image', 'fanatic' ),
		'insert_into_item'      => __( 'Insert into item', 'fanatic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fanatic' ),
		'items_list'            => __( 'Items list', 'fanatic' ),
		'items_list_navigation' => __( 'Items list navigation', 'fanatic' ),
		'filter_items_list'     => __( 'Filter items list', 'fanatic' ),
	);
	$args = array(
		'label'                 => __( 'Fact Sheets', 'fanatic' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-analytics',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite'            => array( 'slug' => 'fact_sheet', 'with_front' => false ),
	);
	register_post_type( 'fact_sheet', $args );
}
add_action( 'init', 'fact_sheet', 0 );



// Register Press Release Post Type
function fl_press_release() {

	$labels = array(
		'name'                  => _x( 'Press Releases', 'Post Type General Name', 'fanatic' ),
		'singular_name'         => _x( 'Press Release', 'Post Type Singular Name', 'fanatic' ),
		'menu_name'             => __( 'Press Releases', 'fanatic' ),
		'name_admin_bar'        => __( 'Press Releases', 'fanatic' ),
		'archives'              => __( 'Item Archives', 'fanatic' ),
		'attributes'            => __( 'Item Attributes', 'fanatic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fanatic' ),
		'all_items'             => __( 'All Items', 'fanatic' ),
		'add_new_item'          => __( 'Add New Item', 'fanatic' ),
		'add_new'               => __( 'Add New', 'fanatic' ),
		'new_item'              => __( 'New Item', 'fanatic' ),
		'edit_item'             => __( 'Edit Item', 'fanatic' ),
		'update_item'           => __( 'Update Item', 'fanatic' ),
		'view_item'             => __( 'View Item', 'fanatic' ),
		'view_items'            => __( 'View Items', 'fanatic' ),
		'search_items'          => __( 'Search Item', 'fanatic' ),
		'not_found'             => __( 'Not found', 'fanatic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fanatic' ),
		'featured_image'        => __( 'Featured Image', 'fanatic' ),
		'set_featured_image'    => __( 'Set featured image', 'fanatic' ),
		'remove_featured_image' => __( 'Remove featured image', 'fanatic' ),
		'use_featured_image'    => __( 'Use as featured image', 'fanatic' ),
		'insert_into_item'      => __( 'Insert into item', 'fanatic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fanatic' ),
		'items_list'            => __( 'Items list', 'fanatic' ),
		'items_list_navigation' => __( 'Items list navigation', 'fanatic' ),
		'filter_items_list'     => __( 'Filter items list', 'fanatic' ),
	);
	$args = array(
		'label'                 => __( 'Press Releases', 'fanatic' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite'            => array( 'slug' => 'press-releases' , 'with_front' => false ),
	);
	register_post_type( 'press_release', $args );
}
add_action( 'init', 'fl_press_release', 0 );


// Register Job Post Type
function fl_jobs() {

	$labels = array(
		'name'                  => _x( 'Careers', 'Post Type General Name', 'fanatic' ),
		'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'fanatic' ),
		'menu_name'             => __( 'Careers', 'fanatic' ),
		'name_admin_bar'        => __( 'Careers', 'fanatic' ),
		'archives'              => __( 'Item Archives', 'fanatic' ),
		'attributes'            => __( 'Item Attributes', 'fanatic' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fanatic' ),
		'all_items'             => __( 'All Items', 'fanatic' ),
		'add_new_item'          => __( 'Add New Item', 'fanatic' ),
		'add_new'               => __( 'Add New', 'fanatic' ),
		'new_item'              => __( 'New Item', 'fanatic' ),
		'edit_item'             => __( 'Edit Item', 'fanatic' ),
		'update_item'           => __( 'Update Item', 'fanatic' ),
		'view_item'             => __( 'View Item', 'fanatic' ),
		'view_items'            => __( 'View Items', 'fanatic' ),
		'search_items'          => __( 'Search Item', 'fanatic' ),
		'not_found'             => __( 'Not found', 'fanatic' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fanatic' ),
		'featured_image'        => __( 'Featured Image', 'fanatic' ),
		'set_featured_image'    => __( 'Set featured image', 'fanatic' ),
		'remove_featured_image' => __( 'Remove featured image', 'fanatic' ),
		'use_featured_image'    => __( 'Use as featured image', 'fanatic' ),
		'insert_into_item'      => __( 'Insert into item', 'fanatic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fanatic' ),
		'items_list'            => __( 'Items list', 'fanatic' ),
		'items_list_navigation' => __( 'Items list navigation', 'fanatic' ),
		'filter_items_list'     => __( 'Filter items list', 'fanatic' ),
	);
	$args = array(
		'label'                 => __( 'Careers', 'fanatic' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite'            => array( 'slug' => 'career', 'with_front' => false ),
	);
	register_post_type( 'careers', $args );
}
add_action( 'init', 'fl_jobs', 0 );
