<?php
/**
 * Block Name: Custom heading_and_arguments
 *
 *
 */

// create id attribute for specific styling
$id = 'customheadingandarguments-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <h1><?php the_field('heading') ?></h1>
      </div>
    </div>
    
    <div class="row">
      <?php if( have_rows('repeater') ): ?>
        <?php $i = 1 ?>
          <?php while( have_rows('repeater') ): the_row(); ?>

            <?php
              $content = get_sub_field('content', false, false);
            ?>

            <div class="col-md-3">
              <div class="content">
                <?php echo $content; ?>
              </div>
            </div>

            <?php if ($i % 4 == 0) { ?>
              </div>
              <div class="row">
            <?php } ?>
          
          <?php $i++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>




<style type="text/css">
  #<?php echo $id; ?> {
    padding: 2rem 0 0 0;
  }

	#<?php echo $id; ?> .content {
    padding: 1rem;
    background: #EFEFEF;
    text-align: center;
	}

  #<?php echo $id; ?> .row {
    margin-bottom: 2rem;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(1n) .content {
    background: #EFEFEF;
  }

  #<?php echo $id; ?> .row:nth-child(even) [class*="col"]:nth-child(2n) .content {
    background: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(1n) .content {
    background: #DFDFDF;
  }

  #<?php echo $id; ?> .row:nth-child(odd) [class*="col"]:nth-child(2n) .content {
    background: #EFEFEF;
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
