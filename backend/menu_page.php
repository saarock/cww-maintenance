<?php
// Handeling the form;
require_once plugin_dir_path(__FILE__) . 'backend/query.php';
?>
<div class='page'>
    <div class="container">
        <div class="top">
            <div class="top_left"><h1>Comming Soon Settings</h1></div>
        </div>

        <div class="container_left">   
            <button>Live preview</button>
        </div>
    </div>
    <div class="all-services">
        <div class="all_services_top"> 
            <div class="feature_one feature_button">Website Mode</div>
            <div class="feature_two feature_button">Templates</div>
            <div class="settings feature_button">Settings</div>
        </div>


        <div class="services">
            <h1>Mode</h1>
        </div>
        <div class="services">
            <h1>Choose Template</h1>
        </div>

        <div class="services">
            <h1>Settings</h1>
            <div class="s3">

            <div class="settings_div">
                <div class="setting_top">
                    <h3>Logo</h3>
                  <div class="image_div">

                  </div>

                  <button>Upload Logo</button>
                </div>
                <form action="" method="POST">
    <div class="setting_middle">
        <h3>Title</h3>
        <input type="text" name="Title" id="Title" class="title" placeholder="Your Title...">
    </div>
    <div class="setting_middle">
        <h3>Description</h3>
        <input type="text" name="Description" id="Des" class="Description" placeholder="Your Description..." required>
    </div>
    <div class="setting_middle">
        <h3>Date</h3>
        <input type="date" name="Date" id="Des" class="date" required>
    </div>
    <div class="setting_middle">
        <h3>Time</h3>
        <input type="time" name="Time" id="time" class="time">
    </div>

    <button type="submit">Save</button>
</form>


            </div>
            <div class="left">
                <h3>What</h3>
            </div>
            </div>

      
        </div>
    </div>
</div>