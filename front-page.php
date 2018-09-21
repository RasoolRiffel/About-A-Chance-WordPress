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
	      <div class="row">
	        <div class="col-md-4">
				<a href="<?php the_field('option_1_image_link'); ?>"><img src="<?php the_field('option_1_image') ?>" class="team-img-wid"></a>
				<h1><?php the_field('option_1_title') ?></h1>
				<p class="home-col"><?php the_field('option_1_description') ?></p>
	        </div>
	        <div class="col-md-4">
				<a href="<?php the_field('option_2_image_link'); ?>"><img src="<?php the_field('option_2_image') ?>" class="team-img-wid"></a>
				<h1><?php the_field('option_2_title') ?></h1>
				<p class="home-col"><?php the_field('option_2_description') ?></p>
	        </div>
	        <div class="col-md-4">
	        	<a href="<?php the_field('option_3_image_link'); ?>"><img src="<?php the_field('option_3_image') ?>" class="team-img-wid"></a>
				<h1><?php the_field('option_3_title') ?></h1>
				<p class="home-col"><?php the_field('option_3_description') ?></p>
	        </div>
	      </div>
	    </div>

	    <div class="team-home">
      <div class="container">


      	<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }

</script>








        <h2 class="team-txt-head">TEAM</h2>
        
	        <div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_4_image') ?>" class="team-img">
				<h3 class="team-txt"><?php the_field('option_4_title') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_5_image') ?>" class="team-img">
				<h3 class="team-txt"><?php the_field('option_5_title') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_6_image') ?>" class="team-img">
				<h3 class="team-txt"><?php the_field('option_6_title') ?></h3>
	          </div>          
	        </div>
	   
        <div class="row">
          <div class="col-md-12">
            <a href="<?php the_field('the_review_link'); ?>"><h3 class="team-txt text-center rev"><?php the_field('the_review_text'); ?></h3></a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>