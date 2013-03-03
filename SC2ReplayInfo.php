<?php
  /*
  Plugin Name: SC2ReplayInfo
  Description: Starcraft 2 Replay File information reader. Insert a bit more information from your replay automatically including the players and game length
  Version: 1.0
  Author: Francis Carriere
  Author URI: http://dev.wrclan.com/
  Plugin URI: http://dev.wrclan.com/
  */


//Register the Admin page
add_action('admin_menu', 'register_custom_menu_page');

function register_custom_menu_page() {
   add_menu_page('SC2Replay', 'SC2Replay', 'publish_posts', 'SC2ReplayInfo/Admin/sc2r_admin.php', '',   plugins_url('SC2ReplayInfo/Assets/sc2_menu.png'), 100);
}

?>