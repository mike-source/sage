<?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <div class="wrapper wrapper--normal wrapper--post-header col-1">
          <div class="container col-1__container">
            <div class="block block--post-header">
              <?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
            </div>
          </div>
        </div>

        <div class="wrapper wrapper--normal col-1-2">
          <div class="container col-1-2__container">
            <div class="block col-1-2__block block--1 sidebar col-1-2__sidebar">

    <?php get_template_part('templates/components/sidebar'); ?>

            </div>
            <div class="block col-1-2__block block--2">

    <?php get_template_part('templates/content/content-single', get_post_type()); ?>

              <footer>
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
              </footer>

    <?php comments_template('/templates/components/comments.php'); ?>

            </div>
          </div>
        </div>
      </article>
<?php endwhile; ?>
