<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		 $this->load->view('inc/header');
		 $this->load->view('home');
		 $this->load->view('inc/footer');
	}
	 public function home2()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('home2');
	 $this->load->view('inc/footer');
	}
	 public function about()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('about');
	 $this->load->view('inc/footer');
	}
	public function team()
	{

	$this->load->library('pagination');

		
		$count=$this->db->get('tbl_doctor')->num_rows();

		 $config['base_url'] = site_url('welcome/team');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 6;
		 $config['num_links'] = 6;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

			$data['user']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_doctor')->result_array();

	 // $data['user']=$this->db->get('tbl_doctor')->result_array();

	 $this->load->view('inc/header');
	 $this->load->view('team',$data);
	 $this->load->view('inc/footer');
	}
	public function doctor_view($id)
	{
		 $data['user']=$this->db->where('id',$id)->get('tbl_doctor')->result_array();

			$this->load->view('inc/header');
			$this->load->view('doctor-view',$data);
			$this->load->view('inc/footer');
		
	}

    public function get_doctor($mursheda)
	{


 		
		 $user=$this->db->like('division',$mursheda,'both')->get('tbl_doctor')->result_array();

		 // foreach ($user as $something) {
		 	
		 // 	echo '<tr>';
		 // 	echo '<td>'.$something['doctor_name'].'</td>';
		 // 	echo '<td>'.$something['number'].'</td>';
		 // 	echo '<td>'.$something['hospital'].'</td>';
		 // 	echo '<td>'.$something['division'].'</td>';
		 // 	echo '</tr>';


		 // }
		 echo '<div class="row">';
                  foreach ($user as $user) {  
                echo '<div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                          
                         <a href="'.base_url().'asset/images/'.$user['doctor_image'].'"><img  src="'.base_url().'asset/images/'.$user['doctor_image'].'" alt=""></a> 

                      
                      </div>
                      
                        <div class="lower-box">
                            <h4><strong>'.$user['doctor_name'].'</strong></h4>
                            <h4>'.$user['division'].'</h4>
                        </div>';

                        echo '<div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="'.base_url().'welcome/doctor_view/'.$user['id'].'"><button style="color:#780bd5;" class="btn">View Details</button></a></div>
                        </div>';

                       echo '</div>
                </div>' ;
            
              }
            echo '</div>' ;

	}

	public function faq()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('faq');
	 $this->load->view('inc/footer');
	}
	public function prevention()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('prevention');
	 $this->load->view('inc/footer');
	}
	public function service()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('service');
	 $this->load->view('inc/footer');
	}
	public function testimonial()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('testimonial');
	 $this->load->view('inc/footer');
	}

	public function covid_19()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('covid-19');
	 $this->load->view('inc/footer');
	}
	public function error()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('error');
	 $this->load->view('inc/footer');
	}

	public function blog_2()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('blog-2');
	 $this->load->view('inc/footer');
	}

	public function blog_details()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('blog-details');
	 $this->load->view('inc/footer');
	}

	public function contact1()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('contact1');
	 $this->load->view('inc/footer');
	}
	public function sign_up()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('sign-up');
	 $this->load->view('inc/footer');
	}
	public function world()
	{	
	  $this->load->view('inc/header');
	 $this->load->view('world');
	 $this->load->view('inc/footer');
	}

	public function db()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('db');
	 $this->load->view('inc/footer');
	}

	public function div()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('div');
	 $this->load->view('inc/footer');
	}

	 public function get_div($mursheda)
	{


 		
		 $user=$this->db->like('division',$mursheda,'both')->get('tbl_division')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
		 echo ' <tr>';
		       echo '<th>Division</th>';
		       echo '<th>District</th>';
		       echo '<th>Cases</th>';
		 echo ' </tr>';

		 foreach ($user as $user) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$user['division'].'</td>';
		 	echo '<td>'.$user['district'].'</td>';
		 	echo '<td>'.$user['cases'].'</td>';
		 	echo '</tr>';


		 }
	}
	
	
	public function view_product()
	{	

		$this->load->library('pagination');

		
		$count=$this->db->get('tbl_product')->num_rows();

		 $config['base_url'] = site_url('welcome/view_product');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 6;
		 $config['num_links'] = 6;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

			$data['user']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_product')->result_array();


	  // $data['user']=$this->db->get('tbl_product')->result_array();

	 $this->load->view('inc/header');
	 $this->load->view('view-product',$data);
	 $this->load->view('inc/footer');
	}
	
	public function single_view($id)
	{
		 $data['user']=$this->db->where('id',$id)->get('tbl_product')->result_array();

			$this->load->view('inc/header');
			$this->load->view('single-view',$data);
			$this->load->view('inc/footer');
		
		}
	public function ambulance()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('ambulance');
	 $this->load->view('inc/footer');
	}

	public function get_ambulance($mursheda)
	{


 		
		 $user=$this->db->like('service',$mursheda,'both')->get('tbl_ambulance')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
		 echo ' <tr>';
		       echo '<th>Ambulance Service</th>';
		       echo '<th>Phone</th>';
		       echo '<th>Place</th>';
		 echo ' </tr>';

		 foreach ($user as $something) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$something['service'].'</td>';
		 	echo '<td>'.$something['phone'].'</td>';
		 	echo '<td>'.$something['place'].'</td>';
		 	echo '</tr>';


		 }
	}
	
	public function center()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('center');
	 $this->load->view('inc/footer');
	}

	public function get_center($mursheda)
	{


 		
		 $user=$this->db->like('location',$mursheda,'both')->get('tbl_center')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
		 echo ' <tr>';
		       echo '<th>COVID-19 Test Center</th>';
		       echo '<th>Location</th>';
		       echo '<th>Contact Number</th>';
		 echo ' </tr>';

		 foreach ($user as $something) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$something['center'].'</td>';
		 	echo '<td>'.$something['location'].'</td>';
		 	echo '<td>'.$something['contact'].'</td>';
		 	echo '</tr>';


		 }
	}
	public function hospital()
	{
		 $this->load->view('inc/header');
		 $this->load->view('hospital');
		 $this->load->view('inc/footer');
	}
	public function get_hospital($mursheda)
	{


 		
		 $user=$this->db->like('district',$mursheda,'both')->get('tbl_hospital')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
			   echo ' <br>';
			   echo ' <tr>';
		       echo '<th>District</th>';
		       echo '<th>Faculty name</th>';
		       echo '<th>Covid dedicated general bed</th>';
		       echo '<th>Occupied Covid dedicated general bed</th>';
		       echo '<th>Admitted Covid patient in extra bed</th>';
		       echo '<th>Covid dedicated ICU bed</th>';
		       echo '<th>Occupied Covid dedicated ICU bed</th>';
		       echo '<th>ICU equivalent bed with high flow nasal canula</th>';
		       echo '<th>Occupied ICU equivalent bed with high flow nasal canula</th>';
		       echo '<th>Total Beds</th>';
		       echo '<th>Occupied Beds</th>';
		       echo '<th>Vacant Beds</th>';
		 echo ' </tr>';

		 foreach ($user as $something) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$something['district'].'</td>';
		 	echo '<td>'.$something['facilityName'].'</td>';
		 	echo '<td>'.$something['covidDedicatedGeneralBed'].'</td>';
		 	echo '<td>'.$something['occupiedCovidDedicatedGeneralBed'].'</td>';
		 	echo '<td>'.$something['admittedCovidPatientInExtraBed'].'</td>';
		 	echo '<td>'.$something['covidDedicatedICUBed'].'</td>';
		 	echo '<td>'.$something['occupiedCovidDedicatedICUBed'].'</td>';
		 	echo '<td>'.$something['iCUEquivalentBedWithHighFlowNasalCanula'].'</td>';
		 	echo '<td>'.$something['occupiedICUEquivalentBedWithHighFlowNasalCanula'].'</td>';
		 	echo '<td>'.$something['totalBeds'].'</td>';
		 	echo '<td>'.$something['occupiedBeds'].'</td>';
		 	echo '<td>'.$something['vacantBeds'].'</td>';
		 	echo '</tr>';


		 }
	}
	public function vaccine()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('vaccine');
	 $this->load->view('inc/footer');
	}
	public function get_vaccine($mursheda)
	{


 		
		 $user=$this->db->like('country',$mursheda,'both')->get('tbl_vaccine')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
		 echo ' <tr>';
		       echo '<th>Country</th>';
		       echo '<th>Doses Administered</th>';
		       echo '<th>Doses per 1000</th>';
		       echo '<th>Fully vaccinated Population (%)</th>';
		       echo '<th>Vaccine being used in a country</th>';
		 echo ' </tr>';

		 foreach ($user as $something) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$something['country'].'</td>';
		 	echo '<td>'.$something['dose'].'</td>';
		 	echo '<td>'.$something['per'].'</td>';
		 	echo '<td>'.$something['vaccinated'].'</td>';
		 	echo '<td>'.$something['used'].'</td>';
		 	echo '</tr>';


		 }
	}
	public function oxygen()
	{	
	 $this->load->view('inc/header');
	 $this->load->view('oxygen');
	 $this->load->view('inc/footer');
	}

	 public function get_oxygen($mursheda)
	{

 		
		 $user=$this->db->like('district',$mursheda,'both')->get('tbl_oxygen')->result_array();

		 // echo '<option value="">---SELECT OPTION---</option>';
		 echo ' <tr>';
		       echo '<th>Name</th>';
		       echo '<th>District</th>';
		       echo '<th>Address</th>';
		       echo '<th>Phone</th>';
		       echo '<th>Website</th>';
		 echo ' </tr>';

		 foreach ($user as $user) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$user['name'].'</td>';
		 	echo '<td>'.$user['district'].'</td>';
		 	echo '<td>'.$user['address'].'</td>';
		 	echo '<td>'.$user['phone'].'</td>';
		 	echo '<td>'.$user['website'].'</td>';
		 	echo '</tr>';


		 }
	}
	
	public function get_user($mursheda)
     {

 		
		$user=$this->db->like('product_type',$mursheda,'both')->get('tbl_product')->result_array();
		

		echo '<div class="row">';
                  foreach ($user as $user) {  
                echo '<div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                          
                         <a href="'.base_url().'asset/images/'.$user['product_image'].'"><img  src="'.base_url().'asset/images/'.$user['product_image'].'" alt=""></a> 

                      
                      </div>
                      
                        <div class="lower-box">
                            <h4>'.$user['product_type'].'</h4> <br>
                            <h4>'.$user['price'].'</h4>
                        </div>';
                    if(!empty($this->session->userdata('username2'))){ 
                        echo '<div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="'.base_url().'welcome/single_view/'.$user['id'].'"><button style="color:#780bd5;" class="btn">View Details</button></a></div>
                        </div>';
                    }
                        
                     
                    else if(empty($this->session->userdata('username'))){
                     	echo '<div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="'.base_url().'welcome/single_view/'.$user['id'].'"><button style="color:#780bd5;" class="btn">View Details</button></a></div>
                        </div>
                        <br>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn cus_link"><a href="#" class="theme-btn btn-style-two" data-toggle="modal" data-target="#appointment">Order Us</a></div>
                        </div>';
                    }
                     
                      else if(!empty($this->session->userdata('username')))  { 
                    	echo '<div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="'.base_url().'welcome/single_view/'.$user['id'].'"><button style="color:#780bd5;" class="btn">View Details</button></a></div>
                        </div>
                        <br>
                        <div class="cus_r_con mb-0 text-center">
                            <div class="link-btn"><a href="'.base_url().'user/order/'.$user['id'].'" class="theme-btn btn-style-two" data-toggle="" data-target="">Order Now</a></div>
                        </div>';
                         }
                   echo '</div>
                </div>' ;
            
              }
            echo '</div>' ;
		
	}

}
