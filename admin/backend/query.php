<?php
// saving the data in the wp_options


function handel_form()
{
    $existing_form_data = get_option('my_form_data', array());

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
        echo "<h1>Submit</h1>";
        // Retrieve existing form data array

        $title = sanitize_text_field($_POST['Title']);
        $description = sanitize_text_field($_POST['Description']);
        $date = sanitize_text_field($_POST['Date']);
        $time = sanitize_text_field($_POST['Time']);
        echo $title;


        $existing_form_data['my_form_title'] = $title;
        $existing_form_data['my_form_description'] = $description;
        $existing_form_data['my_form_date'] = $date;
        $existing_form_data['my_form_time'] = $time;

        // Save the updated array to options table
        update_option('my_form_data', $existing_form_data);
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_template'])) {
        $selectedTemplate = sanitize_text_field($_POST['selected_template']);
        echo $selectedTemplate;
        $existing_form_data['template'] = $selectedTemplate;
        update_option('my_form_data', $existing_form_data);


    }
}

handel_form();


// add_action("init", 'handel_form');
// add_action('wp_loaded', 'handle_form');


// function create_custom_table() {
//     global $wpdb;
//     echo "<h1>CRAETAED</h1>";
//     $table_name = $wpdb->prefix. 'detail';
//     $charset_collate = $wpdb->get_charset_collate();
//     $sql = "CREATE TABLE $table_name (
//         id mediumint(9) NOT NULL AUTO_INCREMENT,
//         title varchar(255) NOT NULL,
//         description text NOT NULL,
//         date date NOT NULL,
//         time time NOT NULL,
//         PRIMARY KEY  (id)
//     ) $charset_collate;";

//     require_once ABSPATH . 'wp-admin/includes/upgrade.php';
//     dbDelta( $sql );

// }



// function process_form_submission() {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Title'])) {
//         global $wpdb;

//         $table_name = $wpdb->prefix . 'detail';

//         $title = sanitize_text_field($_POST['Title']);
//         $description = sanitize_text_field($_POST['Description']);
//         $date = sanitize_text_field($_POST['Date']);
//         $time = sanitize_text_field($_POST['Time']);

//         $wpdb->insert(
//             $table_name,
//             array(
//                 'title' => $title,
//                 'description' => $description,
//                 'date' => $date,
//                 'time' => $time,
//             ),
//             array('%s', '%s', '%s', '%s')
//         );
//         echo "<h1>Savced</h1>";
//     }

// }

// // Activation hook - runs when the plugin is activated
// function my_plugin_activation() {
//     error_log('Activation hook triggered');
//     create_custom_table();
// }
// register_activation_hook(__FILE__, 'my_plugin_activation');

// // Init hook - runs on every page load
// function my_plugin_init() {
//     error_log('Init hook triggered');
//     process_form_submission();
// }
// add_action('init', 'my_plugin_init');




