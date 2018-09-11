<?php 

function styling_resources(){

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );
	wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/media-queries.css');
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', 'all' );
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
}

add_action('wp_enqueue_scripts', 'styling_resources');

//Navigation Menus
register_nav_menus(array(
	'Primary' => __('Primary Menu'),
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
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Box 5',
		'id' => 'box5',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Box 6',
		'id' => 'box6',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'afte_title' => '</h2>',
	));
}

add_action('widgets_init', 'wpb_init_widgets');