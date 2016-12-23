<div class="entry-meta">
  <?php the_category(', '); ?> /
  <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?php the_time('F j Y'); ?></time> /
  <?php the_tags('', ', '); ?>
  <p class="byline author vcard">By <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php get_the_author(); ?></a></p>
</div>
