<?php
	/* Template Name: Children page - L3 */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list">
	<?php while ( have_posts() ) : the_post() ?>

		<article <?php post_class() ?>>

			<h1><?php the_title() ?></h1>

			<div class="container">
				<?php the_content() ?>
			</div>

			<?php get_template_part('partials/about_us'); ?>

			<?php get_template_part('partials/why_connect_with_us'); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
