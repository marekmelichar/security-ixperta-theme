<?php
	/* Template Name: Home of blog */
?>

<?php get_header() ?>

		<?php
		if ( have_posts() ) : ?>

			<div class="blog">

				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase"><?php echo __('Blog'); ?></h1>
						</div>
					</div>
				</div>

				<!-- <div class="the-excerpts"> -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

						<?php //get_template_part('partials/post_excerpt'); ?>

						<?php get_template_part('partials/tiles_of_posts'); ?>


					<?php endwhile; ?>

				<!-- </div> -->

			<?php get_template_part('partials/get_older_posts'); ?>

			</div>

		<?php else :

			// get_template_part( 'template-parts/post/content', 'none' );
			?>

			<div class="container">
				<div class="row">
					<div class="col">
						<h1><?php echo __('Žádné příspěvky jsme nenašli...'); ?></h1>
					</div>
				</div>
			</div>

		<?php endif; ?>

<?php get_footer() ?>
