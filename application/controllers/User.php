<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * |--------------------------------------------------------------
 * | User Controller
 * |--------------------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date
 * |--------------------------------------------------------------
 */
class User extends ADEASE_Controller {
	public function __construct() {
		parent::__construct();
		// $this->initialization();
		$this->load->model('user_model', 'user');
		$this->load->model('loger_model', 'loger');
	}

	public function login() {
		$this->display('user/login.html');
	}

	public function register() {
		$this->display('user/register.html');
	}

	public function sign_in() {
		$result = array();
		$input_data = $this->input->post();
		$remember = $input_data['isChecked'];
		unset($input_data['isChecked']);
		$check_status = $this->check_password($input_data);
		if ($check_status && isset($check_status) && !empty($check_status)) {

			$signin_date = time();
			$loger_data = array(
				'uid' => $check_status['uid'],
				'actions' => '用户登录',
				'remarks' => '尊敬的用户[' . $check_status['name'] . ']:您于' . date('Y-m-d', $signin_date) . '登录成功。<a href="https://www.adease.com">www.adease.com</a>',
				'ip' => sprintf("%u", ip2long($_SERVER['REMOTE_ADDR'])),
				'is_del' => 0,
				'timer' => $signin_date,
				'group' => '',
				'permissions' => 'rw',
			);
			$loger_status = $this->loger->add($loger_data);

			unset($check_status['enctype']);
			unset($check_status['password']);
			$this->session->set_userdata($check_status); //设置session
			if ($remember) {
//记住密码
				foreach ($check_status AS $key => $value) {
					//设置一周有效，域名www.adease.com，采用https加密传输cookie，共享javascript的cookie
					set_cookie($key, $value, (time() + 3600 * 24 * 7), 'www.adease.com', '/', true, false);
				}
			}
			$result['code'] = 0;
			$result['msg'] = 'SUCCESS';
			$result['data'] = '';
		} else {
			$result['code'] = 1;
			$result['msg'] = 'ERROR';
			$result['data'] = '';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	public function sigin_up() {
		$input_data = array();
		foreach ($this->input->post() AS $key => $value) {
			array_push($input_data, $value);
		}
		list($account, $passwd, $confirmPasswd, $email, $phone, $isChecked) = $input_data;
		$data = array();
		$data['uid'] = FN_generator_id();
		$data['enctype'] = FN_md5_enctype();
		$data['is_del'] = 0;
		$data['add_time'] = time();
		$data['group'] = '';
		$data['permissions'] = 'rw';
		$result = array();

		if (empty($account)) {
			$result['code'] = 2;
			$result['msg'] = '';
			$result['data'] = '';
		} else {
			$data['name'] = $account;
		}
		if (empty($passwd)) {
			$result['code'] = 2;
			$result['msg'] = '';
			$result['data'] = '';
		} else {
			$data['password'] = FN_md5_password($passwd, $data['enctype']);
		}
		if (empty($email)) {
			$result['code'] = 2;
			$result['msg'] = '';
			$result['data'] = '';
		} else {
			$data['email'] = $email;
		}
		if (empty($phone)) {
			$result['code'] = 2;
			$result['msg'] = '';
			$result['data'] = '';
		} else {
			$data['phone'] = $phone;
		}

		// var_dump($data);
		$user_status = $this->user->add($data);

		$loger_data = array(
			'uid' => $data['uid'],
			'actions' => '用户注册',
			'remarks' => '尊敬的用户[' . $data['name'] . ']:您于' . date('Y-m-d', $data['add_time']) . '注册成功。<a href="https://www.adease.com">www.adease.com</a>',
			'ip' => sprintf("%u", ip2long($_SERVER['REMOTE_ADDR'])),
			'is_del' => 0,
			'timer' => $data['add_time'],
			'group' => '',
			'permissions' => 'rw',
		);
		$loger_status = $this->loger->add($loger_data);

		if ($user_status && $loger_status) {
			$result['code'] = 0;
			$result['msg'] = 'SUCCESS';
			$result['data'] = '';
		} else {
			$result['code'] = 1;
			$result['msg'] = 'ERROR';
			$result['data'] = '';
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	public function Verification() {
		$data = $this->input->post();
		if (!empty($data['action']) && $data['action'] == 'qaptcha' && !empty($data['qaptcha_key'])) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function check_password($data) {
		$where = array('name' => $data['account']);
		$passwd = $data['passwd'];
		$query = $this->user->get($where, array('uid', 'name', 'password', 'enctype', 'group', 'permissions', 'avatar'));
		// var_dump($query);
		return is_array($query) && !empty($query) ? (
			FN_md5_password_verify($passwd, $query['password'], $query['enctype']) ? $query : false
		) : false;
	}

	public function ckeckLogin() {
		// var_dump($this->session->userdata('uid'));
		echo $this->session->userdata('uid') != '' || $this->session->userdata('name') != '' ? json_encode(array('code' => 0, 'msg' => true, 'data' => $this->session->userdata())) : json_encode(array('code' => 1, 'msg' => false, 'data' => ''));
	}

	public function sign_out() {
		$sesion_items = array('uid', 'group', 'permissions', 'name', 'avatar');
		$this->session->unset_userdata($sesion_items);
		redirect('https://www.adlinkx.com/user/login', 'auto ', 301);
	}
}