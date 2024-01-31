<?php
// saving the data in the wp_options

function handel_form()
{

    $existing_form_data = get_option('user_options', array());
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {


        echo "<h1>Submit</h1>";
        // Retrieve existing form data array

        $title = sanitize_text_field($_POST['Title']);
        $description = sanitize_text_field($_POST['Description']);
        $date = sanitize_text_field($_POST['Date']);
        $time = sanitize_text_field($_POST['Time']);



        $existing_form_data['my_form_title'] = $title;
        $existing_form_data['my_form_description'] = $description;
        $existing_form_data['my_form_date'] = $date;
        $existing_form_data['my_form_time'] = $time;

        // Save the updated array to options table
        $result = update_option('user_options', $existing_form_data);
        if ($result === false) {
            // Handle the error, maybe log it or display a message
            echo 'Failed to update options.';
        } else {
            echo "Updated";
            $my_form_title = $existing_form_data['my_form_title'];
            echo $my_form_title;

        }
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

