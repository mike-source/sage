<?php
/**
 * Configuration values
 */
define('TAG_MANAGER_ID', ''); // GTM-XXXXXXX
if (!defined('WP_ENV')) {
  define('WP_ENV', 'production');  // checks for values 'production' or 'development' in .env file
}

if(TAG_MANAGER_ID !== '' && WP_ENV === 'production') {

  function tag_manager__head() { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo TAG_MANAGER_ID; ?>');</script>
    <!-- End Google Tag Manager -->
  <?php }
  add_action('wp_head', 'tag_manager__head');

  function tag_manager__body() { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo TAG_MANAGER_ID; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php }
  add_action('get_header', 'tag_manager__body');

}
