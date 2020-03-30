<article id="products" class="<?php the_field('bg_color_class_2'); ?>" style="background: <?php the_field('bg_color_2') ?>;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo the_field('bg_color_heading_2'); ?></h1>
      </div>
    </div>
  </div>

  <?php if( have_rows('bg_color_stripe_repeater_2') ): ?>
    <?php $i = 1 ?>

    <div class="container bg_color_stripe_repeater">
      <div class="row justify-content-center products_wrapper">

      <?php while( have_rows('bg_color_stripe_repeater_2') ): the_row();

        // vars
        $icon = get_sub_field('icon');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content', false, false);
        $href = get_sub_field('href');
        $href_text = get_sub_field('href_text');

        ?>

        <div class="col-md<?php echo count(get_field('repeater')) == 1 ? "" : "-4" ?> product text-center">
          <?php if($icon): ?>
            <div class="svg img">
              <?php if (strpos($icon['url'], '.svg') == true) { ?>
                <?php echo file_get_contents($icon['url']); ?>
              <?php } else { ?>
                <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
              <?php } ?>
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
          
          <a href="<?php echo $href; ?>" class="__btn-more-info">
            <?php echo $href_text; ?>
          </a>
        </div>

        <?php if ($i % 3 == 0 && count(get_field('repeater')) > 4 ) { ?>
          </div>
          <div class="row justify-content-center">
        <?php } ?>

        <?php $i++; ?>
      <?php endwhile; ?>
      
    </div>
  </div>

  <?php endif; ?>


</article>
