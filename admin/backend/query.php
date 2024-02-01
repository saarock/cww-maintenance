<?php
// saving the data in the wp_options

function handel_form()
{

    $existing_form_data = get_option('user_options', array());
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {

        // Retrieve existing form data array

        $title = sanitize_text_field($_POST['Title']);
        $description = sanitize_text_field($_POST['Description']);
        $date = sanitize_text_field($_POST['Date']);
        $time = sanitize_text_field($_POST['Time']);
        $user_logo_url = sanitize_text_field($_POST['userLogoUrl']);
        $user_timer_title = sanitize_text_field($_POST['cww_maintenance_timer_title']);
        $user_back_img = sanitize_text_field($_POST['userBackgroundImageUrl']);



        $existing_form_data['my_form_title'] = $title;
        $existing_form_data['my_form_description'] = $description;
        $existing_form_data['my_form_date'] = $date;
        $existing_form_data['my_form_time'] = $time;
        $existing_form_data['user_logo_url'] = $user_logo_url;
        $existing_form_data['user_timer_title'] = $user_timer_title;
        $existing_form_data['user_background_image'] = $user_back_img;

        // Save the updated array to options table
        $result = update_option('user_options', $existing_form_data);
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_template'])) {
        echo "<h1>selected</h1>";
        $selectedTemplate = sanitize_text_field($_POST['selected_template']);
        echo $selectedTemplate;
        $existing_form_data['template'] = $selectedTemplate;
        update_option('user_options', $existing_form_data);



    }
}

handel_form();

// add_action("init", "handel_form");

