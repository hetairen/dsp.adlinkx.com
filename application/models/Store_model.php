<?php
/**
 * |---------------------------------------------------
 * | Store_model Model
 * |---------------------------------------------------
 * | Author bluelife
 * | Email thebulelife@outlook.com
 * | Date 2017-08-28
 * |--------------------------------------------------------------
 */
class Store_model extends ADLINKX_Model{
	private $db;

	public function __construct() {
		parent::__construct();
		$this->db = $this->get_database('aliyun');
	}

	public function add($data = array()){
		$seq_id = $this->get_seq_id();
		$shop_id = parent::$id_space['website'] + $seq_id+time();
		$param = array(
			"shop_id" => sprintf("%.0f", $shop_id),
			"shop_title" => $data['title'],
			"tanx_category" => $data['tanx_category'],
			"bes_industry_code" => $data['bes_category'],
			"vm_category" => $data['vm_category'],
			"update_time" => date("Y-m-d h:m:s"),
			"own_id" => $data['user_id'],
			"website" => $data['url'],
			"plat" => 'site',
			"other" => "{}",
		);
		$insert = $this->db->insert('store',$param);
		return $insert && $this->db->affected_rows() > 0 ? true : false ;
	}

	public function get($where = array()){

	}

	public function lists($where, $num = 20, $offset = 1, $key = 'id', $stor = 'desc', $fields = '*',&$count){
		unset($where['start_date']);
		unset($where['end_date']);
		$sql = 'select * from (select * from `huihe_marketing_system`.`store` where '.$this->build_where($where).' and `is_del`=0) as `s` left join `huihe_marketing_system`.`user` as `u` on `u`.`uid`=`s`.`own_id`';
		$count_sql = 'select count(*) as count from (select * from `huihe_marketing_system`.`store` where '.$this->build_where($where).' and `is_del`=0) as `s` left join `huihe_marketing_system`.`user` as `u` on `u`.`uid`=`s`.`own_id`';
		// $date_start = $where['start_date'];
		// $date_end = $where['end_date'];
		// unset($where['start_date']);
		// unset($where['end_date']);
		// $sql = "select * from (select `owner`,`shop_name`,uid,username,shop_site as shop_url,company_name,company_addr,contact,phone,email,fax,qq,add_time,ifnull(`channel_id`,'') as channel_id,ifnull(`money_agent`,0) as money_agent,ifnull(`money_adv`,0) as money_adv, charge_today, charge_yesterday from `huihe_marketing_system`.`user` where ".$this->build_where($where).") A left join (SELECT s.own_id,s.shop_id,sum(dsate.ds_click) click,ROUND(sum(dsate.ds_charge)/100,2) adv_charge, sum(dsate.ds_click)*0.5 agent_charge FROM store s left join `dsp_stats_ad_task_effects` dsate on s.shop_id = dsate.store_id and dsate.date between '" . $date_start . "' and '" . $date_end . "' group by s.own_id) as B on A.uid=B.own_id order by $key $stor limit ".intval(($offset-1)*$num).",".$num;
// var_dump($sql);
		$count = $this->db->query($count_sql)->result_array()[0]['count'];
		$query = $this->db->query($sql);
		return $query && $query->num_rows() > 0 ? $query->result_array() : array();
	}

	public function update($data = array(), $where =array()){
		$this->db->where($where);
		$query = $this->db->update('store', $data);
		return $query && $this->db->affected_rows() > 0 ? true: false;
	}

	public function delete($shop_id){
		$query = $this->update(array('is_del' => 1),array('shop_id' => $shop_id));
		return $query ? true : false;
	}

	public function build_where($where){
		$filter_list = array('shop_title','user_nick');
		$tmp = '';
		foreach($where AS $key => $value){
			if(in_array($key,$filter_list)){
				$tmp .= $key .' like "'. $value .'%" and ';
			}else{
				$tmp .= $key .' = '. $value . ' and ';
			}
		}
		return $tmp != '' ? substr($tmp,0,strlen($tmp)-5): '';
	}
}