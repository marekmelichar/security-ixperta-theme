<?php

get_header();

?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="text-uppercase">
        <?php the_field('references_archive_heading', 'options'); ?>
      </h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="row reference-tiles">
    <?php

    $args = array(
      'post_type' => 'reference',
      'posts_per_page' => -1,
      'meta_key'			=> 'orderby',
      'orderby'			=> 'meta_value',
      'order'				=> 'ASC'
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php get_template_part('partials/reference_tile_in_archive'); ?>

    <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
