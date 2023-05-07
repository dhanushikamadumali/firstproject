<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class user_type extends CI_Controller {

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
    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->Common_model->is_logged_in();
		
    }
    public function index()
    {
            $this->load->view('backend/template/header');
            $this->load->view('backend/user_type/add_user_type');
            $this->load->view('backend/template/footer');
                                    
    }
  public function func_add_user_type()
  {
//         var_dump( $_POST);
    $this->form_validation->set_rules('name', 'Name', "required");
    $this->form_validation->set_rules('prefix', 'Prefix', "required");
    
    
    
    if ($this->form_validation->run()):
       

        //=== name
        $type_details = array(
            'name' => $this->input->post('name'),
            'prefix' => $this->input->post('prefix'),   
            
            
        );

        $this->Common_model->insert('system_user_type', $type_details);
       
        $success['status'] = "true";
        echo json_encode($success);

    else:
        $error['status'] = "false";
        $error['name'] = form_error('name');
        $error['prefix'] = form_error('prefix');
                

        echo json_encode($error);
    endif;
    }

 
}
