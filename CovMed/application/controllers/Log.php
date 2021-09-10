<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {


	public function index()
	{	

		// $this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('inc/header');
			$this->load->view('login');
			$this->load->view('inc/footer');

		}else{

			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');

			$result=$this->db->where('email',$idata['email'])->where('password',$idata['password'])->get('tbl_user')->result_array();

			  
                  

			if(!empty($result)){
                
                $res['type']=$result[0]['type'];
				$res['id']=$result[0]['id'];

				
				
				if($res['type']=='admin')
			   {
                    $res['username2']=$result[0]['name'];
                    $res['id2']=$result[0]['id'];
                    $this->session->set_userdata($res);
				   // $this->session->set_userdata('username2',$result[0]['name']);

				   $message='<div class="alert alert-success">Welcome</div>';

				   $this->session->set_flashdata('message',$message);
				   
					redirect('Admin');
			}

			 else{
                   $res['username']=$result[0]['name'];
                    $res['id']=$result[0]['id'];
                   $this->session->set_userdata($res);
			 	// $this->session->set_userdata('username',$result[0]['name']);
				
				$message='<div class="alert alert-success">Welcome</div>';

				$this->session->set_flashdata('message',$message);

				redirect('User');

			    }


			}
			else{

			$message='<div class="alert alert-danger">Wrong Mobile / Password</div>';

			$this->session->set_flashdata('message',$message);

			// redirect('log');
			redirect($_SERVER['HTTP_REFERER']);
			}
		}

	}
}
