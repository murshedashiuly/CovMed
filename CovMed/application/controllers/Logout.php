<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function index()
	{	
		$this->session->sess_destroy();
		redirect('welcome');
	}
	public function user_logout()
	{	
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
