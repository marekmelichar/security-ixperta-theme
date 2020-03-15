<?php
	/* Template Name: Page with Slider */
?>

<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
	<div class="post-list">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>

				<?php get_template_part('partials/green_stripe_page_top'); ?>

				<?php if( have_rows('slider') ): ?>
					<div id="slider">

		        <?php while( have_rows('slider') ): the_row();

		          // vars
		          $custom_classname = get_sub_field('custom_classname');
		          $image = get_sub_field('image');
		          $heading = get_sub_field('heading');
		          $blue_bubble_1 = get_sub_field('blue_bubble_1');
		          $blue_bubble_2 = get_sub_field('blue_bubble_2');
		          $green_bubble_1 = get_sub_field('green_bubble_1');
		          $green_bubble_2 = get_sub_field('green_bubble_2');
		          $green_bubble_3 = get_sub_field('green_bubble_3');

		          ?>

			          <div class="slider-item <?php echo $custom_classname; ?>" style="background: url(<?php echo $image; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
									<div class="container">
										<div class="row">
											<div class="col">
												<?php if($heading): ?>
													<a href="<?php echo $href; ?>">
														<h2><?php echo $heading; ?></h2>
													</a>
												<?php endif; ?>

												<?php if($blue_bubble_1): ?>
													<a href="<?php echo $href; ?>" class="blue-bubble">
														<span><?php echo $blue_bubble_1; ?></span>
													</a>
												<?php endif; ?>

												<?php if($blue_bubble_2): ?>
													<a href="<?php echo $href; ?>" class="blue-bubble">
														<span><?php echo $blue_bubble_2; ?></span>
													</a>
												<?php endif; ?>

												<?php if($green_bubble_1): ?>
													<a href="<?php echo $href; ?>" class="green-bubble">
														<span><?php echo $green_bubble_1; ?></span>
													</a>
												<?php endif; ?>

												<?php if($green_bubble_2): ?>
													<a href="<?php echo $href; ?>" class="green-bubble">
														<span><?php echo $green_bubble_2; ?></span>
													</a>
												<?php endif; ?>

												<?php if($green_bubble_3): ?>
													<a href="<?php echo $href; ?>" class="green-bubble">
														<span><?php echo $green_bubble_3; ?></span>
													</a>
												<?php endif; ?>
											</div>
										</div>
									</div>
			          </div>


		        <?php endwhile; ?>

					</div>
				<?php endif; ?>

				<?php the_content(); ?>

				<?php

					$image = get_field('content_stripe_background_image');

					if( !empty($image) ): ?>

				<div class="stripe-with-background-image" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;"> <?php endif; ?>
					<div class="container">
						<div class="row">
							<?php the_field('content_stripe_content'); ?>
						</div>
					</div>
				</div>

			</article>

		<?php endwhile ?>
	</div>
	<?php endif ?>

<?php get_footer() ?>
