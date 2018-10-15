<?php
/*
Template Name: Archives
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
		<span class="read-more-a">
			<?php echo get_the_excerpt();?>
			<a href="<?php the_permalink(); ?>" >READ MORE</a>
		</span>
		
		<?php
			if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
			   echo '<div class="post-item-divider"><hr></div>';
			}
		?>
		
		
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