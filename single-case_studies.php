<?php get_header();
	while (have_posts() ) : the_post();
?>
<?php
	$images = get_field('background_image'); ?>
<div class="row maing_top_caontainer_single_case" style="background: url('<?php echo $images['url']; ?>');">
	<div class="container">
		<div class="row the_post_thumbnail_single_case">
			<div class="col-md-4">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="row the_excerpt_single_case">
			<?php the_excerpt();?>
		</div>
		<div class="row">
			<p>
				<a href="#" class="btton_container_lets_workTogether" style="background: <?php the_field('button_top_color'); ?>">
					lets Work together
				</a>
			</p>
		</div>
	</div>
</div>

<div class="row bg-dark_single_casestudie">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>
					<?php the_title(); ?>
				</h3>
				<p>
					<?php the_content(); ?>
				</p>
			</div>

		</div>
	</div>
</div>


<?php
	endwhile;
get_footer(); ?>

