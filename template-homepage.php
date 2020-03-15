<?php
	/* Template Name: Homepage */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list">
	<?php while ( have_posts() ) : the_post() ?>

		<article <?php post_class() ?>>

			<?php get_template_part('partials/banner'); ?>
			<?php get_template_part('partials/services'); ?>

			
			<?php //get_template_part('partials/video'); ?>

			<?php //get_template_part('partials/tiles'); ?>
			<?php //get_template_part('partials/tiles_of_posts'); ?>

			<?php //get_template_part('partials/hero'); ?>

			<?php //get_template_part('partials/stripe_with_background_image'); ?>

			<?php get_template_part('partials/posts_query_stripe'); ?>


			<!-- <div class="gray-gradient-bg"> -->

				<?php get_template_part('partials/products'); ?>

				<?php //get_template_part('partials/management'); ?>
				<?php get_template_part('partials/about_us'); ?>

				<?php get_template_part('partials/references'); ?>

			<!-- </div> -->

			<?php //the_content(); ?>


			<?php //get_template_part('partials/big_numbers'); ?>

			<?php //get_template_part('partials/our_vision'); ?>

			<?php //get_template_part('partials/references_stripe'); ?>

			<?php //get_template_part('partials/what_will_we_help_you_with'); ?>

			<?php //get_template_part('partials/we_inovate'); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
