<?php get_header(); ?>

	<?php while (have_posts()): the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<h1> <?php the_title(); ?> </h1>
		<div class="conteiner">
			<main>
				<?php the_content(); ?>
			</main>
		</div>
	<?php endwhile; ?>
	
<?php get_footer(); ?>