<?php
/**
 * Block Name: Little call to action
 *
 * This is the template that displays the "Little call to action" block.
 */

// create id attribute for specific styling
$id = 'little_cta-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <h3 class="green-text"><?php echo the_field('little_cta_heading'); ?></h3>
  <p class="blue-text"><?php echo the_field('little_cta_subheading'); ?></p>
  <a href="<?php echo the_field('little_cta_href'); ?>">
    <button class="btn btn-success rounded-corners" type="button"><?php echo the_field('little_cta_button'); ?></button>
  </a>
</section>



<style type="text/css">
	#<?php echo $id; ?> {
    padding: 1.5rem 0;
    position: relative;
    font-size: 0.75rem;
    text-align: center;
	}

  #<?php echo $id; ?> h3 {
    text-align: center;
  }

  #<?php echo $id; ?> button {
    font-size: 0.875rem;
  }

</style>
