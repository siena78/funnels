<?php
/**
 * Plugin Name: Contact Widgets
 * Description: Beautifully display social media and contact information on your website with these simple widgets.
 * Version: 1.3.1
 * Author: GoDaddy
 * Author URI: https://godaddy.com
 * Text Domain: contact-widgets
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

if ( ! class_exists( 'Contact_Widgets' ) ) {

	final class Contact_Widgets {

		/**
		 * Minimum PHP version
		 *
		 * @var string
		 */
		private $php_min_version = '5.4';

		/**
		 * Plugin assets URL
		 *
		 * @var string
		 */
		public static $assets_url;

		/**
		 * Class constructor
		 *
		 * @param string $cur_php_version
		 */
		public function __construct( $cur_php_version = PHP_VERSION ) {

			static::$assets_url = plugin_dir_url( __FILE__ ) . 'assets/';

			$composer_autoloader = dirname( __FILE__ ) . '/vendor/autoload.php';

			if ( defined( 'WP_CLI' ) && WP_CLI && file_exists( $composer_autoloader ) ) {

				// This is for enabling codeception
				require_once $composer_autoloader;

			}

			add_action( 'plugins_loaded', array( $this, 'i18n' ) );

			if ( version_compare( $cur_php_version, $this->php_min_version, '<' ) ) {

				add_action( 'shutdown', array( $this, 'notice' ) );

				return;

			}

			require_once dirname( __FILE__ ) . '/includes/autoload.php';

		}

		/**
		 * Load languages
		 *
		 * @action plugins_loaded
		 */
		public function i18n() {

			load_plugin_textdomain( 'contact-widgets', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

		}

		/**
		 * Display min PHP version notice
		 *
		 * @action shutdown
		 */
		public function notice() {

			printf(
				'<div class="error"><p>%s</p></div>',
				sprintf(
					__( 'Contact widgets requires PHP version %s or higher. Please deactivate the plugin and contact your system administrator.', 'contact-widgets' ),
					esc_html( $this->php_min_version )
				)
			);

		}

	}

	new Contact_Widgets;

}
