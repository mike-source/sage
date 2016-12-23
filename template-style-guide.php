<?php
/**
 * Template Name: Style Guide Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content/content', 'style-guide'); ?>
<?php endwhile; ?>
