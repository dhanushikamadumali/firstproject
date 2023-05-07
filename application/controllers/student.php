<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->Common_model->is_logged_in();
		
    }
	public function index()
	{
            $this->load->view('backend/template/header');
            $this->load->view('backend/student/add_student');
            $this->load->view('backend/template/footer');
         
	}
    
    	public function func_add_student()
	{
    //var_dump ( $_POST);
    $this->form_validation->set_rules('memberid', 'Member Id', "required|xss_clean");
    //$this->form_validation->set_rules('image', 'image', "required|xss_clean");
   $this->form_validation->set_rules('fullname', 'Full Name', "required|xss_clean");
   $this->form_validation->set_rules('displayname', 'displayname', "required|xss_clean");
   $this->form_validation->set_rules('year', 'Year', "required|xss_clean");
   $this->form_validation->set_rules('address', 'Address', "xss_clean");
   $this->form_validation->set_rules('school', 'School', "required|xss_clean");
   $this->form_validation->set_rules('telephone', 'Telephone', "required|xss_clean");
   $this->form_validation->set_rules('dob', 'Date of Birth', "required|xss_clean");
   $this->form_validation->set_rules('parentname', 'Parent Name', "required|xss_clean");
    $this->form_validation->set_rules('parentphone', 'Parent Phone No', "required|xss_clean");
    //$this->form_validation->set_rules('qr', 'qr', "required|xss_clean");
    $this->form_validation->set_rules('email', 'Email', "required|xss_clean");
    $this->form_validation->set_rules('password', 'Password', "required|xss_clean");
   
    
    
    
    if ($this->form_validation->run()):
       
        //=== name
        $student_details = array(
            'member_id' => $this->input->post('memberid'),
            //'image' => $this->input->post('image') ,
            'full_name' => $this->input->post('fullname'),
            'display_name' => $this->input->post('displayname'),
            'year' => $this->input->post('year'),
            'address' => $this->input->post('address'),       
            'school' => $this->input->post('school'),
            'telephone_no' =>$this->input->post('telephone'),
            'gender' =>$this->input->post('gender'),
            'date_of_birth' =>$this->input->post('dob'),
            'parent_name' =>$this->input->post('parentname'),
            'parent_phone' =>$this->input->post('parentphone'),
            //'qr_image' =>$this->input->post('qr'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'restrict' => 1,
            'date_time' => date("Y-m-d H:i:s")
        );
        $this->Common_model->insert('student_details',$student_details);
      $insertid= $this->Common_model->getInsert_id();


      
        $success['status'] = "true";
        echo json_encode($success);
    else:
        $error['status'] = "false";
        $error['memberid'] = form_error('memberid');
       // $error['image'] = form_error('image');
        $error['fullname'] = form_error('fullname');
        $error['displayname'] = form_error('displayname');
        $error['year'] = form_error('year');
        $error['address'] = form_error('address');
        $error['school'] = form_error('school');
        $error['telephone'] = form_error('telephone');
        $error['gender'] = form_error('gender');
        $error['dob'] = form_error('dob');
        $error['parentname'] = form_error('parentname');
        $error['parentphone'] = form_error('parentphone');
        //$error['qr'] = form_error('qr');
        $error['email'] = form_error('email'); 
        $error['password'] = form_error('password'); 
        

        echo json_encode($error);
    endif;
  }

        public function view_student()
	{
            $this->load->view('backend/template/header');
            $this->load->view('backend/student/view_student');
            $this->load->view('backend/template/footer');	
	}
      public function update_student()
	{ 
            $this->load->view('backend/template/header');
            $this->load->view('backend/student/edit_student');
            $this->load->view('backend/template/footer');
             
	}
        public function func_update_student(){ 
            
   //var_dump ( $_POST);
    $this->form_validation->set_rules('memberid', 'Member Id', "required|xss_clean");
    //$this->form_validation->set_rules('image', 'image', "required|xss_clean");
   $this->form_validation->set_rules('fullname', 'Full Name', "required|xss_clean");
   $this->form_validation->set_rules('displayname', 'displayname', "required|xss_clean");
   $this->form_validation->set_rules('year', 'Year', "required|xss_clean");
   $this->form_validation->set_rules('address', 'Address', "xss_clean");
   $this->form_validation->set_rules('school', 'School', "required|xss_clean");
   $this->form_validation->set_rules('telephone', 'Telephone', "required|xss_clean");
   $this->form_validation->set_rules('dob', 'Date of Birth', "required|xss_clean");
   $this->form_validation->set_rules('parentname', 'Parent Name', "required|xss_clean");
    $this->form_validation->set_rules('parentphone', 'Parent Phone No', "required|xss_clean");
    //$this->form_validation->set_rules('qr', 'qr', "required|xss_clean");
    $this->form_validation->set_rules('email', 'Email', "required|xss_clean");
    $this->form_validation->set_rules('password', 'Password', "required|xss_clean");
   
    if ($this->form_validation->run()):
//       

            $student_details = array(
            'member_id' => $this->input->post('memberid'),
            //'image' => $this->input->post('image') ,
            'full_name' => $this->input->post('fullname'),
            'display_name' => $this->input->post('displayname'),
            'year' => $this->input->post('year'),
            'address' => $this->input->post('address'),       
            'school' => $this->input->post('school'),
            'telephone_no' =>$this->input->post('telephone'),
            'gender' =>$this->input->post('gender'),
            'date_of_birth' =>$this->input->post('dob'),
            'parent_name' =>$this->input->post('parentname'),
            'parent_phone' =>$this->input->post('parentphone'),
            //'qr_image' =>$this->input->post('qr'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'restrict' => 1,
            'date_time' => date("Y-m-d H:i:s")
            );

            
             $this->Common_model->update("student_details",$student_details,array("id"=>$this->input->post("id")));

            $success['success'] = "true";
            echo json_encode($success);

       
    else:
//        $error['updatetype'] = (form_error('updatetype')) ? "<P>Please select Student Type</P>" : NULL; 
       $error['status'] = "false";
        $error['memberid'] = form_error('memberid');
        //$error['image'] = form_error('image');
        $error['fullname'] = form_error('fullname');
        $error['displayname'] = form_error('displayname');
        $error['year'] = form_error('year');
        $error['address'] = form_error('address');
        $error['school'] = form_error('school');
        $error['telephone'] = form_error('telephone');
        $error['gender'] = form_error('gender');
        $error['dob'] = form_error('dob');
        $error['parentname'] = form_error('parentname');
        $error['parentphone'] = form_error('parentphone');
        //$error['qr'] = form_error('qr');
        $error['email'] = form_error('email'); 
        $error['password'] = form_error('password');
        
        

        echo json_encode($error);
    endif;      
    }

        public function delete_student()
	{  
            
          $this->Common_model->delete("student",array("id"=>$_GET["id"]));
          header("Location:".base_url()."index.php/student", true, 301);
          
	}
}