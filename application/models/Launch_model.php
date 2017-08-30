<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Launch_model Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class Launch_model extends ADLINKX_Model {
	private $db;
	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
	}

	public function add($data = array()){

	}

	public function get($where = array()){

	}

	public function lists($where = array(), $num = 0, $offset = 20, $key = 'id', $stor = 'desc', $fields = '*'){
		// $this->db->select();
		// $this->db->from();
		// $this->db->where();
		// $this->db->order();
		// $this->db->limit();
		// $this->db->get();
	}

	public function update($data = array(), $where =array()){

	}

	public function delete($where =array()){

	}
}