<?php
/**
 * |---------------------------------------------------
 * | Strategy_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-01-07
 * |--------------------------------------------------------------
 */
class Strategy_model extends ADLINKX_Model {
	private $db;
	private $table_name;
	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
		$this->table_name = 'diy_unit';
		$this->load->model('dsp_rtb_rules_model','drrm');
		$this->load->model('launch_model','launch');
	}

	public function add($data = array()){
		$plan = $this->launch->get(array('plan_id' => $data['plan_id']));
		$unit_id = $this->get_seq_id();
		$set_data = array(
			'unit_id'	=> $unit_id,
			'unit_name'	=> $data['unit_name'],
			'plan_id'	=> $plan['plan_id'],
			'plan_name'	=> $plan['plan_name'],
			'type'		=> 1,
			'shop_id'	=> $plan['shop_id'],
			'plat_id'	=> 134,
			'plat_name'	=> '秒针',
			'uid'		=> $plan['uid'],
			'is_del'	=> 0,
			'status'	=> 1,
			'price'		=> $data['price'],
			'unit_create_time' => date('Y-m-d H:i:s'),
			'tags_value' => $data['tags_value']
		);
		// var_dump($set_data);
		$add_unit = $this->db->insert($this->table_name, $set_data);
		// 添加一条竟价规则
		$add_rules = $this->drrm->set($data['plan_id'], $data['uid'], $unit_id, json_decode($data['date_value']));
		return $add_unit && $add_rules ? $unit_id : false ;
	}

	public function get($where = array()){
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where($where);
		$query = $this->db->get();
		return $query && $query->num_rows() > 0 ? $query->row_array() :array();
	}

	public function lists($where = array(), $num = 20, $offset = 1, $key = 'id', $stor = 'desc', $fields = '*', &$count){
		$count_sql = 'SELECT COUNT(*) AS `count` FROM `huihe_marketing_system`.`'.$this->table_name.'` '.$this->build_where($where);
		$count = $this->db->query($count_sql)->result_array()[0]['count'];
		$sql = 'SELECT * FROM `huihe_marketing_system`.`'.$this->table_name.'` ' . $this->build_where($where) .' ORDER BY '.$key.' '.$stor.' LIMIT '.intval(($offset-1)/$num) . ',' .$num;
		$query = $this->db->query($sql);
		// var_dump($this->db->last_query());
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function get_all($where){
		$sql = 'select * from `huihe_marketing_system`.`'.$this->table_name.'` '.$this->build_where($where);
		$query = $this->db->query($sql);
		return $query && $query->num_rows() > 0 ?$query->result_array() : array();
	}

	public function update($data = array(), $where =array()){
		$this->db->where($where);
		$query = $this->db->update($this->table_name,$data);
		// var_dump($this->db->last_query());
		return $query && $this->db->affected_rows() > 0 ? true: false;
	}

	public function delete($where = array()){
		$FB = null;
		for($i=0;$i<count($where);$i++){
			$FB = $this->update(array('is_del' => 1), $where[$i]);
		}
		return $FB;
	}

	public function update_strategy($data,$where){
		$date_value = $data['date_value'];
		unset($data['date_value']);
		$res = $this->update($data,$where);
		//添加一条竟价规则
		$update_rules = $this->drrm->set($where['plan_id'], $where['uid'], $where['unit_id'], json_decode($date_value));
		return $res && $update_rules ? true : false;
	}

	public function build_where($where = array()){
		$tmp = '';
		foreach($where AS $k => $v){
			if(!empty($v)){
				if($k == 'unit_name'){
					$tmp .= '`' . $k . '`' . ' like "%' . $v .'%" and ';
				}else{
					$tmp .= '`' . $k . '`' . '=' . $v .' and ';
				}
			}
			
		}
		return !empty($tmp) ? 'WHERE '. substr($tmp,0,intval(strlen($tmp)-5)) : '';
	}
}