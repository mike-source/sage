<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="wrapper wrapper--post-header col-1">
      <div class="container col-1__container">
        <div class="block block--post-header">
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/components/entry-meta'); ?>
          </header>
          <?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
        </div>
      </div>
    </div>

    <div class="wrapper col-3-1">
      <div class="container col-3-1__container">
        <div class="block block-1 content col-3-1__content">

<?php get_template_part('templates/content/content-single', get_post_type()); ?>

          <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </footer>

<?php comments_template('/templates/components/comments.php'); ?>

        </div>
        <div class="block block-2 sidebar col-3-1__sidebar">

<?php get_template_part('templates/components/sidebar'); ?>

        </div>
      </div>
    </div>

    </article>
  <?php endwhile; ?>
