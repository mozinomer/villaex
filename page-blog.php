<?php get_header(); ?>
<div class="row">
	<div class="container">
		categies conaiener
	</div>
</div>

<div class="row main_container_blog_top">
	<?php
	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'post' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => true,
		'order'                  => 'DSC',
		'orderby'                => 'menu_order',
	);

	// The Query
	$services = new WP_Query( $args );

	// The Loop
	if ( $services->have_posts() ) {
		while ( $services->have_posts() ) {
			$services->the_post(); ?>
	<div class="row">
		<div class="col-md-6">
			<span class="image_top_blog_post"><?php the_post_thumbnail(); ?></span>
		</div>
		<div class="col-md-6">
			<span class="titel_top_blog_post"><?php the_title(); ?></span>
		</div>
	</div>
	<?php }
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

?>
</div>