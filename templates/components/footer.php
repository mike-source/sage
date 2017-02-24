<div class="footer-back-to-top">
  <a id="footer-back-to-top" href="#top" class="fa fa-chevron-up" aria-hidden="true"></a>
</div>

<footer class="site-footer bg-grey-4">
  <div class="container">
    <nav class="footer-nav">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
      ?>
    </nav>
    <p class="smallprint aligncenter white">© <?php echo date("Y"); ?> All Rights Reserved. This company is a trading style of This Company Ltd. Company No: 0123456789.</p>
    <p class="smallprint aligncenter white">Website by <a href="http://unbrandedmanchester.com">Unbranded Manchester</a>.</p>
  </div>
</footer>
