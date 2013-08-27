<?php
class Video extends CI_Controller{
	
    function index(){
		
    }

	function __construct(){
        parent::__construct();
		$this->load->model('videoModel', 'videoMod');
	}
	
	function managePage(){
		//获取参数
		$type = 1;
		$curPage = 1;
		$pageSize = $this->config->item('video_page_size');
		
		//分页获取视屏列表
		$data['videos'] = $this->videoMod->getVideoPage($type,$curPage,$pageSize);
		
		$this->load->view('main',$data);
	}
	
	function detailPage(){
		//获取视频ID
		$id = $this->uri->segment(3);

		//获取视屏详细信息
		$data['video'] = $this->videoMod->getVideoById($id);
		
		//获取分类信息
		
		$this->load->view('detailPage',$data);
	}
	
}
?>