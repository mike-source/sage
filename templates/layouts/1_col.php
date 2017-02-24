
      <div <?php get_template_part('templates/components/wrapper-id'); ?>class="wrapper wrapper--<?php the_sub_field('width'); ?> col-1"<?php get_template_part('templates/components/wrapper-inline-styles'); ?>>
        <div class="container col-1__container">
          <div class="block col-1__block">

<?php if(have_rows('block')): while(have_rows('block')): the_row(); get_template_part('templates/blocks/default'); endwhile; endif; ?>

          </div>
        </div>
      </div>
