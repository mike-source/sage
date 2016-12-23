
                <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt_tag'); ?>" class="content-img">

                <?php if(get_sub_field('title') || get_sub_field('subtitle') || get_sub_field('button_enable')): ?><div class="overlay"><?php endif; ?>

                  <?php if(get_sub_field('title')):
                    if(get_sub_field('use_as_page_header')): echo '<h1'; else: echo '<h2'; endif; ?> class="title"><?php the_sub_field('title');
                    if(get_sub_field('use_as_page_header')): echo '</h1>'; else: echo '</h2>'; endif; ?>
                  <?php endif; ?>

                  <?php if(get_sub_field('subtitle')):
                    if(get_sub_field('use_as_page_header')): echo '<h2'; else: echo '<h3'; endif; ?> class="subtitle"><?php the_sub_field('subtitle');
                    if(get_sub_field('use_as_page_header')): echo '</h2>'; else: echo '</h3>'; endif; ?>
                  <?php endif; ?>

                  <?php if(get_sub_field('button_enable')): ?><a href="<?php the_sub_field('link'); ?>" class="btn btn--inv"><?php the_sub_field('btn_text'); ?></a><?php endif; ?>

                <?php if(get_sub_field('title') || get_sub_field('subtitle') || get_sub_field('button_enable')): ?></div><?php endif; ?>
