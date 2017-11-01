<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404" class="text-center">

				<h1><?php _e( 'Pagina no encontrada'); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Regresar a la pagina principal' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
