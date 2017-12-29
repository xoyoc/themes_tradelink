<?php get_header(); ?>

<!-- Seccion inicial -->
<div class="fh5co-project-style-2">
<!-- Seccion de eslogan -->
	<div class="container">
		<div class="row p-b">
			<div class="col-md-6 offset-md-3 text-center">
				<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Agencia Aduanal Tradelink Pacífico</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">No somos una agencia aduanal de despachos; somos una agencia aduanal de servico.</p>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="index.php/quienes-somos" class="btn btn-success btn-lg">Conoce quiénes somos</a></p>
			</div>
		</div>
	</div>
</div>
<!-- Seccion de eslogan -->

<!-- Seccion de Nuestros Servicios -->
<div class="fh5co-features-style-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/Foto_Secundaria-Inicio.jpg);" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container" style="z-index: 3; position: relative;">
		<div class="row p-b">
			<div class="col-md-6 offset-md-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
				<h2 class="fh5co-heading">Servicios integrados</h2>
				<p>adaptados a sus necesidades</p>
			</div>
		</div>
		<div class="row">
			<div class="fh5co-features">
				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Despacho_LogAduanal.svg" alt="Servicios Logisticos"></div>
					<h3>Rapidez en el despacho aduanal</h3>
					<p>Despacho y logística aduanal en un servicio integrado con un solo contacto.</p>
				</div>
				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Atencion.svg" alt="Servicios Antencio"></div>
					<h3>Excelente atención y servicio</h3>
					<p>La mayor disponibilidad y atención al status de sus embarques.</p>
				</div>
				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Legalidad.svg" alt="Servicios Operaciones"></div>
					<h3>Lo hacemos fácil</h3>
					<p>Facilitamos sus operaciones, cumpliendo siempre con la legalidad.</p>
				</div>

				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_AsesoriaAran.svg" alt="Asesoria Arrancelaria"></div>
					<h3>Asesoría arancelaria</h3>
					<p>Asesoría en clasificación arancelaria y normatividad.</p>
				</div>
				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_ClasifAran.svg" alt="Clasificacion arrancelaria"></div>
					<h3>Cuentas de gastos extra rápidas</h3>
					<p>100% deducibles y sin cobros inexistentes.</p>
				</div>
				<div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
					<div class="icon mx-auto"><img src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Servicios_Cuentas.svg" alt="Cuentas de gastos"></div>
					<h3></h3>
					<p></p>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Fin de seccion de Nuestros Servicios -->


<div class="fh5co-blog-style-1">
	<div class="container">
		<div class="row p-b">
			<div class="col-md-6 offset-md-3 text-center">
				<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Noticias</h2>
				<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Conoce las Noticias más relevantes</p>
			</div>
		</div>

		<div class="row p-b">
			<?php $args=array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'orderby' => 'date_create()',
					'order' => 'DESC',
					'category_name' => 'noticias'
				);
				$noticias = new WP_Query($args);
				while($noticias->have_posts()): $noticias->the_post();
			?>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
					<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
						<div class="fh5co-post-image">
							<div class="fh5co-overlay"></div>	
							<div class="fh5co-category"><a href="#">Noticias</a></div>	
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="fh5co-post-text">
							<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
							<p> <?php the_excerpt(); ?> </p>
						</div>
						<div class="fh5co-post-meta">
							<a href="<?php the_permalink(); ?>"><i class="icon-chat"></i> <?php $time = human_time_diff( get_the_time('U') , current_time('timestamp') ); echo $time; ?> </a>
							<a href="<?php the_permalink(); ?>"><i class="icon-clock2"></i> <?php the_time('H');  echo(" de "); the_time('M');  ?> </a>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
			<div class="clearfix visible-sm-block"></div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
				<a href="index.php/noticias" class="btn btn-primary btn-lg">Ver todas las noticias</a>
			</div>
		</div>
	</div>
</div>

<!-- Contadores  -->
<div class="fh5co-counter-style-2" style="background-color: #fa3641; color:white;" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="fh5co-section-content-wrap">
			<div class="fh5co-section-content">
				<div class="row">
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="icon">
							<img class="icon mx-auto" src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Home_Oficionas.svg" alt="Icono Oficinas">
						</div>
						<span class="fh5co-counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Oficinas</span>
						
					</div>
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
						<div class="icon">
							<img class="icon mx-auto" src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Home_AnoExperiencia.svg" alt="Icono Experiencia">
						</div>
						<span class="fh5co-counter js-counter" data-from="0" data-to="14" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Años de experiencia</span>
					</div>
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
						<div class="icon">
							<img class="icon mx-auto" src="<?php echo get_template_directory_uri(); ?>/Iconos/Logo-Home_Productos.svg" alt="Icono Productos">
						</div>
						<span class="fh5co-counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Productos importados</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fin de los Contadores  -->	

<?php get_footer(); ?>