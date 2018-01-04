<?php get_header('aviso-de-privacidad'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco"><?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<?php while (have_posts()): the_post(); ?>
		<main>
			<?php the_content(); ?>
		</main>
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>