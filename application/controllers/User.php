<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
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
            $this->load->view('backend/user/add_user');
            $this->load->view('backend/template/footer');
         
  }
    
      public function func_add_user()
  {
    var_dump ( $_POST);
    $this->form_validation->set_rules('name', 'Full Name', "required");
    $this->form_validation->set_rules('password', 'password', "required");
    $this->form_validation->set_rules('email', 'Email', "required");
    $this->form_validation->set_rules('role', 'role', "");
    $this->form_validation->set_rules('prefix', 'prefix', "");
   
     if ($this->form_validation->run()):
      // var_dump ($this->input->post('name'));
    //     //=== name
         $user_details = array(
             'user_name' => $this->input->post('name'),
             'password' => $this->input->post('password'),
             'email' => $this->input->post('email'),
             'user_role' => $this->input->post('role'),       
             'prefix' => $this->input->post('prefix')
            
        );
         $this->Common_model->insert('system_user',$user_details);
       $insertid= $this->Common_model->getInsert_id();


      
         $success['status'] = "true";
         echo json_encode($success);
    else:
        $error['status'] = "false";
        $error['name'] = form_error('name');
        $error['password'] = form_error('password');
        $error['email'] = form_error('email');
        $error['role'] = form_error('role');
        $error['prefix'] = form_error('prefix');  
        echo json_encode($error);
    endif;
  }

        public function view_user()
  {
            $this->load->view('backend/template/header');
            $this->load->view('backend/user/view_user');
            $this->load->view('backend/template/footer');  
  }
      public function update_user()
  { 
            $this->load->view('backend/template/header');
            $this->load->view('backend/user/edit_user');
            $this->load->view('backend/template/footer');
             
  }
        public function func_update_user(){ 
            
   //var_dump ($_POST);
    $this->form_validation->set_rules('name', 'Full Name', "required");
    $this->form_validation->set_rules('password', 'password', "required");
    $this->form_validation->set_rules('email', 'Email', "required");
    $this->form_validation->set_rules('role', 'role', "");
    $this->form_validation->set_rules('prefix', 'prefix', "");

     if ($this->form_validation->run()):
    //     $sysudetails = $this->Common_model->get_all("system_user",array("id"=>$this->input->post("id")))->result();
    //     var_dump ($sysudetails);
    //     if($sysudetails !=NULL):
           
             
          $user_details = array(
             'user_name' => $this->input->post('name'),
             'password' => $this->input->post('password'),
             'email' => $this->input->post('email'),
             'user_role' => $this->input->post('role'),       
             'prefix' => $this->input->post('prefix')
             );

               $this->Common_model->update("system_user",$user_details,array("id"=>$this->input->post("id")));

             $success['success'] = "true";
             echo json_encode($success);
    //     endif;
       
     else:
//      $error['updatetype'] = (form_error('updatetype')) ? "<P>Please select Student Type</P>" : NULL; 
         $error['status'] = "false";
         $error['name'] = form_error('name');
         $error['password'] = form_error('password');
         $error['email'] = form_error('email');
         $error['role'] = form_error('role');
         $error['prefix'] = form_error('prefix');
         echo json_encode($error);
     endif;      
    }

        public function delete_user()
  {  
            
          $this->Common_model->delete("user",array("id"=>$_GET["id"]));
          header("Location:".base_url()."index.php/user", true, 301);
          
  }
}