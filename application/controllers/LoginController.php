<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	function __construct() 
	{ 
	parent::__construct(); 
	$this->load->model('UserLoginModel'); 
	}
	
	public function index()
	{
		$data=array();
		//$data['roles']=$this->UserRoleModel->getAllRole();
		$this->load->view('common/login');
	}
	public function checkLogin()
	{
		$userName=$this->input->post('username');
		$password=md5($this->input->post('password'));
		
		$this->form_validation->set_rules('username', 'User Name',
        'required|min_length[11]|max_length[12]',
         array(
                'required'      => 'Please type any user role name.',
                'min_length'    => 'You might typed wrong username',
                'max_length'    => 'You might typed wrong username')
		);
		$this->form_validation->set_rules('password', 'Password',
        'required|min_length[6]|max_length[25]',
         array(
                'required'      => 'Password should not be empty.',
                'min_length'    => 'You might typed wrong password',
                'max_length'    => 'You might typed wrong password')
		);
		$this->form_validation->set_error_delimiters('<br/><span class="alert alert-danger">', '</span>');
			if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('common/login');
                }
                else
                {
				$getLoginData=$this->UserLoginModel->getUserDetail($userName,$password);
				if($getLoginData==true){
				foreach($getLoginData as $data)
				{
					$user_role=$data['user_role'];
					$name=$data['name'];
				}
				if($user_role=='Admin')
				{
					$admin_url=base_url().'admin-dashboard';
					$data = array(
							'user_role'	=>$user_role ,
							'name'     	=>$name,
							'redir_url'	=>$admin_url,
							'logged_in'	=> TRUE
					);

					$this->session->set_userdata($data);
					$this->session->set_flashdata('success', 'Login Success! Please wait...');
					$this->load->view('common/login');
				}
				else if($user_role=='Customer')
				{
					$cus_url=base_url().'customer-dashboard';
					$data = array(
							'user_role'	=>$user_role ,
							'name'     	=>$name,
							'redir_url'	=>$cus_url,
							'logged_in'	=> TRUE
					);

					$this->session->set_userdata($data);
					$this->session->set_flashdata('success', 'Login Success! Please wait...');
					$this->load->view('common/login');
				}
				}
				else 
				{
					$this->session->set_flashdata('error', 'Fail! Username or password is incorrect.Please check and try again.');	
					$this->load->view('common/login');
				}					   
        }
	}
	
	public function userLogout()
	{
		session_unset();
		session_destroy();
		//$this->session->sess_destroy();
		redirect(base_url());
		
	}
}
