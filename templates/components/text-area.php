
                <?php if(get_sub_field('title')): ?><h2 class="title <?php if(get_sub_field('large_titles')): ?>h1<?php endif; ?>"> <?php the_sub_field('title'); ?></h2><?php endif; ?>
                <?php if(get_sub_field('subtitle')): ?><h3 class="subtitle <?php if(get_sub_field('large_titles')): ?>h2<?php endif; ?>"><?php the_sub_field('subtitle'); ?></h3><?php endif; ?>
                <?php if(get_sub_field('separate_titles')): ?><hr class="title-separator"><?php endif; ?>

                <?php if(get_sub_field('copy')): ?><?php the_sub_field('copy'); ?><?php endif; ?>
