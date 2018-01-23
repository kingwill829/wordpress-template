<?php get_header(); ?>

<div class="container">
	<div class="col-md-12">
		<h1><?php echo get_bloginfo( 'name' ); ?></h1>
	</div>
	<main class="col-md-8">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/posts/content', get_post_format() );

				endwhile;
			else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif;
			?>
	</main>
	<aside class="col-md-4">
		<?php get_sidebar(); ?>
	</aside>

</div>

<?php get_footer(); ?>