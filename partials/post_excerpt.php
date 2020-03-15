<div class="the-excerpt">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>
      <div class="col-md-8">

        <div class="row">
          <div class="col">
            <a href="<?php esc_url(the_permalink()); ?>"><?php the_title( '<h1 class="heading for-excerpt">', '</h1>' ); ?></a>
          </div>
        </div>

        <div class="row">
          <div class="col">

            <div class="excerpt">
              <?php the_excerpt(); ?>
            </div>

            <a class="jelito" href="<?php esc_url(the_permalink()); ?>"><?php echo __('Přečíst celý článek') ?></a>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
