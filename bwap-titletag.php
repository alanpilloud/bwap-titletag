<?php
/*
Plugin Name: BWAP Title Tag
Plugin URI: https://github.com/alanpilloud/bwap-titletag
Description: Manages the title tag
Version: 0.1
*/

/**
*   Define the title of the page
*
*   This is a named function because it might be used.
*/
function bwap_get_title() {
    if (is_front_page()) {
        $title = get_bloginfo('name');
    } else {
        $title = wp_title('|', false, 'right').get_bloginfo('name');
    }

    return $title;
}

add_action('wp_head', function () {
    /**
    * Set title tag differently on the frontpage
    */

    echo '<title>'.bwap_get_title().'</title>';

}, 0);
