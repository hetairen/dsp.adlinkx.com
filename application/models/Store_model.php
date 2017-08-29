<?php
/**
 * |---------------------------------------------------
 * | Store_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-08-28
 * |--------------------------------------------------------------
 */
class Store_model extends ADLINKX_Model{
	private $db;

	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
	}

	public function add($data = array()){
		$seq_id = $this->get_seq_id();
		$shop_id = parent::$id_space['website'] + $seq_id;
		$param = array(
			"shop_id" => sprintf("%.0f", $shop_id),
			"shop_title" => $data['title'],
			"tanx_category" => $data['tanx_category'],
			"bes_industry_code" => $data['bes_category'],
			"vm_category" => $data['vm_category'],
			"update_time" => date("Y-m-d h:m:s"),
			"own_id" => $data['user_id'],
			"website" => $data['url'],
			"plat" => 'site',
			"other" => "{}",
		);
		$insert = $this->db->insert('store',$param);
		return $insert && $this->db->affected_rows() > 0 ? true : false ;
	}

	public function get($where = array()){

	}

	public function lists($where = array(), $num = 20, $offset = 1, $key = 'id', $stor = 'desc', $fields = '*'){
		$this->db->select($fields);
		$this->db->from('store');
		$this->db->where($where);
		$this->db->limit(intval(($offset-1)*$num), $num);
		$this->db->order_by($key, $stor);
		$this->db->join('user','store.own_id=user.uid','left');
		$query = $this->db->get();
		// var_dump($this->db->last_query());
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function update($data = array(), $where =array()){

	}

	public function delete($where = array()){

	}
}