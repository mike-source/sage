<?php get_template_part('templates/components/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">Sorry, no results were found.</div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
