<div class="news--small">
    <h3>Latest News</h3>
    <hr>

    <?php
    $args = array(
        'posts_per_page' => 4
    );

    // the query
    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()): ?>

      <!-- pagination here -->

      <!-- the loop -->
      <?php $i = 1; while($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="post post--small">
            <div class="image-container">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if(has_post_thumbnail()): the_post_thumbnail(); else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/dist/images/500x400.png" alt="placeholder thumbnail" class="attachment-post-thumbnail placeholder">
                <?php endif; ?>
              </a>
            </div>
            <div class="post-details">
              <time class="date" datetime="<?= get_post_time('c', true); ?>"><?php the_time('F j Y'); ?></time>
              <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <hr>
          </div>
      <?php $i++; endwhile; ?>
      <!-- end of the loop -->

      <!-- pagination here -->

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

</div>
