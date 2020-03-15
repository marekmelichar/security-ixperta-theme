<section id="management">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php the_field('management_headline') ?></h2>
      </div>
    </div>
  </div>

  <?php if( have_rows('management_people_first_line') ): ?>

    <div id="management_people_first_line" class="container management_people">

      <div class="row height">

        <?php while( have_rows('management_people_first_line') ): the_row();

          // vars
          $headline_icon = get_sub_field('headline_icon');
          $headline = get_sub_field('headline');
          $image = get_sub_field('photo');
          $name = get_sub_field('full_name');
          $person_details = get_sub_field('person_details');
          $identifier = get_sub_field('identifier');
          $detail_content = get_sub_field('detail_content');

          ?>

          <div id="<?php echo $identifier; ?>" class="management-member <?php echo $identifier; ?>">
            <div class="text-center short-wrapper">
              <div class="image" onClick="ga('send', 'event', '<?php echo $name; ?>', 'click', 'product-tag', 1);">
                <img src="<?php echo $image; ?>" alt="<?php echo $identifier; ?> icon" />
                <div class="the-little-plus">
                  <?php get_template_part('svg/button_plus_green.svg'); ?>
                </div>
              </div>
              <h2><?php echo $name; ?></h2>
              <div class="person-details"><?php echo $person_details; ?></div>
            </div>
            <div class="detail-right management-member-detail">
              <a href="#" class="close-detail">
                <?php get_template_part('svg/krizek.svg'); ?>
              </a>
              <span class="close-detail-mobile">
                <?php get_template_part('svg/mobile_sipka_close.svg'); ?>
              </span>
              <p><?php echo $detail_content; ?></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div>
    </div>

  <?php endif; ?>

</section>
