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
class Report extends ADLINKX_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
	}

	public function index() {

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
		$this->display('report/launch_list.html');
	}
}