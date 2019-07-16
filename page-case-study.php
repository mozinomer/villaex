<?php get_header();
	while (have_posts() ) : the_post();
?>

<div class="row top_row_casestudies">
	<div class="container">
		<h2 class="casestudy_heaing">
			<?php the_field('exceprt'); ?>
		</h2>
		<p class="casestudy_text">
			<?php the_field('excerpt_text'); ?>
		</p>
		<p class="button_link_casestudies">
			<a href="#">let's work together</a>
		</p>
	</div>
</div>

<div class="row">
	<div class="container">
		<div class="row display_flex">
		<?php if( have_rows('projects') ):
		    while ( have_rows('projects') ) : the_row();
		        $images = get_sub_field('prejects_done');?>
		        <div class="col-md-4 images_projects_container">
			        <img src="<?php echo $images['url']; ?>" alt="asd">
				</div>
		        <?php endwhile;endif;
		?>
		</div>
	</div>
</div>

<div class="row heading_bottom_casestudies_main_row">
	<div class="container">
		<div class="text-center">
			<h2 class="heading_bottom_casestudies">
				Ready to start a project
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			</p>
			<p class="button_link_casestudies button_link_casestudiesa">
				<a href="#">let's work together</a>
			</p>
		</div>
	</div>
</div>


<?php
	endwhile;
get_footer(); ?>

