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
		var_dump($_FILES);
		$ext_lists = array('jpg','jpeg','png','gif','swf','avi','wmv','3gp');
		$upload_dir = 'C:/web/www/www.adlinkx.com/resources/images/board';
		$name = $_FILES['files']['name'];
		$type = $_FILES['files']['type'];
		$tmp_name = $_FILES['files']['tmp_name'];
		$error = $_FILES['files']['error'];
		$size = $_FILES['files']['size'];
		$file_name = pathinfo($name,PATHINFO_BASENAME);
		$file_ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
		if(!in_array($file_ext, $ext_lists)){
			$this->output_json(false,'错误的文件类型');
			exit;
		}
		if($size > 1024*1024){	//上传文件不能大于1M
			$this->output_json(false, '上传的文件超过规定的大小');
			exit;
		}
		if($error != 0){
			$this->output_json(false, $error);
			exit;
		}
		$new_file_name = 'd_'.md5(microtime()).'.'.$file_ext;
		$new_file_path = $upload_dir.'/'.$new_file_name;
		if(move_uploaded_file($tmp_name,$new_file_path)){//move upload file
			$this->output_json(true,array(
				'upload_file_dir' => $upload_dir,
				'upload_file_name' => $new_file_name,
				'upload_file_full_path' => $new_file_path,
			));
			exit;
		}else{
			$this->output_json(false,'移动文件失败');
			exit;
		}
	}
}