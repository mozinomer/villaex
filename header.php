<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600i,700&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<?php wp_head();?>
<body>





<?php if (!is_front_page()) { ?>
	<header id="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php
					   $custom_logo_id = get_theme_mod( 'custom_logo' );
					   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<a href="<?php bloginfo('url');?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
				</div>
				<div class="col-md-6">
					<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
				</div>
			</div>
		</div>
	</header>
<?php } ?>




<div class="main_container">

