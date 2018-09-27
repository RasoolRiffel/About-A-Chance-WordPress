<?php 

get_header();?>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
		  fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
</script>


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