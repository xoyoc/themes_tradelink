<?php get_header('noticias'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco">Noticias</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<main>
			<div class="row justify-content-md-around">
				<?php while (have_posts()): the_post(); ?>
					<article class="col-md-6 float-left pt-4">
						<?php the_post_thumbnail(); ?>
						<h3 class="pt-3"> <?php the_title(); ?> </h3>
						<p><?php the_excerpt(); ?></p>
						<p><strong> Publicado el <?php the_time('d-m-Y'); ?> </strong></p>
						<a class="btn btn-info" href="<?php the_permalink(); ?>">Leer más</a>
					</article>
				<?php endwhile; ?>
			</div>
		</main>
		<div class="row my-3 justify-content-md-center">
			<div class="col-md-4 text-center">
				<p class="py-1 mb-1 font-weight-bold">Más noticias</p>
				<?php echo paginate_links(); ?>	
			</div>
		</div>
	</div>
<?php get_footer(); ?>