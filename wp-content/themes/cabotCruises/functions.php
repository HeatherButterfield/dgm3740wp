<?php
//remove visual editor
add_filter('user_can_richedit', '__return_false', 50);

//add a menu
register_nav_menu('siteNavigation', 'Primary Navigation');

function wpdocs_excerpt_more( $more ) {
    return '<button href="'.get_the_permalink().'" rel="nofollow">Read More...</button>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>
