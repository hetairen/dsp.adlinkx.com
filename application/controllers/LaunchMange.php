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
		$this->load->model('loger_model','loger');
	}
	public function index() {

	}

	public function add() {
		$add_data = $this->input->post();
		$add_data['uid'] = $this->session->userdata('uid');
		$plan_id = $this->launch->add($add_data);
		if($plan_id){
			$log_data = array(
				'uid' => $this->session->userdata('uid'),
				'username' => $this->session->userdata('username'),
				'channel_id' => 224,
				'operation' => '',
				'operate_time' => date('Y-m-d H:i:s',time()),
				'ip' => FN_GET_CLIENT_IP()
			);
			//添加操作日志
			$this->loger->add_operation_log($log_data);
			$this->session->set_userdata('plan_name',$add_data['plan_name']);
			$this->session->set_userdata('plan_id',$plan_id);
			$this->output_json(true,array('plan_id' => $plan_id));
		}else{
			$this->output_json(false,'');
		}
	}

	public function update() {
		$data = $this->input->post();
		$where = array('shop_id' => $data['shop_id'],'plan_id' => $data['plan_id']);
		unset($data['shop_id']);
		unset($data['plan_id']);
		$res = $this->launch->update($data, $where);
		if($res){
			$this->output_json(true,'');
		}else{
			$this->output_json(false,'');
		}
	}

	public function delete() {
		$where = array();
		$ids = $this->input->post('ids');
		$ids2arr = explode(',', $ids);
		for($i=0;$i<count($ids2arr);$i++){
			$where[$i]['plan_id'] = $ids2arr[$i];
		}
		$del = $this->launch->delete($where);
		if($del){
			$this->output_json(true,'');
		}else{
			$this->output_json(false,'');
		}
	}

	public function get() {

	}

	public function lists() {
		$this->get_store_lists();
		$is_ajax = $this->uri->segment(5) ? $this->uri->segment(5) : 0;
		$shop_id=$this->uri->segment(6) ? $this->uri->segment(6) : $this->session->userdata('shop_id');
		$key_words = $this->uri->segment(7) ? $this->uri->segment(7) : '';
		$uid = $this->session->userdata('uid');
		$count = 0;
		$offset = $this->uri->segment(8) ? $this->uri->segment(8) : 1;
		$num = $this->uri->segment(9) ? $this->uri->segment(9) : 20;
		$key = $this->uri->segment(10) ? $this->uri->segment(10) : 'plan_id';
		$stor = $this->uri->segment(11) ? $this->uri->segment(11) : 'DESC';
		$fields = '*';
		// $shop_id = $this->uri->segment(9) ? $this->uri->segment(9) : null ;
		// var_dump($shop_id);
		$where = $shop_id && $key_words ? array('uid' => $uid, 'shop_id' => $shop_id, 'is_del' => 0 ,'plan_name' => $key_words) : ($shop_id ? array('uid' => $uid, 'shop_id' => $shop_id, 'is_del' => 0) : array('uid' => $uid, 'is_del' => 0));
		$result = $this->launch->lists($where, $num, $offset, $key, $stor, $fields, $count);
		if($is_ajax){
			$this->output_json(true,array('count' => ceil($count/$num), 'current'=> $offset, 'num' => $num, 'list' => $result));
		}else{
			$this->assign('result',$result);
			$this->assign('count',ceil($count/$num));
			$this->assign('current',$offset);
			$this->assign('num',$num);
			$this->display('launch/lists.html');
		}
	}

	public function get_store_lists(){
		$count = 0;
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'update_time','desc','*',$count);
		$this->session->set_userdata('shop_id',$store_lists[0]['shop_id']);
		$this->assign('store_lists',$store_lists);
	}

	public function status(){
		$FB = null;
		$ids = $this->input->post('ids');
		$action = $this->input->post('action');
		$ids2arr = explode(',', $ids);
		for($i=0;$i<count($ids2arr);$i++){
			$FB = $this->launch->update(array('status' => ($action == 'start' ? 1 : 0 )),array('plan_id' => $ids2arr[$i]));
		}
		if($FB){
			$this->output_json(true,'');
		}else{
			$this->output_json(false,'');
		}
	}
}