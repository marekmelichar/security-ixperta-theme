<?php
	/* Template Name: Contact */
?>

<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
	<div class="post-list">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>

				<div class="container">
					<div class="row">
						<div class="col">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>

				<div class="container theContent">
					<div class="row">
						<div class="col">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				<?php get_template_part('partials/about_us'); ?>
				<?php //get_template_part('partials/about_us_contact_page'); ?>

				<?php get_template_part('partials/about_us_no_photos'); ?>

				<?php get_template_part('partials/why_connect_with_us'); ?>

				<?php get_template_part('partials/references'); ?>

			</article>

		<?php endwhile ?>
	</div>
	<?php endif ?>

<?php get_footer() ?>
