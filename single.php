<?php get_header();
	while (have_posts() ) : the_post();
?>


<div class="row main_single_post_container">
	<div class="container">
		<div class="col-md-9">
			<div class="row the_title-single">
				<?php the_title(); ?>
			</div>
			<div class="row the_author_single">
				by <?php the_author(); ?>
			</div>
			<div class="row the_post_thumbnail_single">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="row the_content_single">
				<?php the_content(); ?>
			</div>
		</div>
<div class="row">
	<div class="container">
			<div class="col-md-9">
				<h3 class="display_block realted_post-container_hading">
					<span>
						realted post
					</span>
				</h3>
				<div class="row realted_post-container">
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
							<div class="col-md-4">
								<div class="row the_post_thumbnail_single_related">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="row the_post_title_single_related">
									<?php the_title(); ?>
								</div>
							</div>
				  <?php }

					} ?>
				</div>
			</div>
		</div>
	</div>

	<?php
	wp_reset_postdata();

	?>
	</div>
</div>
<?php
	endwhile;
?>
</div>
<?php get_footer(); ?>
