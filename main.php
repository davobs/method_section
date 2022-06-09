<?php

/*
 
Plugin Name: Obsidian method section JS & Styling
 
Description: Obsidian method section JS & Styling
 
Version: 1

*/

function registerMethodScripts()
{
    if (is_single()) {
        wp_register_script('methodScript', plugins_url('script.js', __FILE__));
        wp_enqueue_script('methodScript');

        wp_enqueue_style('methodStlyle', plugins_url('style.css', __FILE__));
    }
}
add_action('wp_footer', 'registerMethodScripts');
