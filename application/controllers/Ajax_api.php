<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Ajax_api Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class Ajax_api extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
	}

	public function store(){
		$this->load->model('store_model','store');
		$type = $this->uri->segment(3);
		// var_dump($type);
		$result = array();
		switch($type){
			case 'lists':
				$where =array();
				$count = 0;
				///ajax_api/store/lists/start_date/end_data/key_words/offset/num/key/stor
				$start_date = !empty($this->uri->segment(4)) ? $this->uri->segment(4): date('Y-m-d',time());
				$end_start = !empty($this->uri->segment(5)) ? $this->uri->segment(5): date('Y-m-d',time());
				$key_words = !empty($this->uri->segment(6)) ? urldecode($this->uri->segment(6)): '';
				$offset = !empty($this->uri->segment(7)) ? $this->uri->segment(7): 1;
				$num = !empty($this->uri->segment(8)) ? $this->uri->segment(8): 20;
				$key = !empty($this->uri->segment(9)) ? $this->uri->segment(9): 'shop_id';
				$stor = !empty($this->uri->segment(10)) ? $this->uri->segment(10): 'DESC';
				$fields = '*';
				$where['start_date'] = $start_date;
				$where['end_date'] = $end_start;
				if(isset($key_words) && !empty($key_words)){
					// is_numeric — 检测变量是否为数字或数字字符串
					if(preg_match('/^\d+$/i', $key_words)){
						$where['shop_id'] = $key_words;
					}else{
						$where['shop_title'] = $key_words;
					}
				}else{
					$where['own_id'] = $this->session->userdata('uid');
				}
				$store_lists = $this->store->lists($where,$num,$offset,$key,$stor,$fields,$count);
				if($store_lists && count($store_lists) > 0){
					$result['code'] = 1;
					$result['msg'] = 'success';
					$result['data'] = array(
						'count' => $count,
						'current' => $offset,
						'lists' => $store_lists
					);
				}else{
					$result['code'] = 0;
					$result['msg'] = 'error';
					$result['data'] = array();
				}
			break;
			case 'get':
			break;
			case 'delete':
			break;
			case 'update':
			break;
			default:
			break;
		}

		$this->output
    		->set_content_type('application/json','utf-8')
    		->set_output(json_encode($result));
	}
}