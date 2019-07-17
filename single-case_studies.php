<?php get_header();
	while (have_posts() ) : the_post();
?>
<div class="row bread_crumb_contaienr">
	<div class="container">
		<ul>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">case studies</a>
			</li>
			<li>
				<a href="#"><?php the_title(); ?></a>
			</li>
		</ul>
	</div>
</div>
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
			<div class="col-md-8">
				<h3>
					<?php the_title(); ?>
				</h3>
					<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<h3>
					<?php echo "Solution"; ?>
				</h3>
                <?php if( have_rows('solution_provided') ): ?>
                    <ul class="list-solutions_provided-single_casestudies">
                    <?php while( have_rows('solution_provided') ): the_row(); ?>
                        <li>
                           <?php the_sub_field('solution_provided_list'); ?>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="row second_image_contaienr">
	<div class="container">
		<?php
			$second_image = get_field('section_2_image');
		?>
		<img src="<?php echo $second_image['url']; ?>">
		<p class="section_2_text_single_case">
			<?php the_field('section_2_text'); ?>
		</p>
	</div>
</div>

<div class="row bg-dark_single_casestudie section_4_text-single_case">
	<div class="container">
		<?php the_field('section_4_text'); ?>
	</div>
</div>


<div class="row bg-dark_single_casestudie bg-dark_single_casestudie1">
	<div class="container container_next-previous">
		<span class="previous_post_link">
			<?php previous_post_link();  ?>
		</span>
		<span class="nexT-posT-link">
			<?php next_post_link();  ?>
		</span>
	</div>
</div>


<?php
	endwhile;
get_footer(); ?>
