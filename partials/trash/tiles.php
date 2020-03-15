<section id="tiles" class="hero-tiles">
    <div class="container">
      <div class="row">

        <?php $index = 1; ?>
        <?php if( have_rows('tiles_repeater') ): ?>
          <?php while( have_rows('tiles_repeater') ): the_row(); ?>

            <?php $background_image = get_sub_field('background_image'); ?>
            <?php $heading = get_sub_field('heading'); ?>
            <?php $subheading = get_sub_field('subheading'); ?>
            <?php $description = get_sub_field('description'); ?>
            <?php $href = get_sub_field('href'); ?>

            <?php if($index == 1) { ?>
              <a href="<?php echo $href; ?>" class="tile tile-1 col-md-6">
                <div class="bg bg-img" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
                <div class="heading"><?php echo $heading ?></div>
                <div class="subheading"><?php echo $subheading ?></div>
                <div class="description"><?php echo $description ?></div>
                <div class="arrow-green-circle">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </a>
            <?php } elseif($index == 2) { ?>
              <a href="<?php echo $href; ?>" class="tile tile-2 col-md-3 bg-img">
                <div class="bg bg-img" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
                <div class="heading"><?php echo $heading ?></div>
                <div class="subheading"><?php echo $subheading ?></div>
                <div class="description"><?php echo $description ?></div>
                <div class="arrow-green-circle">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </a>
            <?php } elseif($index == 3) { ?>
              <a href="<?php echo $href; ?>" class="tile tile-3 col-md-3 bg-img">
                <div class="bg bg-img" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
                <div class="heading"><?php echo $heading ?></div>
                <div class="subheading"><?php echo $subheading ?></div>
                <div class="description"><?php echo $description ?></div>
                <div class="arrow-green-circle">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </a>
            <?php } elseif($index == 4) { ?>
              <a href="<?php echo $href; ?>" class="tile tile-4 col-md-12 bg-img">
                <div class="bg bg-img" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
                <div class="heading"><?php echo $heading ?></div>
                <div class="subheading"><?php echo $subheading ?></div>
                <div class="description"><?php echo $description ?></div>
                <div class="arrow-green-circle">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </a>
            <?php } ?>
            <?php $index++; ?>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
