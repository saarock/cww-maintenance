<?php

function adding_menu() {
    add_menu_page(
        'Comming soon plugin Settings',
        'CWW-maintenance',
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





}


    