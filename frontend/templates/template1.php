<?php
// // Retrieve the values from the options table
// $my_form_title = get_option('my_form_title');
// $my_form_description = get_option('my_form_description');
// $my_form_date = get_option('my_form_date');
// $my_form_time = get_option('my_form_time');
// $target_datetime = strtotime($my_form_date . ' ' . $my_form_time);


// Retrieve options from the 'user_options' entry
$user_options = get_option('user_options', array());
// Access individual options
$my_form_title = isset($user_options['my_form_title']) ? $user_options['my_form_title'] : '';
$my_form_description = isset($user_options['my_form_description']) ? $user_options['my_form_description'] : '';
$my_form_date = isset($user_options['my_form_date']) ? $user_options['my_form_date'] : '';
$my_form_time = isset($user_options['my_form_time']) ? $user_options['my_form_time'] : '';


?>
<div class="template1 comming_soon">
    <h1>
        <?php echo $my_form_title; ?>
    </h1>
    <p>
        <?php echo $my_form_description; ?>
    </p>
    <div class="timer" data-target="<?php echo $target_datetime; ?>">
        <div class="date">
            <?php echo $my_form_date; ?>
        </div>

        <div class="time">
            <?php echo $my_form_time; ?>
        </div>

        <div class="second">
            23
        </div>


    </div>
</div>