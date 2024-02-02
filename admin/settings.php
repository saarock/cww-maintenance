<?php

if (!defined('ABSPATH'))
    exit(); // Exit if accessed directly

if (!class_exists("Cww_Maintenance_Admin_Setting_Class")):


    class Cww_Maintenance_Admin_Setting_Class
    {
        public function __construct()
        {

            // $this->settings();

            add_action('admin_menu', array($this, 'add_admin_menu'));
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles_admin'));
            $this->files_icons();
            add_action('init', array($this, 'settings'), 10);
            add_action('init', array($this, 'coming_soon_init'), 11);
            // add_action('init', array($this, 'handel_form'), 12);

        }



        public function add_admin_menu()
        {
            require_once 'menu.php';
        }


        public function enqueue_scripts_and_styles_admin()
        {


            if (isset($_GET['page']) && $_GET['page'] == 'cww_maintenance') {


                if (function_exists('wp_enqueue_media')) {
                    wp_enqueue_media();
                }


                // Enqueue script
                wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'static/js/script.js', array('jquery'), CWW_MAINTENANCE_VERSION, true);
                // Enqueue style
                wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/style.css', array(), CWW_MAINTENANCE_VERSION);


                // For icons
                wp_enqueue_style('materialdesignicons', plugin_dir_url(__FILE__) . 'static/css/materialdesignicons.min.css', array(), CWW_MAINTENANCE_VERSION);
                wp_enqueue_style('font-awesome', plugin_dir_url(__FILE__) . 'static/css/all.min.css', array(), CWW_MAINTENANCE_VERSION);
                wp_enqueue_style('eleganticons', plugin_dir_url(__FILE__) . 'static/css/eleganticons.min.css', array(), CWW_MAINTENANCE_VERSION);
                wp_enqueue_style('essentialicon', plugin_dir_url(__FILE__) . 'static/css/essentialicon.min.css', array(), CWW_MAINTENANCE_VERSION);
                wp_enqueue_style('icofont', plugin_dir_url(__FILE__) . 'static/css/icofont.min.css', array(), CWW_MAINTENANCE_VERSION);
                wp_enqueue_style('sticky-floating-forms-admin', plugin_dir_url(__FILE__) . 'css/admin.css', array(), CWW_MAINTENANCE_VERSION);
                // wp_enqueue_style('chosen', plugin_dir_url(__FILE__) . 'chosen/chosen.min.css', array(), STICKY_FLOATING_FORMS_VER);
                // wp_enqueue_style('spectrum', plugin_dir_url(__FILE__) . 'spectrum/spectrum.min.css', array(), STICKY_FLOATING_FORMS_VER);
                // wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/icofont.css', array(), '1.0');
                // wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/icofont.min.css', array(), '1.0');

            }

        }




        public function coming_soon_init()
        {
            // get_options
            $user_options = get_option('user_options', array());
            $user_template = $user_options['template'];


            if (!is_admin() && is_user_logged_in() && $user_template === "template1") {
                require_once CWW_MAINTENANCE_PATH . 'frontend/templates/template1.php';
            } else if (!is_admin() && is_user_logged_in() && $user_template === "template2") {
                echo "Temp2";
                require_once CWW_MAINTENANCE_PATH . 'frontend/templates/template2.php';

            } else if (!is_admin() && is_user_logged_in() && $user_template === "template3") {
                require_once CWW_MAINTENANCE_PATH . 'frontend/templates/template3.php';

            }
        }




        public static function settings()
        {
            $existing_form_data = get_option('user_options', array());
            if (empty($existing_form_data)) {
                $existing_form_data['my_form_title'] = "Comming soon";
                $existing_form_data['my_form_description'] = "We are comming Soon";
                $existing_form_data['my_form_date'] = "09-24-12";
                $existing_form_data['my_form_time'] = "12:23";
                $existing_form_data['user_logo_url'] = "";
                $existing_form_data['user_timer_title'] = "We are comming Soon";
                $existing_form_data['user_background_image'] = "";
                $existing_form_data['template'] = "template1";
                $existing_form_data['icon'] = "icofont-ui-chat";
                // Save the updated array to options table
                update_option('user_options', $existing_form_data);

            }

        }

        public function files_icons()
        {
            require_once CWW_MAINTENANCE_PATH . 'admin/icon-lib.php';
        }







    }


    new Cww_Maintenance_Admin_Setting_Class();
endif;