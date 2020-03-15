<section id="why_connect_with_us" class="<?php the_field('wcwu_bg_color_class'); ?>" style="background: <?php the_field('wcwu_bg_color') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php echo the_field('wcwu_bg_color_heading'); ?></h2>
      </div>
    </div>
  </div>

  <?php if( have_rows('wcwu_bg_color_stripe_repeater') ): ?>

    <div class="container links bg_color_stripe_repeater">
      <div class="row">
        <!-- <div class="col"> -->


      <?php while( have_rows('wcwu_bg_color_stripe_repeater') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col">
          <div class="row no-gutters">
            <div class="col-md-3">
              <?php if($icon): ?>
                <div class="svg">
                  <?php get_template_part('svg/' . $icon . '.svg'); ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-9 padding-left-3">
              <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              <div class="content">
                <?php echo $content; ?>
              </div>
              <?php if(!$href_text && $href): ?>
                <!-- <a href="<?php echo $href; ?>">
                  <div class="arrow-green-circle __the-little-plus">
                    <?php //get_template_part('svg/button_plus_green.svg'); ?>
                  </div>
                </a> -->
                <a class="arrow-green-circle" href="<?php echo $href; ?>">
                  <i class="fas fa-chevron-right"></i>
                </a>
              <?php elseif(!$href_text && !$href): ?>
                <!-- nothing -->
              <?php else: ?>
                <a href="<?php echo $href; ?>" class="__btn-more-info">
                  <?php echo $href_text; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>



      <?php endwhile; ?>

      <!-- </div> -->
    </div>
  </div>

  <?php endif; ?>


</section>
