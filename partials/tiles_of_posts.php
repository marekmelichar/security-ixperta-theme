<section id="tiles_of_posts" class="tiles-of-posts">
    <div class="container">
      <div class="row">

        <?php

          $post_objects = get_field('tiles_of_posts');

          if( $post_objects ): ?>
            <?php $index = 1; ?>
            <?php foreach( $post_objects as $post_object): ?>

              <?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $post_object); ?>
              <?php $post_custom_excerpt_heading = get_field('post_custom_excerpt_heading', $post_object); ?>
              <?php $post_custom_excerpt_subheading = get_field('post_custom_excerpt_subheading', $post_object); ?>
              <?php $post_custom_excerpt_description = get_field('post_custom_excerpt_description', $post_object); ?>

              <?php if($index == 1) { ?>
                <div class="tile tile-1 col-md-6" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 2) { ?>
                <div class="tile tile-2 col-md-3" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 3) { ?>
                <div class="tile tile-3 col-md-3" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } elseif($index == 4) { ?>
                <div class="tile tile-4 col-md-12" data-link="<?php echo get_permalink($post_object); ?>">
                  <a href="<?php echo get_permalink($post_object); ?>" class="bg bg-img" style="background-image: url(<?php echo $post_custom_excerpt_image['url']; ?>);" data-link="<?php echo get_permalink($post_object); ?>"></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="heading"><?php echo $post_custom_excerpt_heading ?></div></a>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="subheading"><?php echo $post_custom_excerpt_subheading ?></div></a>
                  <div class="tags">
                    <?php echo show_tags($post_object) ?>
                  </div>
                  <a href="<?php echo get_permalink($post_object); ?>"><div class="description"><?php echo $post_custom_excerpt_description; ?></div></a>
                  <a class="link" href="<?php echo get_permalink($post_object); ?>">
                    <div class="arrow-green-circle">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
              <?php } ?>

              <?php $index++; ?>
            <?php endforeach; ?>
          <?php endif; ?>

      </div>
    </div>
  </div>
</section>
