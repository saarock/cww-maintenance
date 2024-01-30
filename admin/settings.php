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
        }



        public function add_admin_menu()
        {
            require_once 'menu.php';
        }


        public function enqueue_scripts_and_styles_admin()
        {
            // Enqueue script
            wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'static/js/script.js', array('jquery'), '1.0', true);

            // Enqueue style
            wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'static/css/style.css', array(), '1.0');
        }


    }


    new Cww_Maintenance_Admin_Setting_Class();
endif;