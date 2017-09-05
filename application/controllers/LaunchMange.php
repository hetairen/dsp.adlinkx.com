<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | LaunchMange Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class LaunchMange extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('store_model','store');
		$this->load->model('launch_model','launch');
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
		$shop_id='60002458';
		$uid= '1100855';
		$count = 0;
		$offset = $this->uri->segment(5) ? $this->uri->segment(5) : 1;
		$num = $this->uri->segment(6) ? $this->uri->segment(6) : 20;
		$key = $this->uri->segment(7) ? $this->uri->segment(7) : 'plan_id';
		$stor = $this->uri->segment(8) ? $this->uri->segment(8) : 'DESC';
		$fields = '*';
		// $shop_id = $this->uri->segment(9) ? $this->uri->segment(9) : null ;
		$where = $shop_id ? array('uid' => ($uid ? $uid :$this->session->userdata('uid')), 'shop_id' => $shop_id) : array('uid' => ($uid ? $uid :$this->session->userdata('uid')));
		$result = $this->launch->lists($where, $num, $offset, $key, $stor, $fields, $count);
		$this->assign('result',$result);
		$this->assign('count',ceil($count/$num));
		$this->assign('current',$offset);
		$this->assign('num',$num);
		$this->display('launch/lists.html');
	}

	public function get_store_lists(){
		$count = 0;
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'shop_id','desc','*',$count);
		$this->assign('store_lists',$store_lists);
	}
}