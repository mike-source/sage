      <div id="page-header" class="wrapper wrapper--page-header col-1 <?php if(!get_field('show_page_header')): echo 'not-in-use'; endif; ?>">
        <div class="container container--page-header col-1__container">
          <div class="block col-1__block page-header">

            <?php use Roots\Sage\Titles; ?>
            <h1 class="aligncenter"><?= Titles\title(); ?></h1>

          </div>
        </div>
      </div>
