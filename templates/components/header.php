<header class="site-header">
  <div class="wrapper full-width bg-brand-1">
    <div class="container">
      <div id="mobile-nav-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <nav id="primary-nav" class="primary-nav">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
        ?>
      </nav>
      <div class="call">
        <p>Call For a Free Quote</p>
        <a href="tel:02087877050">0208 787 7050</a>
      </div>

    </div>
  </div>
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>">
    </a>
    <h3 class="tagline"><?php bloginfo('description'); ?></h3>
  </div>
</header>
