<?php
/**
 * |---------------------------------------------------
 * | Strategy_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-01-07
 * |--------------------------------------------------------------
 */
class Strategy_model extends ADLINKX_Model {
	private $db;
	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
	}

	public function add($data = array()){

	}

	public function get($where = array()){

	}

	public function lists($where = array(), $num = 20, $offset = 1, $key = 'id', $stor = 'desc', $fields = '*', &$count){
		$count_sql = 'SELECT COUNT(*) AS `count` FROM `huihe_marketing_system`.`diy_unit` '.$this->build_where($where);
		$count = $this->db->query($count_sql)->result_array()[0]['count'];
		$this->db->select($fields);
		$this->db->from('diy_unit');
		$this->db->where($where);
		$this->db->limit($num,intval(($offset-1)/$num));
		$this->db->order_by($key,$stor);
		$query = $this->db->get();
		// var_dump($this->db->last_query());
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function update($data = array(), $where =array()){

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