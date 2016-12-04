
                <h2 class="title"><?php the_sub_field('title'); ?></h2>
                <h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
                <?php if(get_sub_field('separate_titles')): ?><hr class="title-separator"><?php endif; ?>

                <?php the_sub_field('copy'); ?>
