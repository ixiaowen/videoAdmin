<?php
class UserModel extends CI_Model {

	
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	
	/**
	* 根据账号获取用户信息
	*/
	function getUserByAccount($account){
		$sql = 'select * from g_user where account = "'.$account.'"';
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	/**
	* 分页获取视频列表
	*/
	function getVideoPage($type=1,$curPage,$pageSize){
		$sql = 'select * from g_video
			where type = "'.$type.'"
			order by publish_date desc
			limit '.(($curPage-1)*$pageSize).','.$pageSize;
		$query = $this->db->query($sql);
		return $query->result();
	}
}

?>