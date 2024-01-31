<?php
// Retrieve the values from the options table
$my_form_title = get_option('my_form_title');
$my_form_description = get_option('my_form_description');
$my_form_date = get_option('my_form_date');
$my_form_time = get_option('my_form_time');

$target_datetime = strtotime($my_form_date . ' ' . $my_form_time);

?>
<div class="template1 comming_soon">
    <h1> <?php echo esc_html($my_form_title); ?></h1>
    <p> <?php echo esc_html($my_form_description); ?></p>
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

