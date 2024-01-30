<?php
/*
* Plugin Name: cww-maintenance
* Description: Display the comming soon page with extra functions
*   Version: 1.0
* Author: CodeHons
*/




// for froentend
function enqueue_scripts_and_styles() {
    // Enqueue script
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'static/js/script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('comming-soon-script', plugin_dir_url(__FILE__) . 'template_scripts/js/template1.js', array('jquery'), '1.0', true);

    // Enqueue style
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/style.css', array(), '1.0');
    wp_enqueue_style('coming-soon-styles', plugin_dir_url(__FILE__) . 'template_scripts/css/template1.css');

}


add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');





// Assets for backend 
function enqueue_scripts_and_styles_admin() {
    // Enqueue script
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'backend_static/js/script.js', array('jquery'), '1.0', true);

    // Enqueue style
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'backend_static/css/style.css', array(), '1.0');
}

add_action('admin_enqueue_scripts', 'enqueue_scripts_and_styles_admin');




// Plugin backend
function add_admin_menu() {
    require_once 'backend/menu.php';
}
// add_admin_menu()
add_action('admin_menu', "add_admin_menu");



// Function to display the coming soon page
// Hook the coming soon page function to the init action
function coming_soon_init() {
    if ( !is_admin() && !is_user_logged_in()) {
        // Display the coming soon page to non-logged-in users
        require_once "templates/template1.php";
    }
    //  else {
        // require_once "templates/template1.php";
     


    // }
}
add_action('init', 'coming_soon_init');





