<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php wp_head();?>
<body>

<div class="main_content">
asda
<section class="section_1">
	<div class="row">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4">
			<div class="row menu_row">
				<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
			</div>
			<div class="row services_page">
				<?php $data_query =  new WP_Query(array('post_type' => 'services', 'order_by'=>'Des', 'posts_per_page' => 5));?>
				<?php while ( $data_query->have_posts() ) : $data_query->the_post();?>

					<span class="services_content">
						<h1><?php the_title(); ?></h1>
						<span class="excerpt_services"><?php the_excerpt(); ?></span>
					</span>
				<?php endwhile ?>
			</div>
		</div>
	</div>
</section>