

                    <?php $id = str_replace(' ', '-', strtolower(get_sub_field('element_id'))); $i = 1; if(have_rows('items')): while (have_rows('items')): the_row(); ?>
                    <section id="accordion-<?php echo $id; ?>-<?php echo $i; ?>" class="accordion__item">
                        <i class="accordion__icon accordion__icon--minus fa fa-minus" aria-hidden="true"></i>
                        <i class="accordion__icon accordion__icon--plus fa fa-plus" aria-hidden="true"></i>
                        <h2 class="title"><?php the_sub_field('title'); ?></h2>
                        <div class="text"><?php the_sub_field('text'); ?></div>
                    </section>
                    <?php $i++; endwhile; endif; ?>
