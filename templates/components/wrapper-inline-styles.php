<?php

if(get_sub_field('bgcolor_enable') || get_sub_field('bgimage_enable') || get_sub_field('margin_top')):

    ?> style="<?php
    if(get_sub_field('margin_top')): ?>margin-top: <?php the_sub_field('margin_top'); ?>px;<?php endif;
    if(get_sub_field('bgcolor_enable')): ?>background-color: <?php the_sub_field('bgcolor'); ?>;<?php endif;
    if(get_sub_field('color')): ?> color: <?php the_sub_field('color'); ?>;<?php endif;
    if(get_sub_field('bgimage_enable')): ?> background-image: url(<?php the_sub_field('bgimage');?>);<?php endif;
    ?>"<?php

endif; ?>
