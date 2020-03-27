<article id="posts_query_stripe">
  <div class="container p-0">
    <h1><?php echo the_field('posts_query_heading') ?></h1>

    <div class="row blocks">
      <?php $post_objects = get_field('posts_query_posts');
        if( $post_objects ): ?>

            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>

                <?php setup_postdata($post); ?>

                <?php $post_custom_excerpt_image = get_field('post_custom_excerpt_image', $post); ?>

                <div class="col-md">
                  <div class="row no-gutters">
                    <div class="col-6 pr-3">
                      <img src="<?php echo $post_custom_excerpt_image['url']; ?>" alt="<?php echo $post_custom_excerpt_image['alt']; ?>">
                    </div>
                    <div class="col-6">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ?></h3>
                      </a>
                      <div class="published-date">
                        <?php //the_date('d.m.Y', '<span>', '</span>'); ?>
                        <?php echo get_the_date(); ?>
                      </div>
                      <div class="excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                      </div>
                      <a class="arrow-green-circle" href="<?php the_permalink(); ?>">
                        <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

            <?php endforeach; ?>

        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
    </div>
  </div>
</article>
