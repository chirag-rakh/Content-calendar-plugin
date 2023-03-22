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
include( WPPLUGIN_DIR . 'includes/content-calendar-menu.php');

//Table creation
function table_creation() {
    global $wpdb;

    $table_name = $wpdb->prefix . "events";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name(
        id mediumint(9) AUTO_INCREMENT,
        date date not null,
        occassion text,
        post_title text not null,
        author varchar(50) not null,
        reviewer varchar(50) not null,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

register_activation_hook( __FILE__, 'table_creation' );

// Insert data into table and display
include ( WPPLUGIN_DIR . 'includes/database.php' );


?>