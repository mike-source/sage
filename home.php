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
            <h3 class="subtitle">Tips, Tricks &amp; Industry Insights</h3>
          </section>
        </div>
      </div>

      <?php echo get_template_part('archive'); ?>

      <!-- pagination here -->
      <div class="container col-1__container">
        <div class="block col-1__block content col-1__content">
          <?php the_posts_pagination(array(
              'mid_size'  => 2,
              'prev_text' => 'Older',
              'next_text' => 'Newer'
            ));
          ?>


        </div>
      </div>

      <?php get_template_part('templates/base/layout-builder'); ?>
