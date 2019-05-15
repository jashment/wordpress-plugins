<?php 
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds a Facebook profile link to the end of posts
 * Version: 1.0
 * Author: Jordan Ashment
 * 
 **/
 
 //Exit if Accessed Directly
 if(!defined('ABSPATH')){
     exit;
 }

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');
