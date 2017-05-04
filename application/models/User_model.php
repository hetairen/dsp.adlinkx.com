<?php
/**
 * |---------------------------------------------------
 * | User_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class User_model extends ADEASE_Model {
	public function __construct() {
		parent::__construct();
	}

	public function add($data) {
		$query = is_array($data) && !empty($data) ? $this->db->insert('user', $data) : false;
		// var_dump($this->db->last_query());
		return $query && $this->db->insert_id() > 0 ? true : false;
	}

	public function update($where, $data) {

	}

	public function get($where, $fields = array('*')) {
		$this->db->select(implode(',', $fields));
		$this->db->where($where);
		$this->db->from('user');
		$query = $this->db->get();
		return $query && $query->num_rows() > 0 ? $query->result_array()[0] : array();
	}

	public function lists() {

	}

	public function delete($where) {

	}
}