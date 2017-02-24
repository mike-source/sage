<div class="entry-meta">
  <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?php the_time('F j Y'); ?></time>
  <p class="byline author vcard"><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php the_author(); ?></a></p>
  <p>Category : <?php the_category(', '); ?></p>
  <p>Tags : <?php the_tags('', ', '); ?></p>
</div>
