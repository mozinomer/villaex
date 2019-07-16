<?php get_header(); ?>
<div class="row">
	<div class="container">
		categies conaiener
	</div>
</div>
<div class="congtainer_main_tabs-blog">
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
	?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<?php
		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post(); ?>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#<?php echo get_the_ID();?>" role="tab"><?php the_title(); ?></a>
			  </li>
		<?php } ?>
	</ul>

	<div class="tab-content">
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
		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post(); ?>
				  <div class="tab-pane" id="<?php echo get_the_ID();?>" role="tabpanel">
				  	<?php the_title(); ?>
				  </div>
	  <?php } ?>
	<?php
		} ?>
	</div>

	<?php
		}
	else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata();

	?>
</div>




<div class="row">
	<div class="col-md-7">
		<div class="row">
			<div class="col-md-4">
				latest article
			</div>
			<div class="col-md-4">
				popular article
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-md-5">
				<div class="row">
					news -> marketing
				</div>
				<div class="row">
					<?php the_title(); ?>
				</div>
				<div class="row">
					<?php the_excerpt(); ?>
				</div>
				<span class="timeadde">
					16 minutes ago
				</span>
			</div>
			<div class="col-md-3">
				<span class="author_name_post-blog">
					<?php the_author(); ?>
				</span>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>