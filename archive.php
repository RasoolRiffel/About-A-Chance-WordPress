<?php
/* 
Template Name: Archives
*/
?>
<?php 

get_header();?>

<div class="container">

<?php 
	if (have_posts()): 
		while (have_posts()) : the_post();?>

		<h1><?php the_title();?></h1>
		<?php the_content();?>

		<?php 
		endwhile;

		else: 
			echo "<p>No content found</p>";
		endif;?>
</div>

	 <hr>
<?php get_footer();

 ?>