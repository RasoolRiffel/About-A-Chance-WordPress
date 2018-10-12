<?php 

/*Template Name: Contact Page*/

get_header();?>

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
    endif;
    ?>

        <div class="con-form-one about-txt">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <p><strong class="head-E">EMAIL:</strong><br> <?php the_field('email_address') ?></p>
          <p><strong class="head-E">PHONE:</strong><br><?php the_field('phone_number'); ?></p>
          <div class="con-txt"><strong class="head-E">ADDRESS:</strong><br> <?php the_field('location_text') ?></div>
            </div>
            <div class="col-md-6 col-sm-12 con-form-txt-plchldr">
             
                <?php the_field('contact_form'); ?>                
              </button>
            </div>
          </div>
          
          
          
        </div>
      </div>
   <hr>
<?php get_footer();

 ?>