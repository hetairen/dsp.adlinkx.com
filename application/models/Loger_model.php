<?php
/**
 * |---------------------------------------------------
 * | Loger_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class Loger_model extends ADEASE_Model {
	public function __construct() {
		parent::__construct();
	}

	public function add($data = array()) {
		$query = is_array($data) && !empty($data) ? $this->db->insert('operate_log', $data) : false;
		// var_dump($this->db->last_query());
		return $query ? true : false;
	}

	public function update($data = array(), $where = array()) {

	}

	public function get($where = array()) {

	}

	public function lists($where = array(), $num = 20, $offset = 1, $key = 'id', $sort = 'DESC', $fields = array('*')) {
		$this->db->select(implode(',', $fields));
		$this->db->from('operate_log');
		$this->db->where($where);
		$this->db->limit(intval($num * ($offset - 1)));
		$this->db->order_by($key, $sort);
		// var_dump($this->db->last_query());
		$query = $this->db->get();
		return $query && $query->num_rows() ? $query->result_array() : array();
	}

	public function delete($where = array()) {

	}
}