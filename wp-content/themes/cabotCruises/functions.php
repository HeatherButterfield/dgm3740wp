<?php
//remove visual editor
add_filter('user_can_richedit', '__return_false', 50);

//add a menu
register_nav_menu('siteNavigation', 'Primary Navigation');
?>
