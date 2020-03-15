<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
      <div class="col">

        <h1><?php echo __('REFERENCE - ') ?><?php the_title() ?></h1>

      </div>
    </div>
  </div>

  <?php the_content(); ?>

  <?php get_template_part('partials/about_us'); ?>

  <?php get_template_part('partials/references'); ?>

</article>
