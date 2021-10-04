<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserRoleModel extends CI_Model {
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
	public function getAllRole()
	{
	$result=$this->db->query('SELECT * FROM user_role');
	return $result->result_array();
	}

}
?>

