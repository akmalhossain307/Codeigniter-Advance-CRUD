<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function saveUser($data)
	{
	$insert=$this->db->insert('app_users',$data);
		if($insert)
		{
		return true;
		}
		else 
		{
		return false;
		}
	}
	public function getAllUser()
	{
	$result=$this->db->query('SELECT * FROM app_users');
	return $result->result_array();
	}

}
?>

