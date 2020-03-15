<?php
	/* Template Name: Reference */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list">
	<?php while ( have_posts() ) : the_post() ?>

		<article <?php post_class() ?>>

			<div id="theContent" class="container">
				<div class="row">
					<div class="col">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="gray-gradient-bg">

				<?php get_template_part('partials/management'); ?>

				<?php get_template_part('partials/references_stripe'); ?>

			</div>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
