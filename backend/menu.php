<?php

function adding_menu() {
    add_menu_page(
        'Comming soon plugin Settings',
        'CommingSoon',
        'manage_options',
        'my_plugin_settings',
        'my_plugin_page_callback',
        'dashicons-admin-generic', // Icon URL or dashicon class
        30 // Position in the menu
    );
}

adding_menu();

function my_plugin_page_callback() {
    require_once 'menu_page.php';

    // for the backend;
    // require_once __DIR__ . '/backend/query.php';
    require_once plugin_dir_path(__FILE__) . 'backend/query.php';


}


    