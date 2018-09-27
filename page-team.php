<?php get_header(); ?>

	 
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
        
	        <div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_1') ?>" class="team-img button" data-modal="modalOne">
				<h3 class="team-txt-pg"><?php the_field('image_1_text') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_2') ?>" class="team-img button" data-modal="modalTwo">
				<h3 class="team-txt-pg"><?php the_field('image_2_text') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_3') ?>" class="team-img button" data-modal="modalThree">
				<h3 class="team-txt-pg"><?php the_field('image_3_text') ?></h3>
	          </div>          
	        </div>			

			<!-- The Modal -->
			<div id="modalOne" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_1_modal') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_1_modal_heading') ?></h2>
			    		<p><?php the_field('image_1_modal_text') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div id="modalTwo" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_2') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_2') ?></h2>
			    		<p><?php the_field('image_modal_text_2') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_2'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>


			<div id="modalThree" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_3') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_3') ?></h2>
			    		<p><?php the_field('image_modal_text_3') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_3'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_4') ?>" class="team-img button" data-modal="modalFour">
				<h3 class="team-txt-pg"><?php the_field('image_4_text') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_5') ?>" class="team-img button" data-modal="modalFive">
				<h3 class="team-txt-pg"><?php the_field('image_5_text') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_6') ?>" class="team-img button" data-modal="modalSix">
				<h3 class="team-txt-pg"><?php the_field('image_6_text') ?></h3>
	          </div>          
	        </div>


			<div id="modalFour" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_4') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_4') ?></h2>
			    		<p><?php the_field('image_modal_text_4') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_4'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>


			<div id="modalFive" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_5') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_5') ?></h2>
			    		<p><?php the_field('image_modal_text_5') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_5'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>


			<div id="modalSix" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_6') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_6') ?></h2>
			    		<p><?php the_field('image_modal_text_6') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_6'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>


			<div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_7') ?>" class="team-img button" data-modal="modalSeven">
				<h3 class="team-txt-pg"><?php the_field('image_7_text') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_8') ?>" class="team-img button" data-modal="modalEight">
				<h3 class="team-txt-pg"><?php the_field('image_8_text') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_9') ?>" class="team-img button" data-modal="modalNine">
				<h3 class="team-txt-pg"><?php the_field('image_9_text') ?></h3>
	          </div>          
	        </div>

			<div id="modalSeven" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_7') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_7') ?></h2>
			    		<p><?php the_field('image_modal_text_7') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_7'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div id="modalEight" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_8') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_8') ?></h2>
			    		<p><?php the_field('image_modal_text_8') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_8'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div id="modalNine" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_9') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_9') ?></h2>
			    		<p><?php the_field('image_modal_text_9') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_9'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div class="row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_10') ?>" class="team-img button" data-modal="modalTen">
				<h3 class="team-txt-pg"><?php the_field('image_10_text') ?></h3>
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_11') ?>" class="team-img button" data-modal="modalEleven">
				<h3 class="team-txt-pg"><?php the_field('image_11_text') ?></h3>
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_12') ?>" class="team-img button" data-modal="modalTwelve">
				<h3 class="team-txt-pg"><?php the_field('image_12_text') ?></h3>
	          </div>          
	        </div>

			<div id="modalTen" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_10') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_10') ?></h2>
			    		<p><?php the_field('image_modal_text_10') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_10'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div id="modalEleven" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container modal-body">
			  	<div class="row">
			  		<div class="col-md-12 col-sm-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 col-sm-4 modal-col-img">
			  			<img src="<?php the_field('image_11') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8 col-sm-8 modal-col-hd">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_11') ?></h2>
			    		<p><?php the_field('image_modal_text_11') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 col-sm-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_11'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

			<div id="modalTwelve" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content container">
			  	<div class="row">
			  		<div class="col-md-12">
			  			<span class="close"><i class="fas fa-times "></i></span>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-4 modal-col-img">
			  			<img src="<?php the_field('image_12') ?>" class="team-imgs">
			  		</div>
			  		<div class="col-md-8">
			  			<h2 class="head-E"><?php the_field('image_modal_heading_12') ?></h2>
			    		<p><?php the_field('image_modal_text_12') ?></p>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-md-12 modal-col-img">
			  			<p><?php the_field('about_the_person_intro_12'); ?></p>
			  		</div>			  		
			  	</div>	    
			  </div>

			</div>

		</div>

		<hr>

<?php get_footer(); ?>