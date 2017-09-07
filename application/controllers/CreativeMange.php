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
		$this->load->model('strategy_model','strategy');
		$this->load->model('creative_model','creative');
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
		$is_ajax = $this->uri->segment(5) ? $this->uri->segment(5) : 0;
		$unit_id = $this->uri->segment(6) ? $this->uri->segment(6) : '';
		$plan_id = $this->uri->segment(7) ? $this->uri->segment(7) : '';
		$shop_id = $this->uri->segment(8) ? $this->uri->segment(8) : '';
		$this->get_unit_lists($plan_id,$shop_id,$unit_id);
		$offset = $this->uri->segment(9) ? $this->uri->segment(9) : 1;
		$num = $this->uri->segment(10) ? $this->uri->segment(10) : 20;
		$key = $this->uri->segment(11) ? $this->uri->segment(11) : 'id';
		$stor = $this->uri->segment(12) ? $this->uri->segment(12) : 'DESC';
		$fields = '*';
		$where = array('unit_id' => $unit_id, 'plan_id' => $plan_id, 'shop_id' => $shop_id);
		$creative_lists = $this->creative->lists($where, $offset, $num, $key, $stor, $fields, $count);
		// var_dump($creative_lists);
		if($creative_lists && !empty($creative_lists) && count($creative_lists) > 0){
			for($i=0;$i<count($creative_lists);$i++){
				$creative_lists[$i]['ext'] = explode('.',$creative_lists[$i]['pic_path'])[1];
			}
		}
		$this->assign('count',ceil($count/$num));
		$this->assign('current',$offset);
		$this->assign('num',$num);
		$this->assign('creatives',$creative_lists);
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

	public function get_unit_lists($plan_id,$shop_id,$unit_id){
		$count = 0;
		$unit_lists = $this->strategy->lists(array('plan_id' => $plan_id, 'shop_id' => $shop_id, 'unit_id' => $unit_id),20,1,'shop_id','desc','*',$count);
		$this->assign('unit_lists',$unit_lists);
	}
}