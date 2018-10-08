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

add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails' ); 

/* Custom Post Types*/
function create_posttype() {
  register_post_type( 'wpll_project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields', 'comments'),
      'rewrite' => array('slug' => 'projects'),
    )
  );
  $wpll_project = get_posts(array(
                            'post_type' => 'Projects',
                            'posts_per_page' => 10,
                            'nopaging' => true,
                            'meta_query' => array(
                                array(
                                    'key' => 'business_type',
                                    'value' => '"' . get_search_query()  . '"',
                                    'compare' => 'LIKE'
                                )
                            )
                        ));
}
add_action( 'init', 'create_posttype' );

// Modify comments header text in comments
add_filter( 'genesis_title_comments', 'child_title_comments');
function child_title_comments() {
    return __(comments_number( '<h3>No Responses</h3>', '<h3>1 Response</h3>', '<h3>% Responses...</h3>' ), 'genesis');
}
 
// Unset URL from comment form
function crunchify_move_comment_form_below( $fields ) { 
    $comment_field = $fields['comment']; 
    unset( $fields['comment'] ); 
    $fields['comment'] = $comment_field; 
    return $fields; 
} 
add_filter( 'comment_form_fields', 'crunchify_move_comment_form_below' ); 
 
// Add placeholder for Name and Email
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" name="author" type="text" class="" value="' .esc_attr( $commenter['comment_author'] ) . 
    			'" size="30"' . $aria_req . ' />'.
                '<label for="author">' . __( 'Your Name' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' )  .
                '</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" name="email" type="text" class="" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  .
                '<label for="email">' . __( 'Your Email' ) . '</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) 
                 .
                '</p>';    
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');








function ea_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="Comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'ea_comment_textarea_placeholder' );
/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Name*"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email*"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>

        <?php comment_text(); ?>

        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}