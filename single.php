<?php get_header('noticias'); ?>
	<?php while(have_posts()): the_post(); ?>
		<div class="container pt-5 entrada">
			<h1 class="py-4"> <?php the_title(); ?> </h1>
			<?php the_post_thumbnail(); ?>
			<p> <?php the_content($post); ?> </p>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>