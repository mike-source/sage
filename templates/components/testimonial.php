
                <?php if(get_sub_field('copy')): ?><?php the_sub_field('copy'); ?><?php endif; ?>
                <?php if(get_sub_field('separate_titles')): ?><hr class="title-separator"><?php endif; ?>
                  <div class="testimoaner">
                    <?php if(get_sub_field('name')): ?><span class="name"> <?php the_sub_field('name'); ?></span><?php endif; ?>
                    <?php if(get_sub_field('name') && get_sub_field('position')): ?> / <?php endif; ?>
                    <?php if(get_sub_field('position')): ?><span class="position"><?php the_sub_field('position'); ?></span><?php endif; ?>
                  </div>
