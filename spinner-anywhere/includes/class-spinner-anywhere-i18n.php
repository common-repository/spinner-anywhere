<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/rohit-gomgee-662444126
 * @since      1.0.0
 *
 * @package    Spinner_Anywhere
 * @subpackage Spinner_Anywhere/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Spinner_Anywhere
 * @subpackage Spinner_Anywhere/includes
 * @author     Rohit <gomgee@gmail.com>
 */
class Spinner_Anywhere_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'spinner-anywhere',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
