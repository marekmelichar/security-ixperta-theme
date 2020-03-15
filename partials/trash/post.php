<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php the_post_thumbnail( 'medium' ); ?>
      </div>
      <div class="col-md-8">



        <!-- Post header - title, author, tags -->
        <?php
          if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
          } elseif ( is_front_page() && is_home() ) {
            //the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            the_title( '<h3 class="entry-title">', '</h3>' );
          } else {
            the_title( '<h3 class="entry-title">', '</h3>' );
          }
        ?>

        <p>This post was written by <?php the_author(); ?></p>
        <?php the_date('Y-m-d', '<h3>', '</h3>'); ?>

        <div class="tags">
          <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        </div>



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

            wp_link_pages( array(
              'before'      => '<div class="page-links">' . __( 'Pages:', 'ixperta' ),
              'after'       => '</div>',
              'link_before' => '<span class="page-number">',
              'link_after'  => '</span>',
            ) );
            ?>
          </div><?php
        } ?>



        <!-- Pagination -->
        <?php
          if ( is_single() ) {
            ?>
            <div class="pagination">
              <?php echo previous_post_link(); ?>
              <?php echo next_post_link(); ?>
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
        ?>

      </div>
    </div>
  </div>
</article>
