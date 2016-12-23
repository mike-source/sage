
<?php

  get_template_part('templates/components/page-header');

  while(have_posts()): the_post();

    if(have_rows('layout')):
      while(have_rows('layout')): the_row();

        if(get_row_layout() == '1_col') get_template_part('templates/layouts/1_col');
        if(get_row_layout() == '1-1_col') get_template_part('templates/layouts/1-1_col');
        if(get_row_layout() == '1-1-1_col') get_template_part('templates/layouts/1-1-1_col');
        if(get_row_layout() == '1-1-1-1_col') get_template_part('templates/layouts/1-1-1-1_col');
        if(get_row_layout() == '1-2_col') get_template_part('templates/layouts/1-2_col');
        if(get_row_layout() == '2-1_col') get_template_part('templates/layouts/2-1_col');
        if(get_row_layout() == '1-G_col') get_template_part('templates/layouts/1-G_col');
        if(get_row_layout() == 'G-1_col') get_template_part('templates/layouts/G-1_col');
        if(get_row_layout() == '1-3_col') get_template_part('templates/layouts/1-3_col');
        if(get_row_layout() == '3-1_col') get_template_part('templates/layouts/3-1_col');
        if(get_row_layout() == 'news-grid') get_template_part('templates/layouts/news-grid');
        if(get_row_layout() == 'callback-forms') get_template_part('templates/layouts/callback-forms');

      endwhile;
    endif;

  endwhile;

?>
