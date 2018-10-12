<?php
/*
Template Name: Archives Projects
*/

get_header();
?>


<div class="container">

	<div class="about-txt">

		<h1>PROJECTS</h1>

		<?php if (have_posts()): 
		while (have_posts()) : the_post();?>
		

		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<a href="<?php the_permalink();?>"><div class="banner-img-arc-prct">
			<?php if(has_post_thumbnail() ):
				the_post_thumbnail();	
			endif;
			  ?>
			</div></a>
		<?php the_excerpt();?>
			
		<?php 
		endwhile;

		else: 
			echo "<p>No content found</p>";
		endif;?>
	</div>
</div>

<hr>

<?php get_footer();

 ?>