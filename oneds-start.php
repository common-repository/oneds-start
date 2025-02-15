<?php
/*
Plugin Name: OneDS Start
Description: Just Start Package
Version: 1.2.0
Author: OneDS
Author URI: https://0ds1.com/oneds
Text Domain: oneds-start
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Load OneDS plugin textdomain
 */

function ods_load_textdomain()
{

    load_plugin_textdomain('oneds-start', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

add_action('plugins_loaded', 'ods_load_textdomain');

// END PART



/**
 * continue
 */

include_once(plugin_dir_path(__FILE__) . '/includes/init.php');

// END PART