<section id="references">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo the_field('references_heading'); ?></h2>
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
            <div class="svg">
              <?php get_template_part('svg/' . $image . '.svg'); ?>
            </div>
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
</section>
