<?php get_header();
	while (have_posts() ) : the_post();
?>

<div class="row_main_bg_career display_flex" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container heading_container_main_career_main">
		 <h3 class="heading_container_main_career">
			 <?php the_field('excerpt'); ?>
		 </h3>
		 <p class="text-center">
		 	join our team
		 </p>
	</div>
</div>
<div class="row">
	<div class="container">
		<h2 class="text-center">
			Avaialable <?php the_title(); ?>
		</h2>
        <?php if( have_rows('avaiable_career') ): ?>
            <ul class="career_list_container">
            <?php while( have_rows('avaiable_career') ): the_row(); ?>
                <li>
                	<div class="row">
                		<div class="col-md-8">
		                    <a href="#"><?php the_sub_field('avaiable_careers'); ?></a>
                		</div>
                		<div class="col-md-4">
                			<div class="row">
                				<div class="col-md-6">
                					<a href="#">view Detail</a>
                				</div>
                				<div class="col-md-6">
                					<a href="#">Apply</a>
                				</div>
                			</div>
                		</div>
                	</div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
	</div>
</div>

<?php
	endwhile;
get_footer(); ?>