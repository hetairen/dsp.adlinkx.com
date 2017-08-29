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
		$shop_id = parent::$id_space['website'] + $seq_id+time();
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

	public function lists($own_id, $num = 20, $offset = 1, $key = 'id', $stor = 'desc', $fields = '*'){
		$sql = 'select * from (select * from `huihe_marketing_system`.`store` where `own_id`="'.$own_id.'" and `is_del`=0) as `s` left join `huihe_marketing_system`.`user` as `u` on `u`.`uid`=`s`.`own_id`';
		$query = $this->db->query($sql);
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function update($data = array(), $where =array()){
		$this->db->where($where);
		$query = $this->db->update('store', $data);
		return $query && $this->db->affected_rows() > 0 ? true: false;
	}

	public function delete($shop_id){
		$query = $this->update(array('is_del' => 1),array('shop_id' => $shop_id));
		return $query ? true : false;
	}
}