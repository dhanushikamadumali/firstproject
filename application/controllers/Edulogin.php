<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edulogin extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->model('Common_model');
   // $this->admin_login_validation();
    $this->load->library('encryption');
     $this->load->library('session');
           // $this->User_model->is_logged_in();
  }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        // $this->load->view('backend/template/header');
        $this->load->view('backend/login/login');
        // $this->load->view('backend/template/footer');

        
    }

  public function admin_login_validation(){
   

      $this->form_validation->set_rules('email','Email','trim|required');
      $this->form_validation->set_rules('password','Password','trim|required');
    // $this->form_validation->set_message('check_user_exists','Invalid Username or Password!');
        if($this->form_validation->run()):
                    // var_dump($_POST);
            $this->Common_model->get_single_system_user(array('email'=>$this->input->post('email'),'password'=>$this->input->post('password')));
                   $data = array(
                                  'user_id'=>$this->Common_model->user_id(),
                                );
                          $this->session->set_userdata($data);

            $success['status'] = "true";
            echo json_encode($success);
          else:
            $error['status'] = "false";
            $error['email'] = form_error('email');
            $error['password'] = form_error('password');
            echo json_encode($error);
                  
        endif;
           // endif;
 }
        //end admin login validation

    
}