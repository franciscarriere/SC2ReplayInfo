<?php
  /*
  Plugin Name: SC2ReplayInfo
  Description: Starcraft 2 Replay File information reader. Insert a bit more information from your replay automatically including the players and game length
  Version: 1.0
  Author: Francis Carriere
  Author URI: http://dev.wrclan.com/
  Plugin URI: http://dev.wrclan.com/
  */
?>

//Register the Admin page
function sc2r_admin() {
    include('/Admin/sc2r_admin.php');
}

function sc2r_admin_actions() {
    add_options_page("Replays", "Replays", 1, "Replays", "sc2r_admin");
}
add_action('admin_menu', 'sc2r_admin_actions');
