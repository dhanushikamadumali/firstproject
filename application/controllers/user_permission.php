<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_permission extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->Common_model->is_logged_in();
		
    }
    public function index() {
        $this->load->view('backend/template/header');
        $this->load->view('backend/user_permission/add_user_permission');
        $this->load->view('backend/template/footer');
    }

    public function func_user_permission() {

        // var_dump($this->input->post('feature'));
        $this->form_validation->set_rules('user', 'User', "required");
        // $this->form_validation->set_rules('feature', 'Feature', "required");
        $this->form_validation->set_rules('prefix', 'Prefix', "required");
        
       if ($this->form_validation->run()):

        if($this->input->post('feature') !=NULL):
            foreach($this->input->post('feature') as $result):

               $user_details = array(
                                    'user_type_id' => $this->input->post('user'),
                                    'feature_id' =>$result,
                                    'prefix' => $this->input->post('prefix'),   
                                    
                                    
                                );

                $this->Common_model->insert('system_user_permission', $user_details);
            endforeach;

        endif;
       
        //=== name
       
       
       
        $success['status'] = "true";
        echo json_encode($success);

    else:
        $error['status'] = "false";
        $error['user'] = form_error('user');
        $error['feature'] = form_error('feature');
        $error['prefix'] = form_error('prefix');
                

        echo json_encode($error);
    endif;
    }

}
