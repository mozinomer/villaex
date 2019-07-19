<?php get_header();
	while (have_posts() ) : the_post();
?>


<div class="row top_row_container">
	<div class="container">
		<h3>
			<?php the_title(); ?>
		</h3>
		<p>
			<?php the_excerpt(); ?>
		</p>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="row the_content_signle_carer">
			<?php the_content(); ?>
		</div>
	</div>
</div>









<?php
	endwhile;
get_footer(); ?>
