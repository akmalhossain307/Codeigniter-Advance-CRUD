<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleController extends CI_Controller {
	function __construct() 
	{ 
	parent::__construct(); 
	$this->load->model('UserRoleModel'); 
	}
	
	public function index()
	{
		$data=array();
		$data["title"]="User || Role ";
		$data['roles']=$this->UserRoleModel->getAllRole();
		$this->load->view('template/header',$data);
		$this->load->view('admin/role/role-list',$data);
		$this->load->view('template/footer');
	}
	public function createRole()
	{
		$data=array();
		$data["title"]="User || Create Role ";
		$this->load->view('template/header',$data);
		$this->load->view('admin/role/create_role');
		$this->load->view('template/footer');
	}
	
	public function saveUserRole()
	{
	
		$userRole=$this->input->post('userRole');
		$status=$this->input->post('status');

		$this->form_validation->set_rules('userRole', 'User Role',
        'required|min_length[3]|max_length[20]|is_unique[user_role.userRole]',
        array(
                'required'      => 'Please type any user role name',
                'min_length'     => 'Eta length kompokkhe 3 hote hobe.',
                'max_length'     => 'User role sorboccho 20 character er beshi hote parbena.',
                'is_unique'     => 'This user role already exists! Please type another role.'
        )
		);
		$this->form_validation->set_error_delimiters('<span class="alert alert-danger">', '</span>');
			if ($this->form_validation->run() == FALSE)
                {
                        $this->createRole();
                }
                else
                {
			   $data=array(
			   'userRole'=>$userRole,
			   'status'=>$status,
			   );
			   $save=$this->UserRoleModel->saveUserRole($data);
			   if($save==true)
			   {
				$this->session->set_flashdata('success', 'Success! New User Role Created.');
				redirect('create-role');
			   }
				else 
				{
				$this->session->set_flashdata('error', 'Fail! Something went wrong.Please check and try again.');	
				redirect('create-role');
				}					
							   
                }
	}
}
