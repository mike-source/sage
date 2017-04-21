<?php

  if(have_rows('components')): while(have_rows('components')): the_row();
      if(get_row_layout() == 'text_area'):
?>
            <section <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="text-area"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/text-area'); ?>

            </section>
<?php endif;

      if(get_row_layout() == 'testimonial'):
      ?>
            <section <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="text-area testimonial"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/testimonial'); ?>

            </section>
<?php endif;

      if(get_row_layout() == 'image'):
?>
            <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="image"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/image'); ?>

            </div>
<?php endif;

      if(get_row_layout() == 'image--title-overlay'):
?>
            <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="image image--title-overlay"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/image--title-overlay'); ?>

            </div>
<?php endif;

      if(get_row_layout() == 'image_slider'):
?>
            <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="slider"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/slider'); ?>

            </div>
<?php endif;

      if(get_row_layout() == 'video_embed'):
?>
      <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="video-embed"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
        <?php get_template_part('templates/components/video-embed'); ?>

      </div>
<?php endif;

      if(get_row_layout() == 'accordion'):
?>
            <div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="accordion"<?php if(get_sub_field('margin_bottom') != 0): ?> style="margin-bottom: <?php the_sub_field('margin_bottom'); ?>px;"<?php endif; ?>>
              <?php get_template_part('templates/components/accordion'); ?>

            </div>
<?php endif; ?>
<?php endwhile; endif; ?>
