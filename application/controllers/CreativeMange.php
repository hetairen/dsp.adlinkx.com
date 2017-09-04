<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | CreativeMange Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class CreativeMange extends ADLINKX_Controller {
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
		$count = 0;
		$store_lists = $this->store->lists(array('own_id' =>$this->session->userdata('uid'), 'start_date' => date('Y-m-d',time()),
			'end_date' => date('Y-m-d',time())),20,1,'shop_id','desc','*',$count);
		$this->assign('store_lists',$store_lists);
		$this->display('creative/list.html');
	}

	public function upload_files(){
		$ext_lists = array('jpg','png','gif','swf','avi','wmv','3gp');
		$upload_dir = '';
		list($name,$type,$tmp_name,$error,$size) = $_FILES['fileList'];
		$file_name = pathinfo($name,PATHINFO_BASENAME);
		$file_ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
		if(in_array($file_ext,$ext_lists)){
			echo '1';
		}
		if($size > 100*1024){
			echo '2';
		}
		if($error != 0){
			echo '3';
		}
		$new_file_name = '';
		$new_file_path = $upload_dir.'/'.$new_file_name;
		if(move_uploaded_file($tmp_name,$new_file_path)){//move upload file
			
		}
	}
}