<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Creative_model Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class Creative_model extends ADLINKX_Model {
	private $db;
	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
	}

	public function add($data = array()){

	}

	public function get($where = array()){
		$this->db->select('*');
		$this->db->from('diy_ad_task');
		$this->db->where($where);
		$query = $this->db->get();
		return $query && $query->num_rows() > 0 ? $query->row_array() : array() ;
	}

	public function lists($where = array(), $offset = 0, $num = 20, $key = 'id', $stor = 'desc', $fields = '*', &$count){
		$count_sql = 'SELECT COUNT(*) AS `count` FROM `huihe_marketing_system`.`diy_ad_task` '.$this->build_where($where);
		$count = $this->db->query($count_sql)->result_array()[0]['count'];
		$this->db->select($fields);
		$this->db->from('diy_ad_task');
		$this->db->where($where);
		$this->db->order_by($key);
		$this->db->limit($num, intval(($offset-1)/$num));
		$query = $this->db->get();
		return $query && $query->num_rows() > 0 ? $query->result_array() : array() ;
	}

	public function update($data = array(), $where = array()){

	}

	public function delete($where = array()){

	}

	public function build_where($where = array()){
		$tmp = '';
		foreach($where AS $k => $v){
			$tmp .= '`' . $k . '`' . '=' . $v .' and ';
		}
		return 'where '. substr($tmp,0,intval(strlen($tmp)-5));
	}
}