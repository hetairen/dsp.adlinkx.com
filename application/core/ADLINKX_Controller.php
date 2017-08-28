<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | ADLINKX_Controller Controller extended class
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class ADLINKX_Controller extends CI_Controller {
	public $uid;
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('cookie');
	}

	public function assign($key, $value) {
		$this->cismarty->assign($key, $value);
	}

	public function display($html) {
		$this->cismarty->display($html);
	}

	public function initialization() {
		if (is_array($this->session->userdata()) && ($this->session->has_userdata('uid') || $this->session->has_userdata('name'))) {
			$this->uid = $this->session->userdata('uid');
			$m = $this->uri->segment(3);
			$a = $this->uri->segment(4);
			$data['user']['uid'] = $this->session->userdata('uid') !== '' ? $this->session->userdata('uid') !== '' : 'root';
			$data['user']['permissions'] = $this->session->userdata('permissions') !== '' ? $this->session->userdata('permissions') : '';
			$data['user']['group'] = $this->session->userdata('group') !== '' ? $this->session->userdata('group') : '';
			$data['user']['name'] = $this->session->userdata('name') !== '' ? $this->session->userdata('name') : '';
			$data['user']['avatar'] = $this->session->userdata('avatar') !== '' ? '/resources/images/avatar/' . $this->session->userdata('avatar') : '/resources/images/photos/loggeduser.png';
			$this->assign('user', $data['user']);
			$this->assign('model',$m);
			$this->assign('action',$a);
		} else {
			redirect('https://www.adlinkx.com/user/login', 'auto ', 301);
		}

	}
}