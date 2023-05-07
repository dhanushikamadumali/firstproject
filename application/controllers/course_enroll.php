<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class course_enroll extends CI_Controller {

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
        $this->load->view('backend/course_enroll/add_course_enroll');
        $this->load->view('backend/template/footer');
    }

    public function func_add_course_enroll() {
        var_dump($_POST);
        $this->form_validation->set_rules('member', 'member', "required|xss_clean");
        $this->form_validation->set_rules('courses[]', 'Course', "required|xss_clean");
        //$this->form_validation->set_rules('free', 'Card free', "required|xss_clean");
       //$this->form_validation->set_rules('sms', 'Confirm sms', "required|xss_clean");
        if ($this->form_validation->run()):


            foreach ($this->input->post('courses') as $course):
                $cenroll_details = array(
                'member_id' => $this->input->post('course'),
                'course_id' =>$course,
                'datetime' =>date("Y-m-d"),
                'approve_status' =>1,
                //'is_card_free' => $this->input->post('free'),
                //'attendance_sms_confirm' => $this->input->post('sms'),

                );
                $this->Common_model->insert('course_enroll', $cenroll_details);
            endforeach;

            $success['status'] = "true";
            echo json_encode($success);
        else:
            $error['status'] = "false";
            $error['member'] = form_error('member');
            $error['course[]'] = form_error('courses[]');
            //$error['free'] = form_error('free');
            //$error['sms'] = form_error('sms');
            echo json_encode($error);
        endif;
    }

}
