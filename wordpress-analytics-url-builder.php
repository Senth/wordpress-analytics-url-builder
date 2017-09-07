<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://matteusmagnusson.com
 * @since             1.0.0
 * @package           Waub
 *
 * @wordpress-plugin
 * Plugin Name:       Analytics URL Builder
 * Plugin URI:        https://github.com/Senth/wordpress-analytics-url-builder
 * Description:       Generate Analytics URL for blog posts
 * Version:           1.0.0
 * Author:            Matteus Magnusson
 * Author URI:        https://matteusmagnusson.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       waub
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-waub-activator.php
 */
function activate_waub() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-waub-activator.php';
	Waub_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-waub-deactivator.php
 */
function deactivate_waub() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-waub-deactivator.php';
	Waub_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_waub' );
register_deactivation_hook( __FILE__, 'deactivate_waub' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-waub.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_waub() {

	$plugin = new Waub();
	$plugin->run();

}
run_waub();
