<?php
class VideoTypeModel extends CI_Model {

	
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	
	/*
	* 获取所有分类
	*/
	function getAllTypes(){
		$sql = 'select * from g_type';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
}

?>