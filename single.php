<?php get_header();?>

<div class="container">
<div class="row">
	<div class="">
		<?php 
			if (have_posts()): 
				while (have_posts()) : the_post();?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title(); ?>
					<?php if(has_post_thumbnail());?>
						<div class="pull-right"><?php the_post_thumbnail()?></div>
					

					<small><?php the_category(); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
					<?php the_content(); ?>

					<hr>

					<div class="row">
						<div class="pull-left"><?php previous_post_link();?></div>
						<div class="pull-right"><?php next_post_link();?></div>
					</div>
				</article>


				<?php 
				endwhile;

				else: 
					echo "<p>No content found</p>";
			endif;?>

	</div>
</div>
</div>





<?php get_footer();?>