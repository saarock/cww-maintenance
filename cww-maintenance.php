<?php
/*
 * Plugin Name: cww-maintenance
 * Description: Display the coming soon page with extra functions
 * Version: 1.0
 * Author: CodeHons
 */


if (!defined('WPINC')) {
    die();
}


// Constant variables
define('CWW_MAINTENANCE_VERSION', '1.0.0');
define('CWW_MAINTENANCE_FILE', __FILE__);
define('CWW_MAINTENANCE_BASENAME', plugin_basename(CWW_MAINTENANCE_FILE));
define('CWW_MAINTENANCE_PATH', plugin_dir_path(CWW_MAINTENANCE_FILE));
define('CWW_MAINTENANCE_URL', plugins_url('/', CWW_MAINTENANCE_FILE));


require_once CWW_MAINTENANCE_PATH . 'cww-maintenance-class.php';
require_once CWW_MAINTENANCE_PATH . 'admin/settings.php';
