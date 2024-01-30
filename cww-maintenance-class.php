<?php
if (!class_exists('Cww_Maintenance')):

    class Cww_Maintenance
    {

        public function __construct()
        {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));
            add_action('init', array($this, 'coming_soon_init'));

        }

        public function enqueue_scripts_and_styles()
        {
            // Enqueue script
            wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'frontend/static/js/script.js', array('jquery'), '1.0', true);
            wp_enqueue_script('coming-soon-script', plugin_dir_url(__FILE__) . 'template_scripts/js/template1.js', array('jquery'), '1.0', true);

            // Enqueue style
            wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'frontend/static/css/style.css', array(), '1.0');
            wp_enqueue_style('coming-soon-styles', plugin_dir_url(__FILE__) . 'template_scripts/css/template1.css');
        }


        public function coming_soon_init()
        {
            if (!is_admin() && is_user_logged_in()) {
                require_once "templates/template1.php";
            }
        }
    }

    $cww_maintenance_instance = new Cww_Maintenance();

endif;
