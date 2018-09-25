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


<?php 
	if (have_posts()): 
		while (have_posts()) : the_post();?>

		<h1><?php the_title();?></h1>
		<div class="about-txt"><?php the_content();?></div>

		<?php 
		endwhile;

		else: 
			echo "<p>No content found</p>";
		endif;?>
</div>
	
	 <hr>

<?php get_footer();

 ?>