<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://matteusmagnusson.com
 * @since      1.0.0
 *
 * @package    Waub
 * @subpackage Waub/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Waub
 * @subpackage Waub/admin
 * @author     Matteus Magnusson <matteus@matteusmagnusson.com>
 */
class Waub_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Waub_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Waub_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/waub-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Waub_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Waub_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/waub-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register various admin functions
	 *
	 * @since  	1.0.0
	 */
	public function run_functions() {
		// Include dependencies
		foreach ( glob( plugin_dir_path( __FILE__ ) . '*.php' ) as $file ) {
			include_once $file;
		}

		// Metabox
		$metabox = new Metabox();
		$metabox->init();
		
		// Create menu
// 		$menu = new Submenu(new Submenu_Page());
// 		$menu->init();
	}
}
