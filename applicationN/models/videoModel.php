<?php
class VideoModel extends CI_Model {

	
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	
	/**
	* 按ID获取视频信息
	*/
	function getVideoById($id){
		$sql = 'select * from g_video where g_video_id = "'.$id.'"';
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