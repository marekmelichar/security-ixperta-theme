<section id="our_partners">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><?php echo the_field('our_partners_heading'); ?></h2>
        <h3><?php echo the_field('our_partners_subheading'); ?></h3>
      </div>
    </div>
    <div class="row our_partners__logos">
      <?php if( have_rows('our_partners_logo_carousel') ): ?>
        <?php while( have_rows('our_partners_logo_carousel') ): the_row(); ?>
          <?php $image = get_sub_field('image'); ?>
          <div class="col">
            <div class="svg">
              <?php get_template_part('svg/' . $image . '.svg'); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
