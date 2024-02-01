<?php

if (!defined('ABSPATH'))
    exit(); // Exit if accessed directly

if (!class_exists("Cww_Maintenance_Admin_Setting_Class")):


    class Cww_Maintenance_Admin_Setting_Class
    {
        public function __construct()
        {


            add_action('admin_menu', array($this, 'add_admin_menu'));
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles_admin'));
            add_action('init', array($this, 'coming_soon_init'));
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
                wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'static/js/script.js', array('jquery'), '1.0', true);

                // Enqueue style
                wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/style.css', array(), '1.0');

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


    }


    new Cww_Maintenance_Admin_Setting_Class();
endif;