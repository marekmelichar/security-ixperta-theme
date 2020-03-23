<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- <div class="container">
    <div class="row">
      <div class="col">
        <div class="reference-banner">
          <h1><?php the_title() ?></h1>

        </div>
      </div>
    </div>
  </div> -->

  <?php the_content(); ?>

  <?php get_template_part('partials/about_us'); ?>

  <?php get_template_part('partials/references'); ?>

</article>
