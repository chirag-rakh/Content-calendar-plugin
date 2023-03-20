<?php

/*
Plugin Name: Content Calendar
Description: Allows the admin to create a content calendar for content publishing
Version: 1.0.0
Author: Chirag Rakh
*/

if ( ! defined( 'WPINC' ) ) {
    die;
  }


// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Content Calendar Section in Menu
include( plugin_dir_path( __FILE__ ) . 'includes/content-calendar-menu.php');



?>