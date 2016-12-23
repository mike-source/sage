<?php
/**
 * WORDPRESS'S infinitely confusing POSTS archive template which uses home.php for literally no logical reason
 * See: https://make.wordpress.org/themes/2014/06/28/correct-handling-of-static-front-page-and-custom-blog-posts-index-template/
 */
?>


<div class="container col-1__container">
    <div class="block col-1__block content col-1__content">
        <section class="text-area">
          <h2 class="title">News</h2>
          <h3 class="subtitle">A roundup of our latest news and events</h3>
          <hr>
        </section>
    </div>
</div>

<?php echo get_template_part('archive'); ?>

<!-- pagination here -->
<div class="container col-1__container">
    <div class="block col-1__block content col-1__content">
        <section class="text-area">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => 'Older',
                'next_text' => 'Newer'
              ));
            ?>
        </section>
    </div>
</div>

<?php

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

      endwhile;
    endif;

?>
