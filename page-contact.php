<?php 

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

    <div class="row">
      <div class="col-md-6">
        <div class="con-form-one">
          <p><strong class="head-E">EMAIL:</strong> <?php the_field('email_address') ?></p>
          <p class="con-txt"><strong class="head-E">PHONE:</strong> <?php the_field('phone_number'); ?></p>
        
          <input type="text" name="Name" class="con-form"><br>
          <input type="text" name="Name" class="con-form"><br>
          <textarea type="text" name="Name" class="con-form" row="3"></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <img src="<?php the_field('maps_image'); ?>" class="con-img">
      </div>
    </div>
    

    </div>
   <hr>
<?php get_footer();

 ?>