<?php get_header('contacto'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco"><?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<main>
			<h3 class="text-uppercase w-75 text-center mx-auto">Nuestro compromiso es proporcionar el mejor servicio</h3>
			<div class="row">
				<div class="col-md-6">
					<h4 class="w-75 text-center mx-auto">¿Tienes alguna duda o comentario? ¡Escríbenos!</h4>
					<form class="contacto-formulario my-5" method="post">
						<input  class="border" type="text" placeholder="Nombre">
						<input  class="border" type="email" placeholder="E-mail">
						<textarea  class="border" name="contacto" id="" cols="30" rows="5" placeholder="Contacto"></textarea>
						<input class="w-25 mb-2 mr-5 btn-info float-right" type="submit" name="enviar" value="Enviar">
					</form>
				</div>
				<div class="col-md-6 info-contacto">
					<address>Calle Tamarindos No. 2, Colonia 2do Sector de FIDELAC, Cd. Lázaro Cárdenas, Michoacan, C.P. 60950</address>
					<p><a href="tel:+7535375973">Tel: (753) 537-5973</a></p>
					<p><a href="mail:contactanos@tradelinkpacifico.com.mx">contactanos@tradelinkpacifico.com.mx</a></p>
					<p><a class="textrojo font-weight-bold" href="http://www.tradelinkpacifico.com.mx">www.tradelinkpacifico.com.mx</a></p>
				</div>
			</div>
		</main>
	</div>
	<div class="mapa-contacto mt-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Mapa-Contacto.png');"> </div>
<?php get_footer(); ?>