<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
        parent::__construct();

		//date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('username'))){
			redirect('welcome');
		}else{
		
		}
    }
       
	public function index()
	{	
	    $this->load->view('inc/header');
		 $this->load->view('home');
		 $this->load->view('inc/footer');
	}
	

	public function profile1()
	{

		 $id= $_SESSION['id'];
         $data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
         $this->load->view('inc/header');
		 $this->load->view('profile1',$data);
		 $this->load->view('inc/footer');
		
	}

	public function change_user($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
	    // $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user.mobile]');
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
			$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

			$this->load->view('inc/header');
			$this->load->view('change-user',$data);
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

				$this->db->where('id',$id);
				$this->db->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Profile Updated</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				
		}	 
	}

	
	public function order($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
	    $this->form_validation->set_rules('address', 'Address', 'required');
		
		
		 $this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		// $data['pro_id']=$this->db->where('id', $id)->get('tbl_product')->result_array();

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('inc/header');
			$this->load->view('order');
			$this->load->view('inc/footer');
			
		}else{
			
			
				$idata['user_id']=$this->session->userdata('id');
				$idata['product_id']=$id;
				$idata['order_name']=$this->input->post('name');
				$idata['order_mobile']=$this->input->post('mobile');
				$idata['address']=$this->input->post('address');
				$idata['date']=date('Y-m-d');

				$this->db->insert('tbl_order',$idata);

				$message='<div class="alert alert-success text-center">Succesfully Order Done</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				
		}	 
	}
	public function status()
	{
          $data['booking']=$this->db->select('* , tbl_order.id as o_id , tbl_product.id as p_id')->from('tbl_order , tbl_product , tbl_user')->where('tbl_product.id=tbl_order.product_id')->where('tbl_user.id=tbl_order.user_id')->where('tbl_order.user_id',$this->session->userdata('id'))->get()->result_array();  
	
          $this->load->view('inc/header');
		 $this->load->view('status',$data);
		 $this->load->view('inc/footer');
		
		}

		public function delete_order($o_id)
	{
		
		$this->db->where('id',$o_id)->delete('tbl_order');
		
		redirect($_SERVER['HTTP_REFERER']);
		 
	}

	public function contact2()
	{	
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
	    $this->form_validation->set_rules('msg', 'Msg', 'required');
		
		
		 $this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('inc/header');
			$this->load->view('contact2');
			$this->load->view('inc/footer');
			
		}else{
			
			    $idata['user_id']=$this->session->userdata('id');
				$idata['email']=$this->input->post('email');
				$idata['subject']=$this->input->post('subject');
				$idata['msg']=$this->input->post('msg');
				

				$this->db->insert('tbl_contact',$idata);

				$message='<div class="alert alert-success">message successfully done</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				 // redirect('user');
				
		}	 
	}
	public function msg()
	{
          $data['user']=$this->db->select('* , tbl_contact.id as c_id')->from('tbl_contact,tbl_user')->where('tbl_user.id=tbl_contact.user_id')->where('tbl_contact.user_id',$this->session->userdata('id'))->get()->result_array();  
	
          $this->load->view('inc/header');
		 $this->load->view('msg',$data);
		 $this->load->view('inc/footer');
		
		}
	
	
}



