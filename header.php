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
		
		<!-- Modernizr JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	
	<div id="fh5co-page">
		<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
			<div class="container">
				<div class="row align-items-center">
				<!-- Logotipo de la empresa -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
						<a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
						<a href=" <?php echo esc_url( home_url('/') ); ?> "> <img src="<?php echo get_template_directory_uri(); ?>/images/Logo-Tradelink-Color.svg" alt="Logotipo"></a>
					</div>
				<!-- Fin Logotipo de la empresa -->
				<!-- menu interactivo -->
					<div class="col-lg-9 col-md-5 col-sm-5 text-center fh5co-link-wrap">
						<!-- <ul data-offcanvass="yes"> -->
							<?php 
								$args = array(
									'theme_location' => 'header-menu',
									'container' => 'ul',
									'container_class' => 'menu-sitio'
								);
								wp_nav_menu( $args );
							 ?>
					</div> 
					<!-- Fin menu interactivo -->
				</div>
			</div>
		</nav>

		<div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes">
			<!-- Carrusel -->
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div  class="carousel-item active">
						<img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/01-Foto_Principal.jpg" alt="Slider Home">
						<div class="conteiner">
							<div id="item-carrusel-1" class="carousel-caption d-none d-md-block pb-5 h4">
								<p class="w-75 m-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s"><strong>Nos distinguimos por ser la agencia aduanal</strong> que facilita las operaciones de importación y exportación de nuestros clientes</p>
								<img class="w-25 p-3 wow fadeInUp" src="<?php echo get_template_directory_uri(); ?>/images/Logo-Anab-Negro.svg" alt="Logo Anab" data-wow-duration="1s" data-wow-delay="1.4s">
							</div>
						</div>
					</div>
					<div class="carousel-item">	
						<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/02-Foto_Principal.jpg" alt="Slider Home">
						<div class="conteiner">
							<div id="item-carrusel-2" class="carousel-caption d-none d-md-block pb-5 h4">
								<p class="w-75 m-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s"><strong>Nos distinguimos por ser la agencia aduanal</strong> que facilita las operaciones de importación y exportación de nuestros clientes</p>
								<img class="w-25 p-3 wow fadeInUp" src="<?php echo get_template_directory_uri(); ?>/images/Logo-Anab-Negro.svg" alt="Logo Anab" data-wow-duration="1s" data-wow-delay="1.4s">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/03-Foto_Principal.jpg" alt="Slider Home">
						<div class="conteiner">
							<div id="item-carrusel-3" class="carousel-caption d-none d-md-block pb-5 h4">
								<p class="w-75 m-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s"><strong>Nos distinguimos por ser la agencia aduanal</strong> que facilita las operaciones de importación y exportación de nuestros clientes</p>
								<img class="w-25 p-3 wow fadeInUp" src="<?php echo get_template_directory_uri(); ?>/images/Logo-Anab-Negro.svg" alt="Logo Anab" data-wow-duration="1s" data-wow-delay="1.4s">
							</div>
						</div>
					 </div>
				</div>
			</div>

		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>