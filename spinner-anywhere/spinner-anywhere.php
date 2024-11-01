<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/rohit-gomgee-662444126
 * @since             1.0.0
 * @package           Spinner_Anywhere
 *
 * @wordpress-plugin
 * Plugin Name:       Spinner Anywhere By Rohit Gomgee
 * Plugin URI:        https://www.facebook.com/rohit.gomgee
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Rohit
 * Author URI:        https://www.linkedin.com/in/rohit-gomgee-662444126
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       spinner-anywhere
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SPINNER_ANYWHERE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-spinner-anywhere-activator.php
 */
function activate_spinner_anywhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spinner-anywhere-activator.php';
	Spinner_Anywhere_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-spinner-anywhere-deactivator.php
 */
function deactivate_spinner_anywhere() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spinner-anywhere-deactivator.php';
	Spinner_Anywhere_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_spinner_anywhere' );
register_deactivation_hook( __FILE__, 'deactivate_spinner_anywhere' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-spinner-anywhere.php';

add_shortcode( 'spinner', 'wp_spinner_anywhere' );

function wp_spinner_anywhere( $atts ) {
	$color = $atts['color'];
	$type = $atts['type'];
	$width = $atts['width'];
	$height = $atts['height'];
	if(in_array($type,['border','grow'])){
		return '<div class="spinner-'.$type.'" style="color:'.$color.';width: '.$width.'; height: '.$height.';" role="status">
		<span class="sr-only">Loading...</span>
	  </div>';
	}else{
		return 'Invalid type is selected';
	}
}
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_spinner_anywhere() {

	$plugin = new Spinner_Anywhere();
	$plugin->run();

}
run_spinner_anywhere();
