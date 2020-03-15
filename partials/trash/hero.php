<?php

$image = get_field('hero_background_image');

if( !empty($image) ): ?>

<section id="hero" class="hero-background-image" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div id="theContent">
    <?php the_field('hero_stripe_content'); ?>
  </div>
  <a href="#stripe_with_background_image" class="icon-scroll"></a>
</section>

<?php endif; ?>
