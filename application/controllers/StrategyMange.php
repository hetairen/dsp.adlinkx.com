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
		$this->load->model('launch_model','launch');
		$this->load->model('strategy_model','strategy');
	}
	public function index() {

	}

	public function add() {
		$data = $this->input->post();
		$data['uid'] = $this->session->userdata('uid');
		// var_dump($data);
		$unit_id = $this->strategy->add($data);
		if($unit_id){
			$this->output_json(true,array('unit_id' => $unit_id));
		}else{
			$this->output_json(false,'');
		}
	}

	public function update() {
		$data = $this->input->post();
		$where = array('unit_id' => $data['unit_id'], 'plan_id' => $data['plan_id'], 'shop_id' => $data['shop_id'], 'uid' => $this->session->userdata('uid'));
		$data = array('unit_name' => $data['unit_name'], 'price' => $data['price'], 'tags_value' => $data['tags_value'], 'date_value' => $data['date_value']);
		$up = $this->strategy->update_strategy($data,$where);
		if($up){
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
			$where[$i]['unit_id'] = $ids2arr[$i];
		}
		$del = $this->strategy->delete($where);
		if($del){
			$this->output_json(true,'');
		}else{
			$this->output_json(false,'');
		}
	}

	public function get() {

	}

	public function lists() {
		$is_ajax = $this->uri->segment(5);
		$plan_id = $this->uri->segment(6);
		$shop_id = $this->uri->segment(7);
		$key_words = $this->uri->segment(8) ? $this->uri->segment(8) : '';
		$this->get_plan_lists($plan_id,$shop_id);
		$count = 0;
		$where = $plan_id && $shop_id && $key_words ? array('plan_id' => $plan_id, 'shop_id' => $shop_id, 'unit_name' => $key_words) : ($plan_id && $shop_id ? array('plan_id' => $plan_id,'shop_id' => $shop_id, 'is_del' => 0) : array());
		$offset = $this->uri->segment(9) ? $this->uri->segment(9) : 1;
		$num = $this->uri->segment(10) ? $this->uri->segment(10) : 20;
		$key = $this->uri->segment(11) ? $this->uri->segment(11) : 'unit_id';
		$stor = $this->uri->segment(12) ? $this->uri->segment(12) : 'DESC';
		$fields = '*';
		$result = $this->strategy->lists($where, $num, $offset, $key, $stor, $fields ,$count);
		// var_dump($result);
		if($is_ajax){
			$this->output_json(true,array('count' => ceil($count/$num), 'current'=> $offset, 'num' => $num, 'list' => $result));
		}else{
			$this->assign('result',$result);
			$this->assign('count',ceil($count/$num));
			$this->assign('current',$offset);
			$this->assign('num',$num);
			$this->display('strategy/list.html');
		}
	}

	public function get_plan_lists($plan_id,$shop_id){
		$count = 0;
		$plan_lists = $this->launch->lists(array('plan_id' =>$plan_id, 'shop_id' => $shop_id),20,1,'shop_id','desc','*',$count);
		$this->assign('plan_list',$plan_lists);
		
	}

	public function status(){
		$FB = null;
		$ids = $this->input->post('ids');
		$action = $this->input->post('action');
		$ids2arr = explode(',', $ids);
		for($i=0;$i<count($ids2arr);$i++){
			$FB = $this->strategy->update(array('status' => ($action == 'start' ? 1 : 0 )),array('unit_id' => $ids2arr[$i]));
		}
		if($FB){
			$this->output_json(true,'');
		}else{
			$this->output_json(false,'');
		}
	}
}