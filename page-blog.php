<?php get_header(); ?>
<div class="row">
	<div class="container">
		categies conaiener
	</div>
</div>


<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>
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
<!-- // The Loop -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<?php
	$link_tabs_id = 0;
	if ( $services->have_posts() ) {
		while ( $services->have_posts() ) {
			$services->the_post();

			?>
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="<?php echo 'tabs'.$link_tabs_id; ?>" role="tab"><?php the_title(); ?></a>
		  </li>
	<?php
	$link_tabs_id++;
} ?>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="<?php echo 'tabs'.$link_tabs_id; ?>" ><?php the_title(); ?></div>
</div>

<?php } else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>

<?php get_footer();?>