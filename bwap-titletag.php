<?php
/*
Plugin Name: BWAP Title Tag
Plugin URI: https://github.com/alanpilloud/bwap-titletag
Description: Manages the title tag
Version: 0.1
*/

add_action('wp_head', function () {
    /**
    * Set title tag differently on the frontpage
    */
    if (is_front_page()) {
        $title = get_bloginfo('name');
    } else {
        $title = wp_title('|', false, 'right').get_bloginfo('name');
    }
    echo '<title>'.$title.'</title>';

}, 0);
