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
          <div class="row">
            <div class="col">
            <?php if($heading): ?>
                <div class="heading">
                  <?php if($href): ?><a href="<?php echo $href; ?>"><?php endif; ?>
                    <h3 class="head"><?php echo $heading; ?></h3>
                  <?php if($href): ?></a><?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if($content): ?>
                <div class="content">
                  <?php echo $content; ?>
                </div>
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
