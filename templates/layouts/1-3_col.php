
      <div <?php get_template_part('templates/components/wrapper-id'); ?>class="wrapper wrapper--<?php the_sub_field('width'); ?> col-1-3"<?php get_template_part('templates/components/wrapper-inline-styles'); ?>>
        <div class="container col-1-3__container">
          <div class="block col-1-3__block block--1">

<?php if(have_rows('block_1')): while(have_rows('block_1')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

          </div>
          <div class="block col-1-3__block block--2">

<?php if(have_rows('block_2')): while(have_rows('block_2')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

          </div>
        </div>
      </div>
