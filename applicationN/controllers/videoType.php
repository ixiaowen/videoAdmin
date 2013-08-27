<?php
class VideoType extends CI_Controller{
	
    function index(){
		
    }

	function __construct(){
        parent::__construct();
		$this->load->model('videoTypeModel', 'typeMod');
	}
	
	function managePage(){
		//获取所有分类
		$data['types'] = $this->typeMod->getAllTypes();
		
		$this->load->view('typeDetailPage',$data);
	}
	
	function detailPage(){
		
	}
	
}
?>