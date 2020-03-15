<?php
	/* Template Name: Parent page - L2 */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list">
	<?php while ( have_posts() ) : the_post() ?>

		<article <?php post_class() ?>>

			<!-- <h1><?php the_title() ?></h1> -->
			<?php the_content() ?>

			<?php //get_template_part('partials/page_children_tiles'); ?>

			<?php get_template_part('partials/why_connect_with_us'); ?>

			<?php get_template_part('partials/about_us'); ?>

			<?php //get_template_part('partials/stripe_with_background_image'); ?>

			<?php //get_template_part('partials/color_bg_stripe'); ?>

			<!-- <div class="gray-gradient-bg">

				<?php //get_template_part('partials/management'); ?>

			</div> -->

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
