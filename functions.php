<?php 

function styling_resources(){

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );
	wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', 'all' );
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/js.js', array('jquery'), '3.3.7', true);
}

add_action('wp_enqueue_scripts', 'styling_resources');

//Navigation Menus
register_nav_menus(array(
	'Primary' => __('Primary Menu'),
	'Secondary' => __('Footer Menu')
));

// Widgets
function wpb_init_widgets($id){
	register_sidebar(array(
		'name' => 'Box 1',
		'id' => 'box1',
		'before_widget' => '<div class="home-col">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'afte_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => 'Box 2',
		'id' => 'box2',
		'before_widget' => '<div class="home-col">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'afte_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => 'Box 3',
		'id' => 'box3',
		'before_widget' => '<div class="home-col">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'afte_title' => '</h1>',
	));

	register_sidebar(array(
		'name' => 'Box 4',
		'id' => 'box4',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Box 5',
		'id' => 'box5',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Box 6',
		'id' => 'box6',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));
}

add_action('widgets_init', 'wpb_init_widgets');


// add arrows to menu parent 
function oenology_add_menu_parent_class( $items ) {
 
 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }
 
 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }
 
 return $items;
}
add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );






/* Custom Post Types */

function awesome_custom_post_type(){
	$labels = array(
		'name'			=> 'Projects',
		'singular_name'	=> 'Project',
		'add_new' 		=> 'Add Item',
		'all_items'		=> 'All Items',
		'edit_item'		=>	'Edit Item',
		'new_item'		=>	'New Item',
		'view_item'		=>	'View Item',
		'search_item'	=>	'Search Projects',
		'not_found'		=>	'No Projects Found',
		'not_found_in_trash'	=> 'No items found in trash',
		'parent_item_colon'		=> 'Parent Item'	
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false,
	);
	register_post_type('projects',$args);
}

add_action('init', 'awesome_custom_post_type');


add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' ); 