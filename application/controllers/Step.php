<?php

class Step extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('store_model','store');
		$this->load->model('store_model','store');
	}

	public function edit(){
		$count = 0;
		$step = $this->uri->segment(5);
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'shop_id','desc','*',$count);
		$this->assign('store_lists',$store_lists);
		$this->assign('step',$step);
		$this->display('step/edit.html');
	}
}