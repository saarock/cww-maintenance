<?php
// Handeling the form;
require_once plugin_dir_path(__FILE__) . 'backend/query.php';
?>
<div class='page'>
    <div class="container">
        <div class="top">
            <div class="top_left"><h1> <?php esc_html_e('Comming Soon Settings', 'cww-maintenance')?></h1></div>
        </div>

        <div class="container_left">   
            <button><?php esc_html_e("Live Preview","cww-maintenance");?></button>
        </div>
    </div>
    <div class="all-services">
        <div class="all_services_top"> 
            <div class="feature_one feature_button"><?php esc_html_e("Settings","WebSite Mode");?></div>
            <div class="feature_two feature_button"><?php esc_html_e("Templates","cww-maintenance");?></div>
            <div class="settings feature_button"><?php esc_html_e("Settings","cww-maintenance");?></div>
        </div>


        <div class="services">
            <h1>Mode</h1>
        </div>
        <div class="services">
            <h1><?php esc_html_e("Choose Template.","cww-maintenance");?></h1>
        </div>

        <div class="services">
            <h1><?php esc_html_e("Settings","cww-maintenance");?></h1>
            <div class="s3">

            <div class="settings_div">
                <div class="setting_top">
                    <h3><?php esc_html_e("Logo","cww-maintenance");?></h3>
                  <div class="image_div">

                  </div>

                  <button><?php esc_html_e("Upload logo","cww-maintenance");?></button>
                </div>
                <form action="" method="POST">
    <div class="setting_middle">
        <h3><?php esc_html_e("Title","cww-maintenance");?></h3>
        <input type="text" name="Title" id="Title" class="title" placeholder="Your Title...">
    </div>
    <div class="setting_middle">
        <h3><?php esc_html_e("Description","cww-maintenance");?></h3>
        <input type="text" name="Description" id="Des" class="Description" placeholder="Your Description..." required>
    </div>
    <div class="setting_middle">
        <h3><?php esc_html_e("Date","cww-maintenance");?></h3>
        <input type="date" name="Date" id="Des" class="date" required>
    </div>
    <div class="setting_middle">
        <h3><?php esc_html_e("Time","cww-maintenance");?></h3>
        <input type="time" name="Time" id="time" class="time">
    </div>

    <button type="submit"><?php esc_html_e("Save","cww-maintenance");?></button>
</form>


            </div>
            <div class="left">
                
            </div>
            </div>

      
        </div>
    </div>
</div>