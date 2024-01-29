<?php

function create_custom_table() {
    global $wpdb;
    echo "<h1>CRAETAED</h1>";
    $table_name = $wpdb->prefix. 'detail';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title varchar(255) NOT NULL,
        description text NOT NULL,
        date date NOT NULL,
        time time NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
  
}



function process_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Title'])) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'detail';

        $title = sanitize_text_field($_POST['Title']);
        $description = sanitize_text_field($_POST['Description']);
        $date = sanitize_text_field($_POST['Date']);
        $time = sanitize_text_field($_POST['Time']);

        $wpdb->insert(
            $table_name,
            array(
                'title' => $title,
                'description' => $description,
                'date' => $date,
                'time' => $time,
            ),
            array('%s', '%s', '%s', '%s')
        );
        echo "<h1>Savced</h1>";
    }

}

// Activation hook - runs when the plugin is activated
function my_plugin_activation() {
    error_log('Activation hook triggered');
    create_custom_table();
}
register_activation_hook(__FILE__, 'my_plugin_activation');

// Init hook - runs on every page load
function my_plugin_init() {
    error_log('Init hook triggered');
    process_form_submission();
}
add_action('init', 'my_plugin_init');
