<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
	    <meta charset="<?php bloginfo('charset');?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
		<?php wp_head();?>
	</head>
  </head>
  <body <?php body_class(); ?>>

  		<div class="container con-top">
      		<strong class="head-E">Email:</strong> <?php the_field('email_address'); ?> 
      		<div id="foo"  style="display: none;"><?php get_search_form(); ?></div>
      		<span class="header-icons pull-right">
      			<a href="#" onclick="toggle_visibility('foo');"><i class="fas fa-search header-icons"></i></a> 

      			<a href=""><i class="fab fa-instagram header-icons"></i></a> 
      			<a href=""><i class="fab fa-twitter-square header-icons"></i></a> 
      			<a href=""><i class="fab fa-facebook-square header-icons"></i></a> 
      		</span>
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
				<?php the_content();?>

				<?php 
				endwhile;

				else: 
					echo "<p>No content found</p>";
				endif;?>				
        <div class="gal-imgs">
        	<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_1') ?>" class="team-img button" data-modal="modalOne">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_2') ?>" class="team-img button" data-modal="modalTwo">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_3') ?>" class="team-img button" data-modal="modalThree">
	          </div>          
	        </div>			

			<!-- The Modal -->
			<div id="modalOne" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_1') ?>" class="team-imgs-gal">
		  			<p><?php the_field('modal_text_1'); ?></p>
			  	</div>			  		    
			  </div>


			<div id="modalTwo" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_2') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>


			<div id="modalThree" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_3') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>
		

			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_4') ?>" class="team-img button" data-modal="modalFour">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_5') ?>" class="team-img button" data-modal="modalFive">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_6') ?>" class="team-img button" data-modal="modalSix">
	          </div>          
	        </div>


			<div id="modalFour"class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_4') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>


			<div id="modalFive"class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_5') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>


			<div id="modalSix"class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_6') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>


			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_7') ?>" class="team-img button" data-modal="modalSeven">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_8') ?>" class="team-img button" data-modal="modalEight">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_9') ?>" class="team-img button" data-modal="modalNine">
	          </div>          
	        </div>

			<div id="modalSeven"class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_7') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>

			<div id="modalEight" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_8') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>

			<div id="modalNine" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_9') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>

			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_10') ?>" class="team-img button" data-modal="modalTen">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_11') ?>" class="team-img button" data-modal="modalEleven">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_12') ?>" class="team-img button" data-modal="modalTwelve">
	          </div>          
	        </div>

			<div id="modalTen" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_10') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>

			<div id="modalEleven" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_11') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>

			<div id="modalTwelve" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<span class="close close-modal"><i class="fas fa-times "></i></span>

		  			<img src="<?php the_field('image_12') ?>" class="team-imgs-gal">	
		  			<div></div>
			  	</div>			  		    
			  </div>
	        </div>

		</div>

		<hr>

<?php get_footer(); ?>