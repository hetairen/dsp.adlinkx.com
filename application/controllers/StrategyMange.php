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
		$this->load->model('strategy_model','strategy');
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
		$this->get_store_lists();
		$count = 0;
		$plan_id = $this->uri->segment(5) ? $this->uri->segment(5) : '';
		$shop_id = $this->uri->segment(6) ? $this->uri->segment(6) : '';
		$where = $plan_id && $shop_id ? array('plan_id' => $plan_id,'shop_id' => $shop_id) : array();
		$offset = $this->uri->segment(7) ? $this->uri->segment(7) : 1;
		$num = $this->uri->segment(8) ? $this->uri->segment(8) : 20;
		$key = $this->uri->segment(9) ? $this->uri->segment(9) : 'unit_id';
		$stor = $this->uri->segment(10) ? $this->uri->segment(10) : 'DESC';
		$fields = '*';
		$result = $this->strategy->lists($where, $num, $offset, $key, $stor, $fields ,$count);
		// var_dump($result);
		$this->assign('result',$result);
		$this->assign('count',ceil($count/$num));
		$this->assign('current',$offset);
		$this->assign('num',$num);
		$this->display('strategy/list.html');
	}

	public function get_store_lists(){
		$count = 0;
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'shop_id','desc','*',$count);
		// $launch_list = $this->launch->lists();
		$this->assign('store_lists',$store_lists);
		
	}
}