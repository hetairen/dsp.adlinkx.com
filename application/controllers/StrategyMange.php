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
		// $this->load->model('launch_model.php','launch');
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
		$count = 0;
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'shop_id','desc','*',$count);
		// $launch_list = $this->launch->lists();
		// $this->assign('store_lists',$store_lists);
		$this->display('strategy/list.html');
	}
}