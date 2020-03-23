<?php
/**
 * Block Name: reference-banner
 *
 * This is the template that displays the "reference-banner" block.
 */

// get image field (array)
$ref_banner_image = get_field('ref_banner_image');

// create id attribute for specific styling
$id = 'referencebanner-' . $block['id'];

?>

<section id="<?php echo $id; ?>">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php echo get_field('ref_banner_heading'); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">

        <?php if (strpos($ref_banner_image['url'], '.svg') == true) { ?>
          <div class="svg">
            <?php echo file_get_contents($ref_banner_image['url']); ?>
          </div>
        <?php } else { ?>
          <div class="image">
            <img src="<?php echo $ref_banner_image['url'] ?>" alt="<?php echo $ref_banner_image['alt'] ?>">
          </div>
        <?php } ?>

      </div>
      <div class="col-md-9">
        <div class="content">
          <?php echo get_field('ref_banner_content'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="breadcrumbs"></div>

</section>



<style type="text/css">

	#<?php echo $id; ?> {
    margin: 2rem 0;
	}

  #<?php echo $id; ?> .svg {
    /* width: 33%; */
  }

  #<?php echo $id; ?> svg {
    width: 100%;
    height: auto;
  }

  #<?php echo $id; ?> .tags {
    text-align: left;
    margin-top: 1.5rem;
  }

  #<?php echo $id; ?> .tags a {
    background-color: #DFDFDF;
    border-radius: 25px;
    padding: 0.5rem 2rem 0.5rem 3rem;
    margin: 0 0.5rem;
    position: relative;
    color: #001A70;
  }

  #<?php echo $id; ?> .tags a:before {
    content: '#';
    position: absolute;
    left: 2rem;
  }

  @media (max-width: 767px) {

    #<?php echo $id; ?> .tags a {
      display: inline-block;
      padding: 0.5rem 1rem 0.5rem 1.5rem;
      margin: 0.25rem 0.5rem;
    }

    #<?php echo $id; ?> .tags a:before {
      left: 0.75rem;
    }

    #<?php echo $id; ?> .svg {
      width: 60%;
      margin: 1rem auto;
    }
  }

</style>
