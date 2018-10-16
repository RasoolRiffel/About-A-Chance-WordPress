<?php get_header();?>

<hr>

<div class="container">

	<?php 
		if (have_posts()): 
			while (have_posts()) : the_post();?>

				<h1><?php the_title(); ?></h1>

				<div class="about-txt">
					<?php the_content(); ?>
				</div>
				
			<?php 
			endwhile;

			else: 
				echo "<p>No content found</p>";
		endif;
	?>
</div>

<hr>


<?php get_footer();?>