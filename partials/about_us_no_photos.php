<section id="about_us_no_photos" class="container">

    <div class="row members">

      <?php $index = 1; ?>

      <?php if( have_rows('about_us_no_photos_repeater') ): ?>
        <?php while( have_rows('about_us_no_photos_repeater') ): the_row();

          // vars
          $image = get_sub_field('image');
          $name = get_sub_field('name');
          $description = get_sub_field('description');
          $phone = get_sub_field('phone');
          $email = get_sub_field('email');

          ?>

            <div class="col member <?php if($index == 1) { ?>only_one_col<?php } ?>">
              <div class="row">
                <div class="col">
                  <h2><?php echo $name; ?></h2>
                  <div class="desc"><?php echo $description; ?></div>
                  <div class="phone">
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                  </div>
                  <div class="mail">
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                  </div>

                  <?php if( have_rows('social_media_icons') ): ?>
                    <?php while( have_rows('social_media_icons') ): the_row();

                      // vars
                      $social_icon = get_sub_field('social_icon');
                      $social_href = get_sub_field('social_href');

                      ?>

                      <ul class="social-list">
                        <?php if($social_icon): ?>
                          <li>
                            <a href="<?php echo $social_href; ?>">
                              <div class="social-icon svg">
                                <?php get_template_part('svg/' . $social_icon . '.svg'); ?>
                              </div>
                            </a>
                          </li>
                        <?php endif; ?>
                      </ul>

                      <?php $index++; ?>

                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>



        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
