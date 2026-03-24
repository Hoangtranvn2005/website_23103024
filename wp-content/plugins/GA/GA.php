<?php
/*
Plugin Name: My Google Analytics
Description: Chèn mã theo dõi GA4 vào Header
Version: 1.0
Author: 23103024
*/

// Hook vào wp_head với độ ưu tiên cao (1) để nó nằm trên cùng
add_action('wp_head', 'tnu_add_ga4_code', 1);
function tnu_add_ga4_code() {
    ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-87RF4M4DEY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-87RF4M4DEY');
    </script>
    <?php
}
