<?php
/**
 * Block Name: Custom heading_and_arguments
 *
 *
 */

// create id attribute for specific styling
$id = 'customheadingandarguments-' . $block['id'];

?>

<article id="<?php echo $id; ?>">
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <h1><?php the_field('heading') ?></h1>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <?php if( have_rows('repeater') ): ?>
        <?php $i = 1 ?>
          <?php while( have_rows('repeater') ): the_row(); ?>

            <?php
              $content = get_sub_field('content', false, false);
            ?>

            <div class="col-md-3">
              <div class="content <?php echo get_sub_field('show_background_color') ? "" : "no-bg-color" ?>">
                <?php echo $content; ?>
              </div>
            </div>

            <?php if ($i % 4 == 0) { ?>
              </div>
              <div class="row justify-content-center">
            <?php } ?>
          
          <?php $i++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</article>




<style type="text/css">
  #<?php echo $id; ?> {
    padding: 2rem 0 0 0;
  }

	#<?php echo $id; ?> .content {
    padding: 1rem;
    background-color: #EFEFEF;
    text-align: center;
  }

  #<?php echo $id; ?> .row {
    margin-bottom: 2rem;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(1n) .content {
    background-color: #EFEFEF;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(2n) .content {
    background-color: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(1n) .content {
    background-color: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(2n) .content {
    background-color: #EFEFEF;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(1n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(2n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(1n) .content.no-bg-color,
  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(2n) .content.no-bg-color {
    background-color: transparent;
  }

  







  @media (max-width: 767px) {
    
  }

</style>





<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function ($) {
      $(window).on('load', function () {
        var id = <?php echo json_encode($id); ?>;
        equalheight($(`#${id} .content`));
      })
    })(jQuery, window);
  })
</script>
