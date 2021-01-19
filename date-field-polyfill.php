<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              nicbovee.com
 * @since             1.0.1
 * @package           Date_Field_Polyfill
 *
 * @wordpress-plugin
 * Plugin Name:       Date Field Polyfill
 * Plugin URI:        nicbovee.com/date-field-polyfill
 * Description:       Adds date-picker-polyfill to unsupported browsers.
 * Version:           1.0.1
 * Author:            Nic Bovee
 * Author URI:        nicbovee.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       date-field-polyfill
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
define( 'DATE_FIELD_POLYFILL_VERSION', '1.0.1' );




add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script( "date-field-polyfill", plugin_dir_url( __FILE__ ) . 'public/js/date-field-polyfill-public.js', array( 'jquery' ), DATE_FIELD_POLYFILL_VERSION, false );
});