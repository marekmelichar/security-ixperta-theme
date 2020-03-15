<section id="certificates_and_experience">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo the_field('certificates_and_experience_heading'); ?></h2>
        <h3><?php echo the_field('certificates_and_experience_subheading'); ?></h3>
      </div>
    </div>
  </div>
  <div class="container certificates_and_experience_repeater">
    <?php if( have_rows('certificates_and_experience_repeater') ): ?>

      <?php $index = 0; ?>

      <?php while( have_rows('certificates_and_experience_repeater') ): the_row(); ?>

        <?php $index = $index + 1; ?>

        <?php $head = get_sub_field('head'); ?>
        <?php $type_of_ixperta_logo = get_sub_field('type_of_ixperta_logo'); ?>
        <?php //$cert_logos = get_sub_field('cert_logos'); ?>

        <div class="row">
          <div class="col">
            <div class="snake_segment snake_segment_<?php echo $index; ?>">
              <div class="bg-ixperta-logo">
                <?php get_template_part('svg/' . $type_of_ixperta_logo . '.svg'); ?>
              </div>
              <div class="head">
                <?php echo $head; ?>
              </div>
              <div class="cert_logos">
                <?php if( have_rows('cert_logos') ): ?>
                  <?php while( have_rows('cert_logos') ): the_row(); ?>

                    <?php $additional_logos = get_sub_field('additional_logos'); ?>

                    <div class="svg">
                      <?php get_template_part('svg/' . $additional_logos . '.svg'); ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
