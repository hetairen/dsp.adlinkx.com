<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Home Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class Home extends ADEASE_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
	}

	public function index() {
		$data = array();
		$smarty_cache_id = 'home_index';
		$this->display('home/index.html',$smarty_cache_id);
	}
}