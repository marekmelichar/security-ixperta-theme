<article id="about_us" class="<?php echo get_field('show_tiles') ? "show_tiles" : "" ?>" style="background-color: <?php echo get_field('bg_color') ? the_field('bg_color') : "" ?>; color: <?php echo get_field('text_color') ? the_field('text_color') : "" ?>; ">
  <div class="container">

    <?php if(get_field('show_tiles')) { ?>
      <div class="row about_us_tiles justify-content-center">

        <?php if( have_rows('tiles_repeater') ): ?>
          <?php while( have_rows('tiles_repeater') ): the_row();
            // vars
            $content = get_sub_field('content');
            $button_text = get_sub_field('button_text');
            $href = get_sub_field('href');
            ?>

            <!-- if there is only one column, make it full width -->
            <div class="col-md<?php echo count(get_field('tiles_repeater')) == 1 ? "-6" : "" ?> about_us_tile">
              <div class="content">
                <?php echo $content; ?>
              </div>
              <?php if($button_text && $href) { ?>
                <div class="footer">
                  <a href="<?php echo $href; ?>">
                    <?php echo $button_text; ?>
                  </a>
                </div>
              <?php } ?>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php } ?>

    <?php if(get_field('about_us_heading')) { ?>
      <div class="row">
        <div class="col">
            <h1><?php echo the_field('about_us_heading'); ?></h1>
          <?php if(get_field('about_us_subheading')) { ?>
            <h2><?php echo the_field('about_us_subheading'); ?></h2>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <div class="row justify-content-center members">

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

            <?php if(($index % 2) == 1) { ?>
              </div>
              <div class="row justify-content-center members">
            <?php } ?>

              <div class="col-md member <?php if($count == 1) { ?>only_one_col<?php } ?>">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div>
                  <div class="col-md-8">
                    <h2 style="color: <?php echo get_sub_field('h2_color') ? get_sub_field('h2_color') : "" ?>;">
                      <?php echo $name; ?>
                      <div class="phone">
                        <a href="tel:<?php echo $phone; ?>" style="color: <?php echo get_sub_field('h2_color') ? get_sub_field('h2_color') : "" ?>;"><?php echo $phone; ?></a>
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
</article>
