<?php

Class AdminSetPasswordPlugin extends MantisPlugin {
	private $cmv_pages;
	private $current_page;
	
	
	function register() {
		$this->name		= 'Admin Set Password';
		$this->description 	= 'Displays an input field and button on "manage_user_edit_page" to change a users password directly.';
		//$this->page		= 'config';

		$this->version		= '0.1.1';
		$this->requires		= array('MantisCore' => '1.2.14');
		
		$this->author		= 'eCola GmbH, Heiko Schneider-Lange';
		$this->contact		= 'hsl@ecola.com';
		$this->url		= 'http://www.lebensmittel.de';
	}

	function config() {
		return array();
	}
	
	function init() {
		$this->cmv_pages = array(
			'manage_user_edit_page.php'
		);
		$this->current_page = basename($_SERVER['PHP_SELF']);
	}
	
	function hooks() {
		return array(
				'EVENT_LAYOUT_CONTENT_BEGIN' => 'my_begin',
				'EVENT_LAYOUT_CONTENT_END' => 'my_end',
				'EVENT_LAYOUT_RESOURCES' => 'my_resources'
			);
	}
	
	function my_begin($p_event) {
		if (!in_array($this->current_page, $this->cmv_pages)) return '';
		$test = include ('pages/plugin_myview.php');
		return $test;
	}

	function my_end($p_event) {
		if (!in_array($this->current_page, $this->cmv_pages)) return '';
		return '';
	}

	function my_resources($p_event) {
		if (!in_array($this->current_page, $this->cmv_pages)) return '';
		return '<script src="plugins/AdminSetPassword/resources/jquery-1.9.1.min.js"></script>';
	}
}
