<?php
   if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'Theme General Settings',
      'menu_title'  => 'Auth Settings',
      'position'  =>  2,
      'menu_slug'   => 'theme-general-settings',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));
  }

function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyC7IuOflifct9IyL7WB-BcWFczbYE8cVWA');
}
add_action('acf/init', 'my_acf_init');