<?php
if (!class_exists('Cww_Maintenance')):

    class Cww_Maintenance
    {

        public function __construct()
        {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));


        }

        public function enqueue_scripts_and_styles()
        {
            // Enqueue script
            wp_enqueue_script('front-script', plugin_dir_url(__FILE__) . 'frontend/static/js/script.js', array('jquery'), '1.0', true);


            // Enqueue style
            wp_enqueue_style('front-style', plugin_dir_url(__FILE__) . 'frontend/static/css/style.css', array(), '1.0');
            // styles for the template;
            // wp_enqueue_style('coming-soon-styles', plugin_dir_url(__FILE__) . 'static/css/template.css');
        }


    }

    $cww_maintenance_instance = new Cww_Maintenance();

endif;
