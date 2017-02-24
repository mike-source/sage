<header>
  <h1 class="h2 entry-title"><?php the_title(); ?></h1>
  <?php get_template_part('templates/components/entry-meta'); ?>
</header>

<?php get_template_part('templates/components/news--small'); ?>

<?php dynamic_sidebar('sidebar-primary'); ?>
