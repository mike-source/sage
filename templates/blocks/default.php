<?php

  if(have_rows('components')): while(have_rows('components')): the_row();
      if(get_row_layout() == 'text_area'):
?>
              <section <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="text-area">
                <?php get_template_part('templates/components/text-area'); ?>

              </section>
<?php endif;

      if(get_row_layout() == 'image'):
?>
              <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="image">
                <?php get_template_part('templates/components/image'); ?>

              </div>
<?php endif;

      if(get_row_layout() == 'image_slider'):
?>
              <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="slider">
                <?php get_template_part('templates/components/slider'); ?>

              </div>
<?php endif;

      if(get_row_layout() == 'accordion'):
?>
              <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="accordion">
                <?php get_template_part('templates/components/accordion'); ?>

              </div>
<?php endif; ?>
<?php endwhile; endif; ?>
