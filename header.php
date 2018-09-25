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
			  	
			  		<span class="col-md-1 menu-btn"><i class="fas fa-bars"></i></span>

			  		<div class="col-md-1 btn-col  pull-right">

			  			<a href="#">
			  				<button type="button" class="btn btn-default btn-lg don-nav">DONATE</button>
			  			</a>
			  		</div>

			  		

		  		</div>

		  	</header>

		</div>

		<div class="banner-img">
			<?php the_post_thumbnail(); ?>
		</div>