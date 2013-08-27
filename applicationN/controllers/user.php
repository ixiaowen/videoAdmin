<?php
class User extends CI_Controller{
	
    function index(){
    }

	function __construct(){
        parent::__construct();
		$this->load->model('UserModel', 'userMod');
	}
	
	
	function loginPage(){
		$this->load->view('login');
	}
	
	/*
	* 登录
	*/
	function doLogin(){
		$account=$_REQUEST['account'];
		$passwd=$_REQUEST['passwd'];
		if(isset($account)){
			if(isset($passwd)){
				$user = $this->userMod->getUserByAccount($account);
				
				if((FALSE != $user) && ($user->passwd==$passwd)){
					$userinfo=array('user_id' => $user->g_user_id ,'account' => $user->account );
					$this->session->set_userdata($userinfo);
					
					//$msg='success_'.$user['username']."_".$user['user_id'];
					
					redirect("Video/managePage","refresh");
				}else{
					$msg="用户名或密码错误！";
				}
			}else{
				$msg="密码不能为空！";
			}
		}else{
			$msg="用户名不能为空！";
		}
		
		$data['msg']=$msg;
		//echo $msg." dbpass: ".$user['password']." pass: ".$password." name ".$name;
		$this->load->view('login',$data);
	}
	
	/*
	* 移除session中的用户账号和id
	*/
	function logOut(){
		$array_items = array('account' => '', 'user_id' => '');
		$this->session->unset_userdata($array_items);
		
		$this->load->view('login');
	}
	
	/*
	* 判断是否已登录
	*/
	function _isLogged(){
		$user=$this->session->userdata('username');
		if(isset($user) && ($user!="")){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
}
?>