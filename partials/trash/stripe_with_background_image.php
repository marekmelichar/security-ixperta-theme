<?php

$image = get_field('stripe_background_image'); ?>

<section id="stripe_with_background_image" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php echo the_field('bg_image_heading'); ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col subheading">
        <?php echo the_field('bg_image_subheading'); ?>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_image_stripe_repeater') ): ?>

    <div id="bg_image_stripe_repeater" class="container">
      <div class="row">



      <?php while( have_rows('bg_image_stripe_repeater') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col text-center">
          <div class="card">
            <div class="card-header">
              <?php if($icon): ?>
                <div class="svg">
                  <?php get_template_part('svg/' . $icon . '.svg'); ?>
                </div>
              <?php endif; ?>
              <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                <h3 class="head"><?php echo $heading; ?></h3>
              <?php if($href): ?></a><?php endif; ?>
            </div>
            <div class="card-body">
              <?php echo $content; ?>
            </div>
            <div class="card-footer">
              <?php if(!$href_text && $href): ?>
                <a href="<?php echo $href; ?>">
                  <div class="the-little-plus">
                    <?php get_template_part('svg/button_plus_green.svg'); ?>
                  </div>
                </a>
              <?php elseif(!$href_text && !$href): ?>
                <!-- nothing -->
              <?php else: ?>
                <a href="<?php echo $href; ?>" class="btn-more-info">
                  <?php echo $href_text; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>



      <?php endwhile; ?>

    </div>
  </div>

  <?php endif; ?>


</section>
