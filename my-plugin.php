<?php
/**
 * Created by PhpStorm.
 * User: mahdi.saeedi
 * Date: 4/22/2018
 * Time: 15:23 AM
 */

/**
 * The plugin bootstrap file
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('PLUGIN_NAME_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-my-plugin-activator.php
 */
function activate_my_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-my-plugin-activator.php';
    My_Plugin_Activator::activate();
}

register_activation_hook(__FILE__, 'activate_my_plugin');

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-my-plugin-deactivator.php
 */
function deactivate_my_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-my-plugin-deactivator.php';
    My_Plugin_Deactivator::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_my_plugin');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-my-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_plugin()
{

    $plugin = new My_Plugin();
    $plugin->run();

}

run_my_plugin();
