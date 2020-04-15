<?php
//remove visual editor
add_filter('user_can_richedit', '__return_false', 50);

//add a menu
register_nav_menu('siteNavigation', 'Primary Navigation');

function updocs_excerpt_more($more) {
  return '<a href="'.get_the_permalink().'" rel="nofollow">Read more...</a>'
}
add_filter('excerpt_more', 'updocs_excerpt_more');
?>
