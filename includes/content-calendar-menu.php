<?php

function wpplugin_calendar_pages()
{
  add_menu_page(
    __( 'Content Calendar', 'wpplugin' ),
    __( 'Content Calendar', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_calendar_page_markup',
    'dashicons-calendar',
    10
  );

}
add_action( 'admin_menu', 'wpplugin_calendar_pages' );  


function wpplugin_calendar_page_markup()
{
  include( WPPLUGIN_DIR . 'includes/calendar-form.php');
  include( WPPLUGIN_DIR . 'includes/calendar-table.php');
}