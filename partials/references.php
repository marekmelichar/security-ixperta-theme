<article id="references">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1><?php echo the_field('references_heading'); ?></h1>
      </div>
    </div>

    <!-- <div class="prevArrow"></div> -->
    <div class="prevArrow">
      <i class="fas fa-chevron-left"></i>
    </div>

    <div class="row references__logos">

      <?php if( have_rows('references_logo_carousel') ): ?>
        <?php while( have_rows('references_logo_carousel') ): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <?php //$heading = get_sub_field('heading'); ?>
          <?php //$content = get_sub_field('content'); ?>

          <div class="col">
            <?php if($image): ?>
              <div class="svg img">
                <?php if (strpos($image['url'], '.svg') == true) { ?>
                  <?php echo file_get_contents($image['url']); ?>
                <?php } else { ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                <?php } ?>
              </div>
            <?php endif; ?>
            <!-- <div class="heading">
              <h3 class="head"><?php //echo $heading; ?></h3>
            </div> -->
            <!-- <div class="content">
              <?php //echo $content; ?>
            </div> -->
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <!-- <div class="nextArrow"></div> -->
    <div class="nextArrow">
      <i class="fas fa-chevron-right"></i>
    </div>

  </div>
</article>
