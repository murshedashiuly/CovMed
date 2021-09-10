<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();

		//date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('username2'))){
			redirect('welcome');
		}else{
		
		}
    }


	public function index()
	{	

	    $data['user']=$this->db->where('type !=','admin')->get('tbl_user')->num_rows();
		$data['message']=$this->db->get('tbl_contact')->num_rows();
		$data['doctor']=$this->db->get('tbl_doctor')->num_rows();
		$data['order']=$this->db->get('tbl_order')->num_rows();

		 $this->load->view('admin/dashboard',$data);

	}
	public function profile2()
	{

		 $id= $_SESSION['id2'];
         $data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
		 $this->load->view('admin/profile2',$data);
		
	}

	public function change_admin($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
	    // $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user.mobile]');
	    $this->form_validation->set_rules('blood_group', 'Blood Group', 'required|validate_blood_group');
	    $this->form_validation->set_rules('user_address', 'User address', 'required');
	    // $this->form_validation->set_rules('gender', 'Gender', 'required');
	    // $this->form_validation->set_rules('ages', 'Ages', 'required');
		
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

			$this->load->view('admin/change-admin',$data);
			
		}else{
			
			
				$idata['name']=$this->input->post('name');
				$idata['email']=$this->input->post('email');
				$idata['mobile']=$this->input->post('mobile');
				$idata['blood_group']=$this->input->post('blood_group');
				$idata['user_address']=$this->input->post('user_address');
				// $idata['gender']=$this->input->post('gender');
				// $idata['ages']=$this->input->post('ages');
				$idata['password']=$this->input->post('password');
				$idata['type']='admin';

				$this->db->where('id',$id);
				$this->db->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Admin Information Updated</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				
		}	 
	}
	public function user_list()
	{
		
		$data['user']=$this->db->get('tbl_user')->result_array();
		$this->load->view('admin/user_list',$data);
		 
	}
	public function user_profile($id)
	{

         $data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();
		 $this->load->view('admin/user-profile',$data);
		
	}
	public function delete_user($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_user');
		
		redirect($_SERVER['HTTP_REFERER']);
		 
	}

	public function reply()
	{
          $data['user']=$this->db->select('* , tbl_contact.id as c_id')->from('tbl_contact,tbl_user')->where('tbl_user.id=tbl_contact.user_id')->get()->result_array();  
	
		 $this->load->view('admin/reply',$data);
		
		}

	public function reply1($c_id)
	{
           $this->form_validation->set_rules('admin_reply', 'Admins reply', 'required');
		
		
		 $this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['user']=$this->db->where('id',$c_id)->get('tbl_contact')->result_array();
			if(!empty($data['user'])){

				$this->load->view('admin/reply1',$data);
			}
			else{
			
			$this->load->view('admin/reply1');
		    }
			
		}else{
			
				$idata['admin_reply']=$this->input->post('admin_reply');
				
				$this->db->where('id',$c_id);
				$this->db->update('tbl_contact',$idata);


				$message='<div class="alert alert-success">Reply sent</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				 // redirect('user');
				
		}	 
	}
	public function add_product()
	{


		$this->form_validation->set_rules('product_type', 'Product Name', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required');
		$this->form_validation->set_rules('info', 'Product Info', 'required');
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add-product');
	
		}
		else{
				$idata['product_type']=$this->input->post('product_type');
				$idata['price']=$this->input->post('price');
				$idata['info']=$this->input->post('info');
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			  $config['upload_path'] = './asset/images';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
			  // $config['max_size'] = 1000;
			  // $config['max_width'] = 1024;
			  // $config['max_height'] = 768;
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('product_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $product_images = $avatar['file_name'];

			  $idata['product_image']=$product_images;
			 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////



				$this->db->insert('tbl_product',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				 $this->session->set_flashdata('success',$message);

				redirect('admin/add-product');
			
			
		}	 

	}
	public function order_list()
	{
           
	     $data['booking']=$this->db->select('* , tbl_order.id as o_id , tbl_product.id as p_id')->from('tbl_order , tbl_product , tbl_user')->where('tbl_product.id=tbl_order.product_id')->where('tbl_user.id=tbl_order.user_id')->get()->result_array(); 

		 $this->load->view('admin/order-list',$data);
		
		}
		
		public function delete_order($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_order');
		
		redirect($_SERVER['HTTP_REFERER']);
		 
	}
	public function show_items()
	{
		
		$data['user']=$this->db->get('tbl_product')->result_array();
		
		$this->load->view('admin/show-items',$data);
	}
	public function view_item($id)
	{

         $data['user']=$this->db->where('id',$id)->get('tbl_product')->result_array();
		 $this->load->view('admin/view-item',$data);
		
	}
		public function edit_item($id)
	{


		$this->form_validation->set_rules('product_type', 'Product Name', 'required');
		$this->form_validation->set_rules('price', 'Product Price', 'required');
		$this->form_validation->set_rules('info', 'Product Info', 'required');
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['user']=$this->db->where('id',$id)->get('tbl_product')->result_array();
			$this->load->view('admin/edit-item',$data);
	
		}
		else{
				$idata['product_type']=$this->input->post('product_type');
				$idata['price']=$this->input->post('price');
				$idata['info']=$this->input->post('info');
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////

              if($_FILES && $_FILES['product_image']['name']){
				  $config['upload_path'] = './asset/images';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('product_image')) {
				     $this->session->set_flashdata('message', $this->upload->display_errors());
			
				    return;
				 } else {
				  $avatar = $this->upload->data();
				  $product_images = $avatar['file_name'];

				  $idata['product_image']=$product_images;
				 }
			 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////


                $this->db->where('id',$id);
				$this->db->update('tbl_product',$idata);

				$message='<div class="alert alert-success">Product Updated</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				 // redirect('Admin/edit-item/'.$id);
			
			
		}	 

	}
	public function delete_item($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_product');
		
		redirect($_SERVER['HTTP_REFERER']);
		 
	}
	public function add_doctor()
	{


		$this->form_validation->set_rules('doctor_name', 'Name', 'required');
		$this->form_validation->set_rules('number', 'number', 'required');
		$this->form_validation->set_rules('hospital', 'hospital', 'required');
		$this->form_validation->set_rules('division', 'division', 'required');
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/add-doctor');
	
		}
		else{
				$idata['doctor_name']=$this->input->post('doctor_name');
				// $idata['doctor_image']=$this->input->post('doctor_image');
				$idata['number']=$this->input->post('number');
				$idata['hospital']=$this->input->post('hospital');
				$idata['division']=$this->input->post('division');
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			  $config['upload_path'] = './asset/images';
			  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
			  // $config['max_size'] = 1000;
			  // $config['max_width'] = 1024;
			  // $config['max_height'] = 768;
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('doctor_image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $product_images = $avatar['file_name'];

			  $idata['doctor_image']=$product_images;
			 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////



				$this->db->insert('tbl_doctor',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
				 
			
			
		}	 

	}

	public function show_doctor()
	{
		
		$data['user']=$this->db->get('tbl_doctor')->result_array();
		$this->load->view('admin/show-doctor',$data);
		 
	}
	public function edit_doctor($id)
	{


		$this->form_validation->set_rules('doctor_name', 'Name', 'required');
		$this->form_validation->set_rules('number', 'number', 'required');
		$this->form_validation->set_rules('hospital', 'hospital', 'required');
		$this->form_validation->set_rules('division', 'division', 'required');
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['user']=$this->db->where('id',$id)->get('tbl_doctor')->result_array();
			$this->load->view('admin/edit-doctor',$data);

			// $this->load->view('admin/add-doctor');
	
		}
		else{
				$idata['doctor_name']=$this->input->post('doctor_name');
				// $idata['doctor_image']=$this->input->post('doctor_image');
				$idata['number']=$this->input->post('number');
				$idata['hospital']=$this->input->post('hospital');
				$idata['division']=$this->input->post('division');
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////

              if($_FILES && $_FILES['doctor_image']['name']){
				  $config['upload_path'] = './asset/images';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('doctor_image')) {
				     $this->session->set_flashdata('message', $this->upload->display_errors());
			
				    return;
				 } else {
				  $avatar = $this->upload->data();
				  $product_images = $avatar['file_name'];

				  $idata['doctor_image']=$product_images;
				 }
			 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////

                $this->db->where('id',$id);
				$this->db->update('tbl_doctor',$idata);

				$message='<div class="alert alert-success">Doctor list Updated</div>';

				 $this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);		
			
		}	 

	}
	public function delete_doctor($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_doctor');
		
		redirect($_SERVER['HTTP_REFERER']);
		 
	}

	
}
