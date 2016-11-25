<div class="wrapper col-1"<?php if(get_sub_field('bgcolor_enable') || get_sub_field('bgimage_enable')): ?> style="<?php if(get_sub_field('bgcolor_enable')): ?>background-color: <?php the_sub_field('bgcolor'); endif; ?>;<?php if(get_sub_field('bgimage_enable')): ?> background-image: url(<?php the_sub_field('bgimage');?>);<?php endif; ?>"<?php endif; ?>>

          <div class="container col-1__container">
            <div class="content col-1__content block">

<?php get_template_part('templates/blocks/default'); ?>

            </div>
          </div>
        </div>
