<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | Account Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-01-07
 * |--------------------------------------------------------------
 */
class Account extends ADEASE_Controller {
	public function __construct() {
		parent::__construct();
		$this->initialization();
	}

	public function show() {
		$uid = $this->uid;
	}

	public function mange() {
		$this->display('account/mange.html');
	}

	public function invite_code() {
		$this->display('account/invite_code.html');
	}
}