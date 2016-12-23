
                <div class="owl-carousel image-slider image-slider--desktop">
                    <?php $i = 1; if(have_rows('slides')): while (have_rows('slides')): the_row(); ?>
                    <div class="image-slider__slide">

                        <?php if(get_sub_field('link')): ?><a href="<?php the_sub_field('link'); ?>"><?php endif; ?>
                          <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt_tag'); echo ' (Slide ' . $i . ')'; ?>">
                        <?php if(get_sub_field('link')): ?></a><?php endif; ?>
                    </div>
                    <?php $i++; endwhile; endif; ?>
                </div>
