<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | ADLINKX_Model Model extended class
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-01-07
 * |--------------------------------------------------------------
 */
class ADLINKX_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * 获取指定数据库
	 * @param  [type] $db [description]
	 * @return [type]     [description]
	 */
	public function get_database($db) {
		$this->load->database($db, TRUE);
	}
}