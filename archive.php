<div <?php if(get_sub_field('element_id')): ?>id="<?php echo str_replace(' ', '-', strtolower(get_sub_field('element_id'))); ?>" <?php endif;?>class="wrapper col-1-1-1 archive">

    <div class="container col-1-1-1__container">

        <?php if(have_posts()): ?>

          <!-- the loop -->
          <?php $i = 1; while(have_posts()): the_post(); ?>
            <div class="block col-1-1-1__block-1 post">
              <div class="inner">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if(has_post_thumbnail()): the_post_thumbnail(); else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/500x400.png" alt="placeholder thumbnail" class="attachment-post-thumbnail placeholder">
                  <?php endif; ?>
                </a>
                <time class="date" datetime="<?= get_post_time('c', true); ?>"><?php the_time('F j Y'); ?></time>
                <h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <hr>
                <?php the_excerpt(); ?>
              </div>
            </div>
          <?php $i++; endwhile; ?>
          <!-- end of the loop -->

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>

</div>
