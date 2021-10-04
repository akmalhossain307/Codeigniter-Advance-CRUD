<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLoginModel extends CI_Model {
	
	public function saveUserRole($data)
	{
	$insert=$this->db->insert('user_role',$data);
		if($insert)
		{
		return true;
		}
		else 
		{
		return false;
		}
	}
	public function getUserDetail($userName,$password)
	{
	$result=$this->db->query("SELECT * FROM app_users WHERE mobile_number='$userName' AND password='$password'");
	return $result->result_array();
	}

}
?>

