<?php get_header('corporativo'); ?>
	<div style="background: #fa3641;">
		<div class="row h-25">
			<div class="col-md-12 text-center mt-4">
				<h1 class="tituloblanco"><?php the_title(); ?> </h1>
			</div>
		</div>
	</div>
	<?php while (have_posts()): the_post(); ?>
		<div class="conteiner">
			<main>
				<?php the_content(); ?>
			</main>
		</div>
	<?php endwhile; ?>
	
<?php get_footer(); ?>