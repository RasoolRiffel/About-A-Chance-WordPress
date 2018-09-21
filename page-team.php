<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
	    <meta charset="<?php bloginfo('charset');?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title><?php bloginfo('name'); ?></title>
		<?php wp_head();?>
	</head>
  </head>
  <body <?php body_class(); ?>>

  		<div class="container con-top">
      		<strong class="head-E">Email:</strong> info@fuegotacos.co.za <span class="header-icons pull-right"><a href=""><i class="fas fa-search header-icons"></i></a> <a href=""><i class="fab fa-instagram header-icons"></i></a> <a href=""><i class="fab fa-twitter-square header-icons"></i></a> <a href=""><i class="fab fa-facebook-square header-icons"></i></a> </span>
     	</div>
	  	<!-- site header -->
	  	<div class="container">
		  	<header class="site-header">
		  		<div class="row">
			  		<div class="col-md-4 logo-col">
			  			<a href="<?php echo get_option('home'); ?>"><img src="<?php the_field('company_logo');?>" title="<?php bloginfo('name') ?>" class="logo-head"> </a>
			  		</div>

			  		<nav class="site-nav col-md-6 nav-col">

			  			<?php 

			  			$args = array(
			  				'theme_location' => 'Primary',
			  				'menu_id' => 'menu',
			  			)

			  			?>

			  			<?php wp_nav_menu( $args );?>
			  		</nav>

			  		<div class="col-md-2 btn-col"><a href="#"><button type="button" class="btn btn-default btn-lg don-nav pull-right">DONATE</button></a></div>
		  		</div>

		  	</header>

		</div>

		<div class="banner-img">
	    	<?php the_post_thumbnail(); ?>
	    </div>

	 
    <div class="container">

        <?php 
			if (have_posts()): 
				while (have_posts()) : the_post();?>

				<h1><?php the_title();?></h1>
				<p class="about-txt"><?php the_content();?></p>

				<?php 
				endwhile;

				else: 
					echo "<p>No content found</p>";
				endif;?>				
        
	        <div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_1') ?>" class="team-img" id="myBtn">
				<h3 class="team-txt-pg"><?php the_field('image_1_text') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_2') ?>" class="team-img">
				<h3 class="team-txt-pg"><?php the_field('image_2_text') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_3') ?>" class="team-img">
				<h3 class="team-txt-pg"><?php the_field('image_3_text') ?></h3>
	          </div>          
	        </div>			

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4">
			  			<img src="<?php the_field('image_1_modal') ?>" class="team-img">
			  		</div>
			  		<div class="col-md-8">
			  			<h2><?php the_field('image_1_modal_heading') ?></h2>
			    		<p><?php the_field('image_1_modal_text') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12">
			  			<p><?php the_field('about_the_person_intro'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal 
				btn.onclick = function(){
				    modal.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
				    modal.style.display = "none";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				    if (event.target == modal) {
				        modal.style.display = "none";
				    }
				}
			</script>


		</div>

<?php get_footer(); ?>