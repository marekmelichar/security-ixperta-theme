<section id="about_us">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php if(get_field('about_us_heading')) { ?>
          <h2><?php echo the_field('about_us_heading'); ?></h2>
        <?php } ?>
        <?php if(get_field('about_us_subheading')) { ?>
          <h3><?php echo the_field('about_us_subheading'); ?></h3>
        <?php } ?>
      </div>
    </div>

    <div class="row members">

      <?php $index = 1; ?>

      <?php $count = count(get_field('about_us_repeater')); ?>

      <?php if( have_rows('about_us_repeater') ): ?>
        <?php while( have_rows('about_us_repeater') ): the_row();

          // vars
          $image = get_sub_field('image');
          $name = get_sub_field('name');
          $description = get_sub_field('description');
          $phone = get_sub_field('phone');
          $email = get_sub_field('email');

          ?>

            <?php if(($index % 3) == 1) { ?>
              </div>
              <div class="row members">
            <?php } ?>

              <div class="col-md-<?php echo 12 / $count ?> member <?php if($count == 1) { ?>only_one_col<?php } ?>">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div>
                  <div class="col-md-8">
                    <h2>
                      <?php echo $name; ?>
                      <div class="phone">
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                      </div>
                    </h2>
                    <div class="desc"><?php echo $description; ?></div>
                    
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



                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            <?php $index++; ?>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>
    </div>
  </div>
</section>
