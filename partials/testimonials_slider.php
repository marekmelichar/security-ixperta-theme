<section id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo the_field('testimonials_header'); ?></h2>
        <h3><?php echo the_field('testimonials_subheader'); ?></h3>
      </div>
    </div>
  </div>

  <div class="custom-prev">
    <?php get_template_part('svg/testimonial_sipka_doleva.svg'); ?>
  </div>
  <div class="custom-next">
    <?php get_template_part('svg/testimonial_sipka_doprava.svg'); ?>
  </div>

  <!-- Testimonials slider -->

  <?php if( have_rows('testimonials_slider') ): ?>

    <div id="testimonials_slider">

      <?php while( have_rows('testimonials_slider') ): the_row();

        // vars
        $image = get_sub_field('image');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content');

        ?>

        <div class="testimonial">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="testimonial__image">
                  <img src="<?php echo $image; ?>" alt="testimonial-image">
                </div>
              </div>
              <div class="col-md-9"></div>
            </div>
          </div>
          <div class="container">
            <div class="row white-bg">
              <div class="col-md-3"></div>
              <div class="col-md-9">
                <div class="testimonial__body">
                  <div class="testimonial__heading">
                    <h2><?php echo $heading; ?></h2>
                  </div>
                  <div class="testimonial__content">
                    <?php echo $content; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

    </div>

  <?php endif; ?>
</section>
