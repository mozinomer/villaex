<?php get_header();
	while (have_posts() ) : the_post();
?>

<div class="row">
	<div class="container">
		<?php the_title();?>
	</div>
</div>




<?php
	endwhile;
get_footer(); ?>

