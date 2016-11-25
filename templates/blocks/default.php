<?php

if(have_rows('block')): while(have_rows('block')): the_row();
  if(have_rows('components')): while(have_rows('components')): the_row();

    if(get_row_layout() == 'text_area'): get_template_part('templates/components/text-area'); endif;
    if(get_row_layout() == 'image'): get_template_part('templates/components/image'); endif;

  endwhile; endif;
endwhile; endif;

?>
