<div class="col col-md-3 reference-tiles__tile">
    <div class="svg">
      <?php get_template_part('svg/' . get_field('tile_svg_in_tile') . '.svg'); ?>
    </div>
    <div class="heading">
      <h2><?php the_title(); ?></h2>
    </div>

    <a class="link" href="<?php the_permalink(); ?>">
      <div class="arrow-green-circle">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a>
</div>
