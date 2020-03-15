<?php
/**
 * Block Name: How it works
 *
 * This is the template that displays the "how it works" block.
 */

// get image field (array)
$hiw_bg_image = get_field('hiw_bg_image');

// create id attribute for specific styling
$id = 'howitworks-' . $block['id'];

?>

<section id="<?php echo $id; ?>" style="background-image: url(<?php echo $hiw_bg_image['url']; ?>);">
  <h2><?php echo the_field('hiw_heading'); ?></h2>
  <h3><?php echo the_field('hiw_subheading'); ?></h3>

  <div class="row">
    <?php $i = 1; ?>
    <?php if( have_rows('hiw_repeater') ): ?>
      <?php while( have_rows('hiw_repeater') ): the_row(); ?>
        <?php $count = count(get_field('hiw_repeater')); ?>

        <?php
          $icon = get_sub_field('icon');
          $content = get_sub_field('content', false, false);
        ?>

        <div class="col">
          <div class="svg">
            <?php get_template_part('svg/' . $icon . '.svg'); ?>
          </div>
          <div class="content">
            <?php echo $content; ?>
          </div>
        </div>
        <?php if($i != $count) { ?>
          <i class="fas fa-chevron-right"></i>
        <?php } ?>

        <?php $i++; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>



<style type="text/css">
	#<?php echo $id; ?> {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 1rem;
    font-size: 0.75rem;
	}

  #<?php echo $id; ?> h2 {
    text-align: center;
  }

  #<?php echo $id; ?> h2:after {
    left: 50%;
    transform: translateX(-50%);
  }

  #<?php echo $id; ?> h3 {
    color: #001A70;
    text-align: center;
    font-size: 0.75rem;
  }

  #<?php echo $id; ?> .svg {
    margin: 0.5rem 0 0 0;
    text-align: left;
    height: 50px;
    position: relative;
  }

  #<?php echo $id; ?> svg {
    width: auto;
    text-align: left;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

  #<?php echo $id; ?> .fa-chevron-right {
    color: #00B388;
    font-size: 3rem;
    position: relative;
    top: 60px;
  }

</style>
