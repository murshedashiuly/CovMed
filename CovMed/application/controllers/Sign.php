<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function index()
	{	
	 $this->load->view('sign-up');
	}
	public function signup()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user.mobile]');
	    $this->form_validation->set_rules('blood_group', 'Blood Group', 'required|validate_blood_group');
	    $this->form_validation->set_rules('user_address', 'User address', 'required');
	    $this->form_validation->set_rules('gender', 'Gender', 'required');
	    $this->form_validation->set_rules('ages', 'Ages', 'required');
		
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		
		
		 $this->form_validation->set_message('required', 'The %s filed should not be empty');
		 $this->form_validation->set_message('validate_blood_group', 'The %s is wrong. Please enter correct one.');
		
		
		function validate_blood_group($blood_group){
			
			if($blood_group=='O+'||$blood_group=='A+'||$blood_group=='AB+'||$blood_group=='B+'||$blood_group=='AB-'||$blood_group=='A-'||$blood_group=='B-'||$blood_group=='O-'){
				
				return true;
			}else{
				return false;
			}
		}
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('inc/header');
			$this->load->view('sign-up');
			$this->load->view('inc/footer');
			
		}else{
			
			
				$idata['name']=$this->input->post('name');
				$idata['email']=$this->input->post('email');
				$idata['mobile']=$this->input->post('mobile');
				$idata['blood_group']=$this->input->post('blood_group');
				$idata['user_address']=$this->input->post('user_address');
				$idata['gender']=$this->input->post('gender');
				$idata['ages']=$this->input->post('ages');
				$idata['password']=$this->input->post('password');
				$idata['type']='user';

				$this->db->insert('tbl_user',$idata);

				$message='<div class="alert alert-success">Sign Up Successfully</div>';

				 $this->session->set_flashdata('success',$message);

				redirect('log');
				
		}	 
	}
	function get_ages($gender){
 
	 	$result=$this->db->where('type',$gender)->get('tbl_ages')->result_array();
		

		echo '<option value="">---SELECT OPTION---</option>';


		foreach ($result as $row) {
			echo '<option value="'.$row['age'].'">'.$row['age'].'</option>';
		}
	

	}

	
}
