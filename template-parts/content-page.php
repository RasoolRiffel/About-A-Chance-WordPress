<?php 

/* 

Template Name: CustomPageT1

 */

$args = array(
'post_type' => array( 'page' ),
'posts_per_page' => 10,
); 
// The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<h3>'. get_the_title() . '</h3>';
        the_excerpt();
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}