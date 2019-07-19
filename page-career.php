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
            <ul class="career_list_container">
            <?php $data_query =  new WP_Query(array('post_type' => 'careers', 'order_by','Des', 'posts_per_page' => -1));?>
            <?php while ( $data_query->have_posts() ) : $data_query->the_post();?>
                <li>
                	<div class="row">
                		<div class="col-md-8">
		                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                		</div>
                		<div class="col-md-4">
                			<div class="row">
                				<div class="col-md-6">
                					<a href="<?php the_permalink(); ?>">view Detail</a>
                				</div>
                				<div class="col-md-6">
                					<a href="http://localhost/villa/career-form/">Apply</a>
                				</div>
                			</div>
                		</div>
                	</div>
                </li>
            <?php endwhile; ?>
            </ul>
	</div>
</div>

<?php
	endwhile;
get_footer(); ?>