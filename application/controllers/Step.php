<?php

class Step extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('store_model','store');
	}

	public function edit(){
		$step = $this->uri->segment(5);
		$this->assign('step',$step);
		$this->display('step/edit.html');
	}
}