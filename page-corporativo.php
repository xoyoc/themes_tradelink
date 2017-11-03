<?php get_header('corporativo'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco"><?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
	<div class="container">
		<main>
			<div class="row info-corporativo my-5">
				<div class="text-center col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/images/tf-logo.png" alt="Logo TF">
					<h5 class="textrojo mt-3" >T&F Servicios Aduanales</h5>
					<address>Crossborder Nvo. Laredo And Colombia, Warehousing Customs Brokerage</address>
					<p>Contact: Beatriz Guerrero</p>
					<p>Ph: (867) 712-7666</p>
					<p><a class="textrojo" href="mail:beatriz@setexim.com">beatriz@setexim.com</a></p>
				</div>
				<div class="text-center col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/images/tlsureste.png" alt="Logo TL Sur Este">
					<h5 class="textrojo mt-3" >Customs Brokerage Located in Merlda and Progreso</h5>
					<p>Contact: José Domingo Ruiz</p>
					<p>Ph: (999) 34-96</p>
					<p><a class="textrojo" href="mail:domingo@tlsureste.com">domingo@tlsureste.com</a></p>					
				</div>
				<div class="text-center col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/images/tlpacifico_logo.png" alt="Logo TL Pacifico">
					<h5 class="textrojo mt-3" >Cargo agent Specialized Logistics in The Pacific</h5>
					<p>Contact: Jaime Vélez</p>
					<p>Ph: (33) 3628-0717</p>
					<p>jvelez3628-0717</p>
					<p><a class="textrojo" href="mail:jvelez@tradelinkpacifico.com.mx">jvelez@tradelinkpacifico.com.mx</a></p>					
				</div>
			</div>
		</main>
	</div>
<?php get_footer(); ?>