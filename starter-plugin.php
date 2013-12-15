<?php
/**
 * Plugin Name: Starter Plugin
 * Plugin URI: http://example.com
 * Description: Site features for your new WordPress site
 * Version: 1.0
 * Author: %Author%
 * Author URI: http://example.com
 * License: GPL2
 *
 * @package Starter Plugin
 * @author %Author%
 */

// Load Advanced Custom Fields configuration
if ( ! defined( 'USE_LOCAL_ACF_CONFIGURATION' ) || ! USE_LOCAL_ACF_CONFIGURATION ) {
  require_once dirname( __FILE__ ) . '/advanced-custom-fields.php';
}

class Starter_Plugin {

  /**
   * Class constructor
   */
  public function __construct() {
    // This would be a good place to call methods you put in this class
  }

  // Add methods to register custom post types, taxonomies, etc. here

}

/**
 * Bootstrap the plugin
 * @return void
 */
function starter_plugin_init() {
  $GLOBALS['starter_plugin'] = new Starter_Plugin;
  return;
}
add_action( 'init', 'starter_plugin_init' );