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

  add_submenu_page( 
    'wpplugin',
  __( 'Enter Event', 'wpplugin' ),
  __( 'Enter Event', 'wpplugin' ),
   'manage_options', 
   'enter_event_slug', 
   'wpplugin_enter_event' 
);

  add_submenu_page( 
    'wpplugin',
  __( 'View Events', 'wpplugin' ),
  __( 'View Events', 'wpplugin' ),
  'manage_options', 
  'view_event_slug', 
  'wpplugin_view_event' 
);

  //add_menu_page( page_title, menu_title, capability, menu_slug, function, icon_url, position )

  //add_submenu_page( parent_slug, page_title, menu_title, capability, menu_slug, function )

}
add_action( 'admin_menu', 'wpplugin_calendar_pages' );  

//Calling enter event page and view event page
function wpplugin_calendar_page_markup()
{
  include( WPPLUGIN_DIR . 'includes/calendar-form.php');
  include( WPPLUGIN_DIR . 'includes/calendar-table.php');
  
}

//Calling enter event page
function wpplugin_enter_event()
{
  include( WPPLUGIN_DIR . 'includes/calendar-form.php');
}

//Calling view event page
function wpplugin_view_event()
{
  include( WPPLUGIN_DIR . 'includes/calendar-table.php');
}