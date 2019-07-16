<?php get_header();
	while (have_posts() ) : the_post();
?>

<div class="row_main_bg_career display_flex" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		 <h3 class="heading_container_main_career">
			 <?php the_field('excerpt'); ?>
		 </h3>
	</div>
</div>
<div class="row">
	<div class="container">
		<h2>
			Avaialable <?php the_title(); ?>
		</h2>
        <?php if( have_rows('avaiable_career') ): ?>
            <ul>
            <?php while( have_rows('avaiable_career') ): the_row(); ?>
                <li>
                    <a href="#"><?php the_sub_field('avaiable_careers'); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
	</div>
</div>

<?php
	endwhile;
get_footer(); ?>