<?php get_header(); ?>

<div class="container">
	<main class="col-md-12">
		<div class="content-body">
			<?php 

			if ( have_posts() ) : while ( have_posts() ) : the_post(); 

			get_template_part( 'template-parts/posts/content', 'single' );

			endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>	
		</div>
	</main>

</div>

<?php get_footer(); ?>