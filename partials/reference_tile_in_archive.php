<div class="col col-md-3 reference-tiles__tile">
    <?php $image = get_field('tile_svg_in_tile') ?>
    <?php if($image): ?>
      <div class="svg img">
        <?php if (strpos($image['url'], '.svg') == true) { ?>
          <?php echo file_get_contents($image['url']); ?>
        <?php } else { ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <?php } ?>
      </div>
    <?php endif; ?>
    <div class="heading">
      <h2><?php the_title(); ?></h2>
    </div>

    <!-- <a class="link" href="<?php //the_permalink(); ?>">
      <div class="arrow-green-circle">
        <i class="fas fa-chevron-right"></i>
      </div>
    </a> -->
</div>
