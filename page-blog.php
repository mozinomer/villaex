<?php get_header(); ?>
<div class="row">
	<div class="container">
		categies conaiener
	</div>
</div>
<div class="congtainer_main_tabs-blog">
	<div class="row">
		<div class="col-md-7">
			<span class="span_container">
			<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => 3));?>
				<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
						<img class="<?php the_ID(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
						<?php //the_post_thumbnail(); ?>
			<?php endwhile; ?>
				</span>
		</div>
		<div class="col-md-5">
			<ul class="list_contaienr_maiN_top">
				<?php $data_query =  new WP_Query(array('post_type' => 'post', 'order_by','Des', 'posts_per_page' => 3));?>
				<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
							<li class="<?php the_ID(); ?>">
								<h3>
									<?php the_title(); ?>
								</h3>
								<p>
									<?php the_author(); ?>
								</p>
							</li>

			<?php endwhile; ?>
			</ul>
		</div>
	</div>



</div>



<div class="container container_blog_post_main">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					latest article
				</div>
				<div class="col-md-4">
					popular article
				</div>
			</div>
			<?php
				$args = array (
					'post_type'              => array( 'post' ),
					'post_status'            => array( 'publish' ),
					'nopaging'               => true,
					'order'                  => 'DSC',
					'orderby'                => 'menu_order',
				);
				$services = new WP_Query( $args );
				if ( $services->have_posts() ) {
				while ( $services->have_posts() ) {
						$services->the_post();
			?>
			<div class="row row_contains_blog">
				<div class="col-md-3 the_post_thumbnail_blog">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="col-md-5">
					<div class="row breaducrumb_blog_post">
						news -> marketing
					</div>
					<div class="row the_title_blog_post">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="row the_excerpt_blog_post">
						<?php the_excerpt(); ?>
					</div>
					<span class="timeadde">
						<?php the_date(); ?>
					</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="author_name_post-blog">
						<span class="image_container_author"></span>
						<?php the_author(); ?>
					</span>
				</div>
			</div>

			  <?php }

				} ?>
		</div>
	</div>
</div>

<?php get_footer();?>