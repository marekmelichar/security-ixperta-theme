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

				<?php get_template_part('partials/get_posts_by_tag'); ?>

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
