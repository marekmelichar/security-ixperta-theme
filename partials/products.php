<article id="products" class="<?php the_field('bg_color_class_2'); ?>" style="background: <?php the_field('bg_color_2') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('bg_color_heading_2'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater_2') ): ?>

    <div class="container bg_color_stripe_repeater">
      
      <!-- <div class="prevArrow">
        <i class="fas fa-chevron-left"></i>
      </div> -->

      <div class="_row products_wrapper">


      <?php while( have_rows('bg_color_stripe_repeater_2') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="_col product text-center">
        <?php if($icon): ?>
          <div class="svg img">
            <?php //get_template_part('svg/' . $icon . '.svg'); ?>
            <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
          </div>
          <?php endif; ?>

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
          
          <?php if(!$href_text && $href): ?>
            <!-- <a class="arrow-green-circle" href="<?php echo $href; ?>">
              <i class="fas fa-chevron-right"></i>
            </a> -->
          <?php elseif(!$href_text && !$href): ?>
          <?php else: ?>
            <a href="<?php echo $href; ?>" class="__btn-more-info">
              <?php echo $href_text; ?>
            </a>
          <?php endif; ?>


        </div>



      <?php endwhile; ?>

      
    </div>
        
    <!-- <div class="nextArrow">
      <i class="fas fa-chevron-right"></i>
    </div> -->
    
  </div>

  <?php endif; ?>


</article>
