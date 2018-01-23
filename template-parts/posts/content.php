		<div class="row">
			<div class="col-md-12">
				<section class="list-post marb_d">
					<a href="<?php the_permalink() ?>"> <h2 class="list-post__title"><?php the_title() ;?></h2></a>
					<?php the_excerpt(); ?>
					<div class="tar list-post__published"><?php echo get_the_date(); ?></div>
				</section>
			</div>
		</div>