<?php
/**
 * Creates the submenu page for the plugin.
 *
 * @package Custom_Admin_Settings
 */
 
/**
 * Creates the submenu page for the plugin.
 *
 * Provides the functionality necessary for rendering the page corresponding
 * to the submenu with which this page is associated.
 *
 * @package Custom_Admin_Settings
 */
class Submenu_Page {
	private $links = array();

	public function __construct() {
		$this->init_links();
	}

	private function init_links() {
		$this->links['Facebook Wall'] = '&utm_source=facebook&utm_medium=matteus-wall';
		$this->links['Whatsapp CLW'] = '&utm_source=whatsapp&utm_medium=clw';
		$this->links['Newsletter Image'] = '&utm_source=newsletter&utm_medium=image';
		$this->links['Newsletter Text'] = '&utm_source=newsletter&utm_medium=text';
	}

    /**
     * This function renders the contents of the page associated with the Submenu
     * that invokes the render method. In the context of this plugin, this is the
     * Submenu class.
     */
	public function render() {
		$slug = 'this-is-the-test-slug';
		$utm_campaign = '?utm_campaign=' . $slug;

		foreach ($this->links as $name => $link) {
			$full_link = $utm_campaign . $link;
			echo '<p><strong>' . $name . ':</strong> ' . $link . '</p>';
		}
		echo 'test';
    }
}
