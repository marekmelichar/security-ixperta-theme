<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
      <div class="col">

        <!-- Post header - title, author, tags -->
        <?php the_title( '<h1 class="heading">', '</h1>' ); ?>

      </div>
    </div>
    <div class="row">
      <div class="col">

        <div class="published-by">
          <?php the_date('d.m.Y', '<span>', '</span>'); ?> <?php //echo __('publikoval:'); ?> <?php //the_author(); ?>
        </div>

        <div class="featured-image">
          <?php if ( has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
        </div>

        <div class="tags inside-image">
          <?php //echo __('štítky:'); ?> <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col">

        <!-- Content or Excerpt -->
        <?php if ( is_category() || is_archive() ) {
          ?><div class="excerpt">
            <?php the_excerpt(); ?>
          </div><?php
        } else if ( is_front_page() || is_home() ) {
          ?><div class="excerpt">
            <?php the_excerpt(); ?>
          </div><?php
        } else {
          ?><div class="content">
            <?php
              /* translators: %s: Name of current post */
              the_content( sprintf(
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ixperta' ),
                get_the_title()
              ) );
            ?>


            <!-- Pagination -->
            <?php
              if ( is_single() ) {
                $prev = get_previous_post()->guid;
                $next = get_next_post()->guid;
                ?>

                <div class="the_pagination">
                  <?php if(get_previous_post()->post_content) { ?>
                    <div class="previous">
                      <a class="blue-text" href="<?php echo $prev; ?>"><i class="fas fa-chevron-left"></i></a>
                      <div class="head">
                        <?php echo previous_post_link('%link'); ?>
                      </div>
                      <div class="excerpt">
                        <a class="blue-text" href="<?php echo $prev; ?>"><?php echo wp_trim_words( get_previous_post()->post_content, 10, '...' ); ?></a>
                      </div>
                    </div>
                  <?php } ?>
                  <?php if(get_next_post()->post_content) { ?>
                    <div class="next">
                      <a class="blue-text" href="<?php echo $next; ?>"><i class="fas fa-chevron-right"></i></a>
                      <div class="head">
                        <?php echo next_post_link('%link'); ?>
                      </div>
                      <div class="excerpt">
                        <a class="blue-text" href="<?php echo $next; ?>"><?php echo wp_trim_words( get_next_post()->post_content, 10, '...' ); ?></a>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="clearfix"></div>
                </div>
                <?php
              } elseif ( is_front_page() && is_home() ) {
                ?>
                  <a href="<?php esc_url(the_permalink()); ?>">read more</a>
                <?php
              } else {
                ?>
                <a href="<?php esc_url(the_permalink()); ?>">read more</a>
                <?php
              }
            ?><!-- /Pagination -->







          </div><?php
        } ?>





      </div>
    </div>
  </div>
</article>
