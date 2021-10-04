<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboardController extends CI_Controller {
	function __construct() 
	{ 
		parent::__construct(); 
		$login=$this->session->userdata('logged_in');
		$user_role=$this->session->userdata('user_role');
		if($login==FALSE && $user_role!='Admin')
		{
			redirect(base_url());
		}
		//$this->load->model('UserModel'); 
		//$this->load->model('UserRoleModel'); 
	}
	
	public function index()
	{
		$data=array();
		$data['title']="Admin Dashboard";
		//$data['users']=$this->UserModel->getAllUser();
		$this->load->view('template/header',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
	}
	
}
