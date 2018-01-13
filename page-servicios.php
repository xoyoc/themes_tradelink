<?php get_header('servicios'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco"><?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
	<div class="fh5co-features-style-1" data-stellar-background-ratio="0.5" >
		<div class="fh5co-overlay" style="background: rgba(255, 255, 255, 1) !important; color: black !important;"></div>
		<div class="container" style="z-index: 3; position: relative; color: black !important;">
			<div class="row justify-content-sm-around pt-4">
				<div class="col-md-3 text-center">
					<p style="color: black !important;">Servicios integrados adaptados a sus necesidades</p>
				</div>
			</div>
			<div class="row">
				<div class="fh5co-features">
					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="border-right-color: rgba(0, 0, 0, 1); border-bottom-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Despacho_LogAduanal_Black.svg" alt="Servicios Logisticos"></div>
						<h3>Rapidez en el despacho aduanal</h3>
						<p style="color: black !important;" >Despacho y logística aduanal en un servicio integrado con un solo contacto.</p>
					</div>
					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s" style="border-right-color: rgba(0, 0, 0, 1); border-bottom-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Atencion_Black.svg" alt="Servicios Antencio"></div>
						<h3>Excelente atención y servicio</h3>
						<p style="color: black !important;">La mayor disponibilidad y atención al estaus de sus embarques.</p>
					</div>
					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" style="border-bottom-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Legalidad_Black.svg" alt="Servicios Operaciones"></div>
						<h3>Lo hacemos fácil</h3>
						<p style="color: black !important;">Facilitamos sus operaciones, cumpliendo siempre con la legalidad.</p>
					</div>

					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s" style="border-right-color: rgba(0, 0, 0, 1); border-top-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_AsesoriaAran_Black.svg" alt="Asesoria Arrancelaria"></div>
						<h3>Asesoría arancelaria</h3>
						<p style="color: black !important;">Asesoría en clasificación arancelaria y normatividad.</p>
					</div>
					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s" style="border-right-color: rgba(0, 0, 0, 1); border-top-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Cuentas_Black.svg" alt="Cuentas de gastos"></div>
						<h3>Cuentas de gastos extra rápidas</h3>
						<p style="color: black !important;">100% deducibles y sin cobros inexistentes.</p>
					</div>
					<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s" style="border-top-color: rgba(0, 0, 0, 1);">
						<div class="icon mx-auto"></div>
						<h3></h3>
						<p style="color: black !important;"></p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Foto-Servicios.jpg'); min-height: 771px;" ></div>
<?php get_footer(); ?>