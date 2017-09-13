<?php

class Api_model extends ADLINKX_Model {
	private $db;
	private $dsp_satef_list;
	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
		$this->dsp_satef_list = array('date','edate','device','store_id','plan_id','unit_id','ad_task_id','ds_pv','ds_click','ds_charge');
	}

	public function query_list($type, $shop_id, $start_date, $end_date, $format, $metric, $offset = 1, $num = 20, $key = 'id', $stor = 'DESC', $fields = '*' , &$count){
		if($type == 'week'){
			$c = '';
			$where = '';
		}elseif($type == 'date'){
			$c = 'DATE_FORMAT(`ds`.`date`,"%m") AS `date`';
			$where = 'AND `ds`.`date` LIKE "'.date('Y-',time()).'%"';
			$group_by = 'DATE_FORMAT(`ds`.`date`,"%m")';
		}else{
			$c = '`ds`.`'.$type.'`';
			$where = 'AND `ds`.`date` >= "'.$start_date.'" AND `ds`.`date` <= "'.$end_date.'"';
			$group_by  = '`ds`.`'.$type.'`';
		}
		switch($metric){
			case 'pv':	//浏览量
				$fields = $c.',SUM(`ds`.`pv`) AS `pv`';
			break;
			case 'click':	//点击
				$fields = $c.',SUM(`ds`.`click`) AS `click`';
			break;
			case 'charge': //总消耗
				$fields = $c.',SUM(`ds`.`charge`) AS `charge`';
			break;
			default:	//
				$fields = $c.',`ds`.`hour`,SUM(`ds`.`pv`) AS `pv`,SUM(`ds`.`click`) AS `click`,SUM(`ds`.`charge`) AS `charge`,IFNULL(SUM(`ds`.`click`)/SUM(`ds`.`pv`) * 100,0) AS `ctr`,IFNULL(SUM(`ds`.`charge`) / SUM(`ds`.`click`),0) AS `click_cost`';
			break;
		}
		if($format == 'chart'){
			$sql = 'SELECT '.$fields.' FROM (`huihe_marketing_system`.`dsp_stats_ad_task` AS `ds`) WHERE `ds`.`uid` = "0" '.$where.' AND `ds`.`store_id` = "'.$shop_id.'" GROUP BY '.$group_by;
		}else{
			$count_sql = 'SELECT COUNT(*) AS `count` FROM (`huihe_marketing_system`.`dsp_stats_ad_task` AS `ds`) WHERE `ds`.`uid` = "0" AND `ds`.`date` >= "'.$start_date.'" AND `ds`.`date` <= "'.$end_date.'" AND `ds`.`store_id` = "'.$shop_id.'" GROUP BY `ds`.`'.$type.'`';
			$sql = 'SELECT '.$fields.' FROM (`huihe_marketing_system`.`dsp_stats_ad_task` AS `ds`) WHERE `ds`.`uid` = "0" '.$where.' AND `ds`.`store_id` = "'.$shop_id.'" GROUP BY `ds`.`'.$type.'` ORDER BY '.$key.' '.$stor.' LIMIT '.intval(($offset-1)/$num).','.$num;
		}
		// var_dump($sql);
		$query = $this->db->query($sql);
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}


	public function dsp_satef($type, $shop_id, $start_date, $end_date, $format, $metric, $offset = 1, $num = 20, $key = 'id', $stor = 'DESC', $fields = '*' , &$count){
		switch($type){
			case 'week':
			break;
			case 'month':
			break;
			default:
				$field = '';
			break;
		}
		$sql = 'SELECT * FORM (`huihe_marketing_system`.`dsp_stats_ad_task_effects` AS `df`) WHERE `df`.`store_id`="'.$shop_id.'"'.'GROUP BY '.$type;
	}

	public function get_table_data($type, $shop_id, $offset, $num, $key, $stor, $fields, &$count){
		switch($type){
			case 'plan':
			break;
			case 'unit':
			break;
			case 'creative':
			break;
			default:
				$count_sql = 'SELECT COUNT(*) AS `count` FROM (`huihe_marketing_system`.`dsp_stats_ad_task_effects` AS `df`) WHERE `df`.`store_id`="'.$shop_id.'" AND `df`.`date` LIKE "'.date('Y-m',time()).'%"';
				$sql = 'SELECT `df`.`date`,`df`.`ds_pv`,`df`.`ds_click`,`df`.`ds_charge` FROM (`huihe_marketing_system`.`dsp_stats_ad_task_effects` AS `df`) WHERE `df`.`store_id`="'.$shop_id.'" AND `df`.`date` LIKE "'.date('Y-m',time()).'%" GROUP BY `df`.`date` ORDER BY `df`.`date` '.$stor.' LIMIT '.intval(($offset-1)/$num).','.$num;
			break;
		}
		$count = $this->db->query($count_sql)->result_array()[0]['count'];
		$query = $this->db->query($sql);
		// var_dump($sql);
		// var_dump($count_sql);
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}
}