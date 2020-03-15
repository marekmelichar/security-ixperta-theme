<?php

$image = get_field('banner_background_image');

if( !empty($image) ): ?>

<section id="banner" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div class="filter"></div>
  <div class="container content">
    <div class="row">
      <div class="col">
        <h1 class="fz36"><?php the_field('banner_h1'); ?></h1>
        <h2 class="fz22"><?php the_field('banner_h2'); ?></h2>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
