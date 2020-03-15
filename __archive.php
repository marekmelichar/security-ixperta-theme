<?php
	/* Template Name: Archive */
?>

<?php get_header() ?>

		<?php
		if ( have_posts() ) : ?>

			<div class="blog gray-gradient-bg">

				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="text-uppercase">
								<?php the_field('archive_string', 'options'); ?>
								<?php single_tag_title(); ?>
							</h1>
						</div>
					</div>
				</div>


				<div class="container">

					<?php $index = 1; ?>

					<div class="row the-excerpts">

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

							<?php if(($index % 3) == 1) { ?>
								</div>
								<div class="row the-excerpts">
							<?php } ?>

							<div class="col-md-4">
								<?php get_template_part('partials/post_excerpt'); ?>
								<?php //get_template_part('partials/tiles_of_posts'); ?>
							</div>

							<?php $index++; ?>

						<?php endwhile; ?>

					</div>

					<?php //get_template_part('partials/get_older_posts'); ?>

				</div>

			</div>

		<?php else :

			// get_template_part( 'template-parts/post/content', 'none' );
			?>

			<div class="container">
				<div class="row">
					<div class="col">
						<h1>
							<?php //echo __('Žádné příspěvky jsme nenašli...'); ?>
							<?php the_field('archive_nothing_found', 'options'); ?>
						</h1>
					</div>
				</div>
			</div>

		<?php endif; ?>

<?php get_footer() ?>
