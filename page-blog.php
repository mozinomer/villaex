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
// The Loop
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<?php
	if ( $services->have_posts() ) {
		while ( $services->have_posts() ) {
			$services->the_post(); ?>
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#<?php echo get_the_ID();?>" role="tab" aria-controls="home"><?php the_title(); ?></a>
		  </li>
	<?php } ?>
</ul>

<div class="tab-content">
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
  <div class="tab-pane active" id="<?php echo get_the_ID();?>" role="tabpanel">

  </div>
  <?php } ?>
</div>

<?php
	}
else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>

<?php get_footer();?>