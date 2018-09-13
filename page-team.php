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
			  			<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" title="<?php bloginfo('name') ?>" class="logo-head"> </a>
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

		<div>
	    	<img src="<?php bloginfo('template_url'); ?>/assets/img/Video-image-home.jpg" class="banner-img" alt="About a Chance Home Video">
	    </div>

	    <div class="container">
	      <div class="row">
	        <div class="col-md-4">
				<?php if(is_active_sidebar('box1')) : ?>
					<?php dynamic_sidebar('box1');?>
				<?php endif;?>
	        </div>
	        <div class="col-md-4">
				<?php if(is_active_sidebar('box2')) : ?>
					<?php dynamic_sidebar('box2');?>
				<?php endif;?>
	        </div>
	        <div class="col-md-4">
	        	<?php if(is_active_sidebar('box3')) : ?>
	        		<?php dynamic_sidebar('box3');?>
	            <?php endif;?>
	        </div>
	      </div>
	    </div>

	    <div class="team-home">
      <div class="container">
        <h2 class="team-txt-head">TEAM</h2>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <?php if(is_active_sidebar('box4')) : ?>
	        		<?php dynamic_sidebar('box4');?>
	        <?php endif;?>
	      </div>
          <div class="col-md-4 col-sm-4">
            <?php if(is_active_sidebar('box5')) : ?>
	        	<?php dynamic_sidebar('box5');?>
	        <?php endif;?>
          </div>
          <div class="col-md-4 col-sm-4">
            <?php if(is_active_sidebar('box6')) : ?>
	        	<?php dynamic_sidebar('box6');?>
	        <?php endif;?>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#"><h3 class="team-txt rev">Review full Team</h3></a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>