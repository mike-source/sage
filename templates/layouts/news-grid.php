<div class="container col-1__container">
  <div class="block col-1__block">
      <section class="text-area">
        <h2 class="title">Our Latest News</h2>
        <h3 class="subtitle">A roundup of our latest news and events</h3>
      </section>
  </div>
</div>

<div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="wrapper col-1-1-1 latest-news">
  <div class="container col-1-1-1__container">
    <?php
    $args = array(
        'posts_per_page' => 6
    );

    // the query
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()): ?>

    <!-- the loop -->
<?php $i = 1; while($the_query->have_posts()): $the_query->the_post(); ?>
    <div class="block col-1-1-1__block block--<?php echo $i; ?> post">
      <div class="inner">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if(has_post_thumbnail()): the_post_thumbnail(); else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/500x400.png" alt="placeholder thumbnail" class="attachment-post-thumbnail placeholder">
<?php endif; ?>
        </a>
        <time class="date" datetime="<?= get_post_time('c', true); ?>"><?php the_time('F j Y'); ?></time>
        <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
<?php $i++; endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    <?php wp_reset_postdata(); ?>

<?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </div>
</div>
