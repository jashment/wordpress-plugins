<?php
// Add Scripts

function ffl_add_scripts() {
    wp_enqueue_style('ffl-main-style', plugins_url().'/Facebook-Footer-Link/css/style.css');
    wp_enqueue_script('ffl_main_script', plugins_url().'Facebook-Footer-Link/js/main.js');
}

add_action('wp_enqueue_scripts', 'ffl_add_scripts');