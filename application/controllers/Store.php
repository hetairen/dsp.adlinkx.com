<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Store Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-01-07
 * |--------------------------------------------------------------
 */
class Store extends ADLINKX_Controller{
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('store_model','store');
	}

	public function add(){
		$this->display('store/add_store.html');
	}

	public function add_to(){
		$data = $this->input->post();
		$status = $this->store->add($data);
		if($status){
			$result = array(
				'code' => 1,
				'msg' => 'success',
				'data' => '',
			);
		}else{
			$result = array(
				'code' => 0,
				'msg' => 'error',
				'data' => '',
			);
		}
		$this->output
    		->set_content_type('application/json','utf-8')
    		->set_output(json_encode($result));

	}

	public function get(){

	}

	public function lists(){
		$count = 0;
		$where =  array(
			'own_id' => $this->session->userdata('uid'),
			'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())
		);
		$offset = $this->uri->segment(7) != '' ? $this->uri->segment(7) : 1 ;
		$num = $this->uri->segment(8) != '' ? $this->uri->segment(8) : 20 ;
		$stor = $this->uri->segment(9) != '' ? $this->uri->segment(9) : 'DESC' ;
		$key = $this->uri->segment(10) != '' ? $this->uri->segment(10) : 'shop_id' ;
		$fields = '*';
		$store_lists = $this->store->lists($where, $num, $offset, $key, $stor, $fields, $count);
		// var_dump($store_lists);
		$this->assign('store_lists',$store_lists);
		$this->assign('count',ceil($count/$num));
		$this->assign('current',$offset);
		$this->display('store/store.html');	
	}

	public function delete(){
		$shop_id = $this->uri->segment(3);
		$status = $this->store->delete($shop_id);
		if($status){
			$result = array(
				'code' => 1,
				'msg' => 'success',
				'data' => ''
			);
		}else{
			$result = array(
				'code' => 0,
				'msg' => 'error',
				'data' => ''
			);
		}
		$this->output
    		->set_content_type('application/json','utf-8')
    		->set_output(json_encode($result));
	}

	public function update(){

	}
}