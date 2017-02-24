<?php
  $columns = '1-1-1'; // by default
  $noOfColumns = get_sub_field('no_of_columns');
  switch($noOfColumns):
    case 2:
      $columns = '1-1';
      break;
    case 4:
      $columns = '1-1-1-1';
      break;
  endswitch;
?>

      <div <?php get_template_part('templates/components/wrapper-id'); ?>class="box-grid wrapper wrapper--<?php the_sub_field('width'); ?> wrapper--box-grid col-<?php echo $columns; ?>"<?php get_template_part('templates/components/wrapper-inline-styles'); ?>>
        <div class="container container--box-grid col-<?php echo $columns; ?>__container">
<?php $i = 1; if(have_rows('boxes')): while(have_rows('boxes')): the_row(); ?>

          <div class="box-grid__box block col-<?php echo $columns; ?>__block block--<?php echo $i; ?>">
            <div class="box-grid__inner" <?php if(get_sub_field('bg_image')): ?>style="background-image: url('<?php the_sub_field('bg_image'); ?>');"<?php endif; ?>>
              <?php if(get_sub_field('fg_image')): ?><img src="<?php the_sub_field('fg_image'); ?>" alt="company logo" class="fg-image"><?php endif; ?>
              <?php if(get_sub_field('title')): ?><h2 class="title <?php if(get_sub_field('large_titles')): ?>h1<?php endif; ?>"> <?php the_sub_field('title'); ?></h2><?php endif; ?>
              <?php if(get_sub_field('subtitle')): ?><h3 class="subtitle <?php if(get_sub_field('large_titles')): ?>h2<?php endif; ?>"><?php the_sub_field('subtitle'); ?></h3><?php endif; ?>
              <?php if(get_sub_field('separate_titles')): ?><hr class="title-separator"><?php endif; ?>
              <div class="copy">
                <?php if(get_sub_field('copy')): ?><?php the_sub_field('copy'); ?><?php endif; ?>
              </div>
            </div>
          </div>

<?php $i++; endwhile; endif; ?>
        </div>
      </div>
