
                    <?php $i = 1; if(have_rows('items')): while (have_rows('items')): the_row(); ?>
                    <section id="accordion-<?php echo $i; ?>" class="accordion__item">
                        <h2 class="title"><a href="#accordion-<?php echo $i; ?>"><?php the_sub_field('title'); ?></a></h2>
                        <div class="text"><?php the_sub_field('text'); ?></div>
                    </section>
                    <?php $i++; endwhile; endif; ?>