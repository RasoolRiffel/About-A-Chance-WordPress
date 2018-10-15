<?php 

/*Template Name: Gallery Page*/

get_header();	 ?>
	
	<span class="head-lne">
		<hr>
	</span>
	

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
	            <img src="<?php the_field('image_1') ?>" class="team-img button gal-img-pg" data-modal="modalOne">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_2') ?>" class="team-img button gal-img-pg" data-modal="modalTwo">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_3') ?>" class="team-img button gal-img-pg" data-modal="modalThree">
	          </div>          
	        </div>			

			<!-- The Modal -->
			<div id="modalOne" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">
			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_1') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_1'); ?></p>
			  			</div>
			  		</div>
			  		

		  			
			  	</div>			  		    
			  </div>


			<div id="modalTwo" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_2') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_2'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>


			<div id="modalThree" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_3') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_3'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>
		

			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_4') ?>" class="team-img button gal-img-pg" data-modal="modalFour">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_5') ?>" class="team-img button gal-img-pg" data-modal="modalFive">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_6') ?>" class="team-img button gal-img-pg" data-modal="modalSix">
	          </div>          
	        </div>


			<div id="modalFour" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_4') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_4'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>


			<div id="modalFive" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_5') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_5'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>


			<div id="modalSix" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_6') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_6'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>


			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_7') ?>" class="team-img button gal-img-pg" data-modal="modalSeven">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_8') ?>" class="team-img button gal-img-pg" data-modal="modalEight">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_9') ?>" class="team-img button gal-img-pg" data-modal="modalNine">
	          </div>          
	        </div>

			<div id="modalSeven"class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_7') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_7'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>

			<div id="modalEight" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_8') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_8'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>

			<div id="modalNine" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_9') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_9'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>

			<div class="row gal-row">
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_10') ?>" class="team-img button gal-img-pg" data-modal="modalTen">
		      </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_11') ?>" class="team-img button gal-img-pg" data-modal="modalEleven">
	          </div>
	          <div class="col-md-4 col-sm-4 text-center">
	            <img src="<?php the_field('image_12') ?>" class="team-img button gal-img-pg" data-modal="modalTwelve">
	          </div>          
	        </div>

			<div id="modalTen" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_10') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_10'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>

			<div id="modalEleven" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_11') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_11'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>

			<div id="modalTwelve" class="modal modal-img">

			  <!-- Modal content -->
			  <div class="modal-content-gal container">

			  		<div class="row">
			  			<div class="col-md-12 close-cntnr">
			  				<span class="close close-modal"><i class="fas fa-times "></i></span>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<img src="<?php the_field('image_12') ?>" class="team-imgs-gal">
		  				</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12 modal-gal-txt">
			  				<p><?php the_field('modal_text_12'); ?></p>
			  			</div>
			  		</div>
			  	</div>			  		    
			  </div>
	        </div>

		</div>

		<hr>

<?php get_footer(); ?>