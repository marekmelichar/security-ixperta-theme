<section id="page_children_tiles">
  <div class="container">
    <div class="row">

      <?php

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

            <?php $href = get_permalink(); ?>
            <?php $background_image = get_field('background_image') ?>

              <a class="col-md tile" href="<?php echo $href ?>">

                <div class="bg bg-img" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>

                <div class="svg">
                  <?php get_template_part('svg/' . get_field('svg_icon') . '.svg'); ?>
                </div>

                <div class="heading"><?php echo the_field('heading') ?></div>
                <div class="description"><?php echo the_field('description') ?></div>
                <div class="arrow-green-circle">
                  <i class="fas fa-chevron-right"></i>
                </div>

              </a>


          <?php endwhile; ?>

      <?php endif; wp_reset_postdata(); ?>

    </div>
  </div>
</section>
