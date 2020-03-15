<div id="helpWidget" class="row no-gutters">
  <div class="col">
    <div class="row no-gutters">
      <h2><?php the_field('help_widget_heading', 'option'); ?></h2>
      <div class="close">
    		<?php get_template_part('svg/krizek.svg'); ?>
    	</div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-6 first-column">
        <div class="row no-gutters">
          <div class="col-5 text-center">
            <?php

              $help_widget_image_one = get_field('help_widget_image_one', 'option');

              if( !empty($help_widget_image_one) ): ?>
                <img src="<?php echo $help_widget_image_one['url']; ?>" alt="<?php echo $help_widget_image_one['alt']; ?>" />
              <?php endif;
            ?>
          </div>
          <div class="col-7">
            <h2 class="green"><?php the_field('help_widget_heading1', 'option'); ?></h2>
            <div class="to-be-flexed">
              <div class="svg">
        		    <?php get_template_part('svg/' . get_field('help_widget_icon1', 'option') . '.svg'); ?>
          	  </div>
              <div class="text"><a href="tel:<?php the_field('help_widget_text1', 'option'); ?>"><?php the_field('help_widget_text1', 'option'); ?></a></div>
            </div>
            <div class="to-be-flexed mt-1">
              <div class="svg">
        		    <?php get_template_part('svg/' . get_field('help_widget_icon2', 'option') . '.svg'); ?>
          	  </div>
              <div class="text"><a href="mailto:<?php the_field('help_widget_text2', 'option'); ?>"><?php the_field('help_widget_text2', 'option'); ?></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 second-column">
        <div class="row no-gutters">
          <div class="col-5 text-center">
            <?php

              $help_widget_image_two = get_field('help_widget_image_two', 'option');

              if( !empty($help_widget_image_two) ): ?>
                <img src="<?php echo $help_widget_image_two['url']; ?>" alt="<?php echo $help_widget_image_two['alt']; ?>" />
              <?php endif;
            ?>
          </div>
          <div class="col-7">
            <h2 class="green"><?php the_field('help_widget_heading2', 'option'); ?></h2>
            <div class="to-be-flexed">
              <div class="svg">
        		    <?php get_template_part('svg/' . get_field('help_widget_icon3', 'option') . '.svg'); ?>
          	  </div>
              <div class="text"><a href="tel:<?php the_field('help_widget_text3', 'option'); ?>"><?php the_field('help_widget_text3', 'option'); ?></a></div>
            </div>
            <div class="to-be-flexed mt-1">
              <div class="svg">
        		    <?php get_template_part('svg/' . get_field('help_widget_icon4', 'option') . '.svg'); ?>
          	  </div>
              <div class="text"><a href="mailto:<?php the_field('help_widget_text4', 'option'); ?>"><?php the_field('help_widget_text4', 'option'); ?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="the-side-handle">
    <h2 class="rotate"><?php the_field('help_widget_side_handle', 'option'); ?></h2>
  </div>
</div>
