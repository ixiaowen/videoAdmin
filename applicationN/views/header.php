<?php
$account=$this->session->userdata('account');
$user_id=$this->session->userdata('user_id');

if((!isset($user_id)) || (empty($user_id))){
	redirect("user/loginPage","refresh");
}
?>