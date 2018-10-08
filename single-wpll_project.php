<?php get_header();?>

<div class="container">
	<?php 
		if (have_posts()): 
			while (have_posts()) : the_post();?>

				<h1><?php the_title(); ?></h1>

				<div class="about-txt">
					<?php the_content(); ?>
				</div>
				
			<?php 
			endwhile;

			else: 
				echo "<p>No content found</p>";
		endif;
	?>
</div>

<hr>

<div class="container comment-form-col about-txt">
	<?php
		$args = array(
			'title_reply'=>'Got Something To Say:',
 'comment_notes_after' => '<button type="submit" id="submit-new" class="don-nav comment-button"><span>'.__('Post Comment').'</span></button>' 
);
comment_form($args); 

		?>

</div>

<div class="container">
	<span class="commentlist">
	<?php
		//Gather comments for a specific page/post 
		$comments = get_comments(array(
			'post_id' => 'riffel',
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		//Display the list of comments
		wp_list_comments(array(
			'per_page' => 2, //Allow comment pagination
			'reverse_top_level' => false //Show the oldest comments at the top of the list
		), $comments);
	?>
</span>
	
</div>


<hr>


<?php get_footer();?>