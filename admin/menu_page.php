<?php
// Handeling the form;
require_once plugin_dir_path(__FILE__) . 'backend/query.php';
$user_options = get_option('user_options', array());
$user_template = $user_options['template'];


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
    <div class="cww_all-services">
        <div class="cww_all_services_top">
            <div class="cww_feature_one cww_feature_button">
                <?php esc_html_e("Modes", "WebSite Mode"); ?>
            </div>
            <div class="cww_feature_two cww_feature_button">
                <?php esc_html_e("Templates", "cww-maintenance"); ?>
            </div>
            <div class="cww_settings cww_feature_button">
                <?php esc_html_e("Settings", "cww-maintenance"); ?>
            </div>
            <div class="cww_links cww_feature_button">
                <?php esc_html_e("Social medias", "cww-maintenance"); ?>
            </div>
            <!-- <div class="cww_links cww_feature_button">
                <?php esc_html_e("Link account", "cww-maintenance"); ?>
            </div> -->
        </div>


        <div class="cww_services">
            <h1 class="cww_mode_title">
                <?php esc_html_e("Website Mode", "cww-maintenance"); ?>
            </h1>

            <div class="cww_all_mode">
                <div class="cww_modes">
                    <div class="cww_mode">
                        <?php esc_html_e("Comming Soon", "cww-maintenance"); ?>
                    </div>
                    <div class="cww_mode">
                        <?php esc_html_e("Maintenance", "cww-maintenance"); ?>
                    </div>
                    <div class="cww_mode">
                        <?php esc_html_e("Live", "cww-maintenance"); ?>
                    </div>
                </div>

                <div class="cww_mode_page">
                    <?php esc_html_e("Comming Soon", "cww-maintenance"); ?>

                </div>
                <div class="cww_mode_page">
                    <?php esc_html_e("Maintenance", "cww-maintenance"); ?>


                </div>
                <div class="cww_mode_page">
                    <?php esc_html_e("Live", "cww-maintenance"); ?>
                </div>
            </div>
        </div>

        <div class="cww_services">
            <form id="cww_templateForm" method="post" action="">
                <h1>
                    <?php esc_html_e("Choose Template.", "cww-maintenance"); ?>
                </h1>
                <div class="cww_templates">
                    <div class="cww_template">

                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template1.png' ?>" border="0" />
                        <p>Template 1</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template1" class="cww_active_button"
                                <?php echo $user_template === "template1" ? 'checked' : ''; ?>>
                            <?php esc_html_e("Active", "cww-maintenance") ?>
                            </input>
                        </div>
                    </div>
                    <div class="cww_template">
                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template2.png' ?>" border="0" />
                        <p>Template 2</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template2" class="cww_active_button"
                                <?php echo $user_template === "template2" ? 'checked' : ''; ?>>
                            <?php esc_html_e("Active", "cww-maintenance") ?>
                            </input>
                        </div>
                    </div>

                    <div class="cww_template">
                        <img src="<?php echo CWW_MAINTENANCE_URL . 'admin/static/images/template3.png' ?>" border="0" />
                        <p>Template 3</p>
                        <div class="cww_active">
                            <input type="radio" name="selected_template" value="template3" class="cww_active_button"
                                <?php echo $user_template === "template3" ? 'checked' : ''; ?>>
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

        <div class="cww_services">
            <h1>
                <?php esc_html_e("Settings", "cww-maintenance"); ?>
            </h1>
            <div class="cww_s3">

                <div class="cww_settings_div">

                    <div class="cww_setting_top">
                        <h3>
                            <?php esc_html_e("Logo", "cww-maintenance"); ?>
                        </h3>
                        <div class="cww_image_div">
                            <img src="" alt="logo" class="cww_userselected_logo">
                        </div>

                        <div class="cww_delete">
                            <?php esc_html_e("DeleteLogo", "cww-maintenance"); ?>
                        </div>

                        <button class="cww_upload_button">
                            <?php esc_html_e("Upload logo", "cww-maintenance"); ?>
                        </button>
                    </div>

                    <div class="cww__maintenance_setting_top">
                        <h3>
                            <?php esc_html_e("BackgroundImage", "cww-maintenance"); ?>
                        </h3>
                        <div class="cww_maintenance_back_image_div">
                            <img src="" alt="logo" class="cww_maintenance_userselected_background_image">
                        </div>

                        <div class="cww_maintenance_delete_background_image">
                            <?php esc_html_e("DeleteBack", "cww-maintenance"); ?>
                        </div>

                        <button class="cww_maintenance_upload_back_button">
                            <?php esc_html_e("upload back img", "cww-maintenance"); ?>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="cww_setting_middle">
                            <h3>
                                <?php esc_html_e("Title", "cww-maintenance"); ?>
                            </h3>
                            <input type="text" name="Title" id="cww_Title" class="cww_title"
                                placeholder="Your Title...">
                        </div>
                        <div class="cww_setting_middle">
                            <h3>
                                <?php esc_html_e("Description", "cww-maintenance"); ?>
                            </h3>
                            <input type="text" name="Description" id="cww_Des" class="Description"
                                placeholder="Your Description..." required>
                        </div>
                        <div class="cww_setting_middle">
                            <h3>
                                <?php esc_html_e("Timer title", "cww-maintenance"); ?>
                            </h3>
                            <input type="text" name="cww_maintenance_timer_title" id="cww_maintenance_timer_title"
                                class="cww_maintenance_timer_title" placeholder="Timer title" required>
                        </div>
                        <div class="cww_setting_middle">
                            <h3>
                                <?php esc_html_e("Date", "cww-maintenance"); ?>
                            </h3>
                            <input type="date" name="Date" id="cww_Date" class="cww_date" required>
                        </div>
                        <div class="cww_setting_middle">
                            <h3>
                                <?php esc_html_e("Time", "cww-maintenance"); ?>
                            </h3>
                            <input type="time" name="Time" id="cww_time" class="cww_time">
                        </div>
                        <input type="text" name="userLogoUrl" class="cww_maintenance_logo_img-src-save">
                        <input type="text" name="userBackgroundImageUrl" class="cww_maintenance_back_img-src-save">

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



        <div class="cww_services">
            <h1>Hello world</h1>
            <?php
            $sf_forms_settings = get_option('user_options', array());
            $sf_forms_settings = isset($user_options['icon']) ? $user_options['icon'] : "icofont-ui-chat";

            $icon = $sf_forms_settings;
            ?>
            <div class="sf-forms-icon-box">
                <div class="sf-forms-selected-icon">
                    <i class="<?php echo esc_attr($icon) ?>"></i>
                    <span><i class="icofont-simple-down"></i></span>
                </div>
                <div class="sf-forms-icon-box">
                    <div class="sf-forms-icon-search">
                        <select>
                            <option value="icofont-list">
                                <?php esc_html_e('Ico Font', 'cww_maintenance') ?>
                            </option>
                            <option value="fontawesome-list">
                                <?php esc_html_e('Font Awesome', 'cww_maintenance') ?>
                            </option>
                            <option value="essential-icon-list">
                                <?php esc_html_e('Essential Icon', 'cww_maintenance') ?>
                            </option>
                            <option value="material-icon-list">
                                <?php esc_html_e('Material Icon', 'cww_maintenance') ?>
                            </option>
                            <option value="elegant-icon-list">
                                <?php esc_html_e('Elegant Icon', 'cww_maintenance') ?>
                            </option>
                        </select>
                        <input type="text" class="sf-forms-icon-search-input"
                            placeholder="<?php esc_attr_e('Type to filter', 'cww_maintenance') ?>" />
                    </div>


                    <ul class="sf-forms-icon-list icofont-list clearfix active">
                        <?php
                        $cww_maintenance_forms_icofont_icon_array = cww_maintenance_icons::cww_maintenance_forms_icofont_icon_array();
                        foreach ($cww_maintenance_forms_icofont_icon_array as $sfm_icofont_icon) {
                            $icon_class = $icon == $sfm_icofont_icon ? 'icon-active' : '';
                            echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($sfm_icofont_icon) . '"></i></li>';
                        }
                        echo '</ul>';


                        echo '<ul class="sf-forms-icon-list fontawesome-list clearfix">';
                        $cww_maintenance_forms_font_awesome_icon_array = cww_maintenance_icons::cww_maintenance_icons_array();
                        foreach ($cww_maintenance_forms_font_awesome_icon_array as $sfm_font_awesome_icon) {
                            $icon_class = $icon == $sfm_font_awesome_icon ? 'icon-active' : '';
                            echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($sfm_font_awesome_icon) . '"></i></li>';
                        }
                        echo '</ul>';


                        echo '<ul class="sf-forms-icon-list essential-icon-list clearfix">';
                        $cww_maintenance_forms_essential_icon_array = cww_maintenance_icons::cww_maintenance_forms_essential_icon_array();
                        foreach ($cww_maintenance_forms_essential_icon_array as $sfm_essential_icon) {
                            $icon_class = $icon == $sfm_essential_icon ? 'icon-active' : '';
                            echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($sfm_essential_icon) . '"></i></li>';
                        }
                        echo '</ul>';


                        echo '<ul class="sf-forms-icon-list material-icon-list clearfix">';
                        $sff_materialdesignicons_icon_array = cww_maintenance_icons::cww_maintenance_forms_materialdesignicons_array();
                        foreach ($sff_materialdesignicons_icon_array as $sfm_materialdesignicons_icon) {
                            $icon_class = $icon == $sfm_materialdesignicons_icon ? 'icon-active' : '';
                            echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($sfm_materialdesignicons_icon) . '"></i></li>';
                        }
                        echo '</ul>';


                        echo '<ul class="sf-forms-icon-list elegant-icon-list clearfix">';
                        $sfm_eleganticons_icon_array = cww_maintenance_icons::cww_maintenance_forms_sfm_eleganticons_array();
                        foreach ($sfm_eleganticons_icon_array as $sfm_eleganticons_icon) {
                            $icon_class = $icon == $sfm_eleganticons_icon ? 'icon-active' : '';
                            echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($sfm_eleganticons_icon) . '"></i></li>';
                        }
                        echo '</ul>';


                        echo '</div>';
                        echo '<input class="sf-forms-icon" type="hidden" value="' . esc_attr($icon) . '" name="sf_forms_settings[icon]" data-default="icofont-ui-chat"/>';
                        echo '</div>';
                        ?>
                </div>

            </div>
        </div>
    </div>