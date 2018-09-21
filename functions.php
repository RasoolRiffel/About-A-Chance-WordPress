<?php 

function styling_resources(){

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );
	wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', 'all' );
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/js.js');
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






// // Our custom post type function
// function create_posttype() {
 
//     register_post_type( 'projects',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Projects' ),
//                 'singular_name' => __( 'Project' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'projects'),
//         )
//     );
// }
// // Hooking up our function to theme setup
// add_action( 'init', 'create_posttype' );


// /*
// * Creating a function to create our CPT
// */
 
// function custom_post_type() {
 
// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'Projects', 'Post Type General Name', 'twentythirteen' ),
//         'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentythirteen' ),
//         'menu_name'           => __( 'Projects', 'twentythirteen' ),
//         'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
//         'all_items'           => __( 'All Projects', 'twentythirteen' ),
//         'view_item'           => __( 'View Project', 'twentythirteen' ),
//         'add_new_item'        => __( 'Add New Project', 'twentythirteen' ),
//         'add_new'             => __( 'Add New', 'twentythirteen' ),
//         'edit_item'           => __( 'Edit Project', 'twentythirteen' ),
//         'update_item'         => __( 'Update Project', 'twentythirteen' ),
//         'search_items'        => __( 'Search Project', 'twentythirteen' ),
//         'not_found'           => __( 'Not Found', 'twentythirteen' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
//     );
     
// // Set other options for Custom Post Type
     
//     $args = array(
//         'label'               => __( 'projects', 'twentythirteen' ),
//         'description'         => __( 'Project news and reviews', 'twentythirteen' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         // You can associate this CPT with a taxonomy or custom taxonomy. 
//         'taxonomies'          => array( 'genres' ),
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */ 
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//     );
     
//     // Registering your Custom Post Type
//     register_post_type( 'projects', $args );
 
// }
 
// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not 
// * unnecessarily executed. 
// */
 
// add_action( 'init', 'custom_post_type', 0 );

function create_post_type() {
  register_post_type( 'acme_projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Projects' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
    )
  );
}
add_action( 'init', 'create_post_type' );

add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' ); 