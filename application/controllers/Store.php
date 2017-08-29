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
		$where = array('own_id' => $this->session->userdata('uid'));
		$offset = $this->uri->segment(3) != '' ? $this->uri->segment(3) : 1 ;
		$num = $this->uri->segment(4) != '' ? $this->uri->segment(4) : 20 ;
		$stor = $this->uri->segment(5) != '' ? $this->uri->segment(5) : 'DESC' ;
		$key = $this->uri->segment(6) != '' ? $this->uri->segment(6) : 'shop_id' ;
		$fields = array('*');
		$store_lists = $this->store->lists($where, $num, $offset, $key, $stor, $fields);
		// var_dump($store_lists);
		$this->assign('store_lists',$store_lists);
		$this->display('store/store.html');	
	}

	public function delete(){

	}

	public function update(){

	}
}