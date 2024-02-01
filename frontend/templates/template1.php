<?php


// Retrieve options from the 'user_options' entry
$user_options = get_option('user_options', array());
// Access individual options
$my_form_title = isset($user_options['my_form_title']) ? $user_options['my_form_title'] : '';
$my_form_description = isset($user_options['my_form_description']) ? $user_options['my_form_description'] : '';
$my_form_date = isset($user_options['my_form_date']) ? $user_options['my_form_date'] : '';
$my_form_time = isset($user_options['my_form_time']) ? $user_options['my_form_time'] : '';
$user_logo = isset($user_options['user_logo_url']) ? $user_options['user_logo_url'] : '';
$user_timer_title = isset($user_options['user_timer_title']) ? $user_options['user_timer_title'] : '';
$user_back_img = isset($user_options['user_background_image']) ? $user_options['user_background_image'] : '';



?>
<div class="template1 comming_soon">


    <div class="cww_logo_template1_container">
        <img src="<?php echo esc_url($user_back_img) ?>" alt="Back" class="cww_template1_logo">
    </div>

    <div class="cww_logo_template1_container">
        <img src="<?php echo esc_url($user_logo) ?>" alt="Logo" class="cww_template1_logo">
    </div>

    <h1>
        <?php echo esc_html($my_form_title); ?>
    </h1>
    <p>
        <?php echo esc_html($my_form_description); ?>
    </p>
    <div class="timer" data-target="<?php echo esc_attr($target_datetime); ?>">
        <h3 class="cww_maintenance_template1_timer_title">
            <?php echo esc_html($user_timer_title); ?>
        </h3>
        <div class="date">
            <?php echo esc_html($my_form_date); ?>
        </div>

        <div class="time">
            <?php echo esc_html($my_form_time); ?>
        </div>

        <div class="second">
            <?php echo esc_html(23); ?>
        </div>



    </div>
</div>