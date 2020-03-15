<section id="services" class="<?php the_field('bg_color_class'); ?>" style="background: <?php the_field('bg_color') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php echo the_field('bg_color_heading'); ?></h2>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater') ): ?>

    <div class="container links bg_color_stripe_repeater">
      <div class="row">



      <?php while( have_rows('bg_color_stripe_repeater') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col-md text-center">
          <div class="row no-gutters">
            <div class="col">
              <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if($icon): ?>
                <div class="svg">
                  <?php get_template_part('svg/' . $icon . '.svg'); ?>
                </div>
              <?php endif; ?>
              <div class="content">
                <?php echo $content; ?>
              </div>
              <?php if(!$href_text && $href): ?>
                <a class="arrow-green-circle" href="<?php echo $href; ?>">
                  <i class="fas fa-chevron-right"></i>
                </a>
              <?php elseif(!$href_text && !$href): ?>
              <?php else: ?>
                <a href="<?php echo $href; ?>" class="__btn-more-info">
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