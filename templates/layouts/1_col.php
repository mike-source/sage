<div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="wrapper col-1"<?php if(get_sub_field('bgcolor_enable') || get_sub_field('bgimage_enable')): ?> style="<?php if(get_sub_field('bgcolor_enable')): ?>background-color: <?php the_sub_field('bgcolor'); endif; ?>;<?php if(get_sub_field('bgimage_enable')): ?> background-image: url(<?php the_sub_field('bgimage');?>);<?php endif; ?>"<?php endif; ?>>

          <div class="container col-1__container">
            <div class="block col-1__block content col-1__content">

<?php if(have_rows('block')): while(have_rows('block')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

            </div>
          </div>

      </div>
