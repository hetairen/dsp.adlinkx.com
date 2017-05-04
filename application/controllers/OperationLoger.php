<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | LaunchReport Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class OperationLoger extends ADEASE_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
		$this->load->model('loger_model', 'loger');
	}

	public function index() {
		$data = array();
		$where = array('uid' => $this->uid);
		$num = 20;
		$offset = 1;
		$key = 'timer';
		$sort = 'DESC';
		$fields = array('*');
		$result = $this->getAll($where, $num, $offset, $key, $sort, $fields);

		for ($i = 0; $i < count($result); $i++) {
			$result[$i]['ip'] = long2ip($result[$i]['ip']);
			$result[$i]['timer'] = date('Y-m-d H:i:s', $result[$i]['timer']);
		}

		$this->assign('logers', $result);
		$this->display('loger/lists.html');
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
		// $this->getAll($where, $num, $offset, $key, $sort, $fields);
	}

	private function getAll($where, $num, $offset, $key, $sort, $fields) {
		$lists = $this->loger->lists($where, $num, $offset, $key, $sort, $fields);
		return $lists && is_array($lists) && !empty($lists) ? $lists : array();
	}
}