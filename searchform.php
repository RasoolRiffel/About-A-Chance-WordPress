<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="form-style"><label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" name="s" id="s" class="text-form" value="<?php the_search_query(); ?>" />
		<input type="submit" id="searchsubmit" value="Search" class="don-nav">
	</div>
</form>