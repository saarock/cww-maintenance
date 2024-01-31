<?php
// Handeling the form;
require_once plugin_dir_path(__FILE__) . 'backend/query.php';

?>
<div class='page'>
    <div class="container">
        <div class="top">
            <div class="top_left">
                <h1>
                    <?php esc_html_e('Comming Soon Settings', 'cww-maintenance') ?>
                </h1>
            </div>
        </div>

        <div class="container_left">
            <button>
                <?php esc_html_e("Live Preview", "cww-maintenance"); ?>
            </button>
        </div>
    </div>
    <div class="all-services">
        <div class="all_services_top">
            <div class="feature_one feature_button">
                <?php esc_html_e("Settings", "WebSite Mode"); ?>
            </div>
            <div class="feature_two feature_button">
                <?php esc_html_e("Templates", "cww-maintenance"); ?>
            </div>
            <div class="settings feature_button">
                <?php esc_html_e("Settings", "cww-maintenance"); ?>
            </div>
        </div>


        <div class="services">
            <h1 class="mode_title">
                <?php esc_html_e("Website Mode", "cww-maintenance"); ?>
            </h1>

            <div class="all_mode">
                <div class="modes">
                    <div class="mode">
                        <?php esc_html_e("Comming Soon", "cww-maintenance"); ?>
                    </div>
                    <div class="mode">
                        <?php esc_html_e("Maintenance", "cww-maintenance"); ?>
                    </div>
                    <div class="mode">
                        <?php esc_html_e("Live", "cww-maintenance"); ?>
                    </div>
                </div>

                <div class="mode_page">
                    <?php esc_html_e("Comming Soon", "cww-maintenance"); ?>

                </div>
                <div class="mode_page">
                    <?php esc_html_e("Maintenance", "cww-maintenance"); ?>


                </div>
                <div class="mode_page">
                    <?php esc_html_e("Live", "cww-maintenance"); ?>
                </div>
            </div>
        </div>

        <div class="services">
            <form id="templateForm" method="post" action="">
                <h1>
                    <?php esc_html_e("Choose Template.", "cww-maintenance"); ?>
                </h1>
                <div class="cww_templates">
                    <div class="cww_template">

                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template2.png' ?>" border="0" />
                        <p>Template 1</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template1" class="cww_active_button">
                            <?php esc_html_e("Activew", "cww-maintenance") ?>
                            </input>
                        </div>
                    </div>
                    <div class="cww_template">
                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template2.png' ?>" border="0" />
                        <p>Template 2</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template2" class="cww_active_button">
                            <?php esc_html_e("Active", "cww-maintenance") ?>
                            </input>
                        </div>
                    </div>

                    <div class="cww_template">
                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template2.png' ?>" border="0" />
                        <p>Template 3</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template3" class="cww_active_button">
                            <?php esc_html_e("Active", "cww-maintenance") ?>
                            </input>
                        </div>
                    </div>


                </div>
                <button type="submit" name="submit_template" class="cww_golive_button">
                    <?php esc_html_e("Save template", "cww-maintenance") ?>
                </button>
            </form>

        </div>

        <div class="services">
            <h1>
                <?php esc_html_e("Settings", "cww-maintenance"); ?>
            </h1>
            <div class="s3">

                <div class="settings_div">
                    <div class="setting_top">
                        <h3>
                            <?php esc_html_e("Logo", "cww-maintenance"); ?>
                        </h3>
                        <div class="image_div">
                            <img src="" alt="logo" class="logo">
                        </div>

                        <div class="delete">Delete logo</div>

                        <button class="cww_upload_button">
                            <?php esc_html_e("Upload logo", "cww-maintenance"); ?>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="setting_middle">
                            <h3>
                                <?php esc_html_e("Title", "cww-maintenance"); ?>
                            </h3>
                            <input type="text" name="Title" id="Title" class="title" placeholder="Your Title...">
                        </div>
                        <div class="setting_middle">
                            <h3>
                                <?php esc_html_e("Description", "cww-maintenance"); ?>
                            </h3>
                            <input type="text" name="Description" id="Des" class="Description"
                                placeholder="Your Description..." required>
                        </div>
                        <div class="setting_middle">
                            <h3>
                                <?php esc_html_e("Date", "cww-maintenance"); ?>
                            </h3>
                            <input type="date" name="Date" id="Date" class="date" required>
                        </div>
                        <div class="setting_middle">
                            <h3>
                                <?php esc_html_e("Time", "cww-maintenance"); ?>
                            </h3>
                            <input type="time" name="Time" id="time" class="time">
                        </div>

                        <button type="submit" name="submit_form">
                            <?php esc_html_e("Save", "cww-maintenance"); ?>
                        </button>
                    </form>


                </div>
                <div class="left">
                    <div class="settings_div">
                        <div class="setting_top">

                        </div>

                        <div class="setting_middle">
                        </div>



                    </div>
                </div>
            </div>


        </div>
    </div>
</div>