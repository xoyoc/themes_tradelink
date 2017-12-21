<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Agencia Aduanal Tradelink en Puerto Lázaro Cárdenas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Agencia Aduana Tradelink Pacifico en Lázaro Cárdenas " />
		<meta name="keywords" content="agencia aduanal en lázaro árdenas" />
		<meta name="author" content="Xoyoc.NET - Tec. Antonio Xoyoc Becerra Farias" />
		
		<?php wp_head(); ?>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div>
		<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
			<div class="container">
				<div class="row">
				<!-- Logotipo de la empresa -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
						<a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
						<a href=" <?php echo esc_url( home_url('/') ); ?> "><img src="<?php echo get_template_directory_uri(); ?>/images/Logo-Tradelink-Color.svg" alt="Logotipo"></a>
					</div>
				<!-- Fin Logotipo de la empresa -->
				<!-- menu interactivo -->
					<div class="col-lg-9 col-md-5 col-sm-5 text-center fh5co-link-wrap pt-1">
						<!-- <ul data-offcanvass="yes"> -->
							<?php 
								$args = array(
									'theme_location' => 'header-menu',
									'container' => 'ul',
									'container_class' => 'pagemenu'
								);
								wp_nav_menu( $args );
							 ?>
					</div> 
					<!-- Fin menu interactivo -->
				</div>
			</div>
		</nav>

		<div class="fh5co-cover-style-2">
			<div class="slide">
				<div class="carousel-inner">
					<img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/Slider-QuienesSomos.jpg" alt="Slider">
				</div>
			</div>
		</div>