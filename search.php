<?php 

get_header();?>
<div id="fb-root"></div>


<div class="container">

	<?php if (have_posts()): ?>

		<h1>Search results for: <?php the_search_query(); ?></h1>

	<?php while (have_posts()) : the_post();?>

	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<?php the_excerpt();?>
	<div class="banner-img">
    	<?php the_post_thumbnail(); ?>
    </div>


	<?php 
	endwhile;

	else: 
		echo "<p>No content found</p>";
	endif;?>

</div>
	
	 <hr>

<?php get_footer();

 ?>