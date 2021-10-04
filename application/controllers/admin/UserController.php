<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model('UserModel'); 
		$this->load->model('UserRoleModel'); 
	}
	
	public function index()
	{
		$data=array();
		$data['users']=$this->UserModel->getAllUser();
		$this->load->view('template/header');
		$this->load->view('admin/user/user-list',$data);
		$this->load->view('template/footer');
	}
	public function createUser()
	{
		$data['roles']=$this->UserRoleModel->getAllRole();
		$this->load->view('template/header');
		$this->load->view('admin/user/create_user',$data);
		$this->load->view('template/footer');
	}
	
	public function saveUser()
	{
	
		$name			=$this->input->post('name');
		$mobile_number	=$this->input->post('mobile_number');
		$user_role		=$this->input->post('user_role');
		$password		=$this->input->post('password');
		$cpassword		=$this->input->post('cpassword');
		$status			=$this->input->post('status');

		$this->form_validation->set_rules('name', 'Name',
        'required|min_length[3]|max_length[20]',
        array(
                'required'      => 'Please type name.',
                'min_length'    => 'Name should be at least 3 characters long.',
                'max_length'    => 'Name should not exceeds 20 characters.')
		);
		$this->form_validation->set_rules('mobile_number', 'Mobile Number',
        'required|min_length[11]|max_length[12]',
        array(
                'required'      => 'Please type any user role name.',
                'min_length'    => 'Mobile Number should be exactly 11 characters.',
                'max_length'    => 'Mobile Number should not exceeds 11 digits.')
		);
		$this->form_validation->set_rules('password', 'Password',
        'required|min_length[6]|max_length[25]',
        array(
                'required'      => 'Password should not be empty.',
                'min_length'    => 'Password er length kompokkhe 6 hote hobe.',
                'max_length'    => 'Please set password in between 6-25 characters.')
		);
		$this->form_validation->set_rules('cpassword', 'Confirm Password',
        'required|matches[password]',
		array(
                'required'      => 'Password not matched.',
		)
		);
		
		$this->form_validation->set_error_delimiters('<br/><span class="alert alert-danger">', '</span>');
			if ($this->form_validation->run() == FALSE)
                {
                        $this->createUser();
                }
                else
                {
			   $data=array(
			   'name'=>$name,
			   'mobile_number'=>$mobile_number,
			   'user_role'=>$user_role,
			   'password'=>md5($password),
			   'status'=>$status,
			   );
			   //print_r($data);
			   //exit();
			   $save=$this->UserModel->saveUser($data);
			   if($save==true)
			   {
				$this->session->set_flashdata('success', 'Success! New User Created.');
				redirect('create-user');
			   }
				else 
				{
				$this->session->set_flashdata('error', 'Fail! Something went wrong.Please check and try again.');	
				redirect('create-user');
				}					
							   
                }
	}
}
