<?php 

/*Template Name: Gallery Page Test*/

get_header();	 ?>
	
	<span class="head-lne">
		<hr>
	</span>
	

    <div class="container" <?php post_class(); ?>>

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

<?php get_footer(); ?>