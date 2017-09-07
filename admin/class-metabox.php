<?php
/**
 * Creates the metabox for the posts
 */ 

class Metabox {
	private $links = array();

	public function __construct() {
	}

	private function init_links() {
		$this->links['Facebook Wall'] = '&utm_source=facebook&utm_medium=matteus-wall';
		$this->links['Whatsapp CLW'] = '&utm_source=whatsapp&utm_medium=clw';
		$this->links['Newsletter Image'] = '&utm_source=newsletter&utm_medium=image';
		$this->links['Newsletter Text'] = '&utm_source=newsletter&utm_medium=text';
	}

	public function init() {
		$this->init_links();
		add_action('add_meta_boxes', array($this, 'waub_register_meta_box'));
	}

	public function waub_register_meta_box() {
		add_meta_box(
			'waub_meta_box',
			__('Analytics Share Links', 'textdomain'),
			array($this, 'waub_meta_box_callback'),
			null,
			'side'
		);
	}

	public function waub_meta_box_callback($post) {
		$slug = $post->post_name;
		$utm_campaign = '?utm_campaign=' . $slug;
		$post_url = get_permalink($post);

		foreach ($this->links as $name => $link) {
			$full_link = $post_url . $utm_campaign . $link;
			echo '<p><input name="' . $full_link . '" type="button" class="button waub-button" value="' .$name . '"/></p>';
		}
	}
}
