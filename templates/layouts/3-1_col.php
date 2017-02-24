
      <div <?php get_template_part('templates/components/wrapper-id'); ?>class="wrapper wrapper--<?php the_sub_field('width'); ?> col-G-1"<?php get_template_part('templates/components/wrapper-inline-styles'); ?>>
        <div class="container col-G-1__container">
          <div class="block col-G-1__block block--1">

<?php if(have_rows('block_1')): while(have_rows('block_1')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

          </div>
          <div class="block col-G-1__block block--2">

<?php if(have_rows('block_2')): while(have_rows('block_2')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

          </div>
        </div>
      </div>
