<?php get_header();?>

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

        <h2 class="team-txt-head">TEAM</h2>
        
	        <div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_4_image') ?>" class="team-imgs">
				<h3 class="team-txt"><?php the_field('option_4_title') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_5_image') ?>" class="team-imgs">
				<h3 class="team-txt"><?php the_field('option_5_title') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('option_6_image') ?>" class="team-imgs">
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