
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
              <h2 class="subtitle"><?php the_sub_field('subtitle'); ?></h2>
              <?php if(get_sub_field('separate_titles')): ?><hr class="separator"><?php endif; ?>

              <?php the_sub_field('copy'); ?>
