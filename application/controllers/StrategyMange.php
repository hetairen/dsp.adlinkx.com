<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | StrategyMange Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class StrategyMange extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('store_model','store');
	}
	public function index() {

	}

	public function add() {

	}

	public function update() {

	}

	public function delete() {

	}

	public function get() {

	}

	public function lists() {
		$store_lists = $this->store->lists($this->session->userdata('uid'));
		$this->assign('store_lists',$store_lists);
		$this->display('strategy/list.html');
	}
}