<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

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
        date_default_timezone_set("Asia/Colombo");
        $this->load->model('Common_model');
        $this->Common_model->is_logged_in();
		
    }
     public function index()
	{
            $this->load->view('backend/template/header');
            $this->load->view('backend/course/add_course');
            $this->load->view('backend/template/footer');
    }

    public function func_add_course()
	{ 
  
    $config = array('upload_path' => "./assets/content/course",
            'allowed_types' => 'jpg|jpeg|png|gif',
            'encrypt_name' => TRUE);
        $this->load->library('upload', $config);

    $this->form_validation->set_rules('title', 'Title', "trim");
    $this->form_validation->set_rules('description', 'Description', "trim");
    $this->form_validation->set_rules('language', 'Language', "trim");
    
    
    if ($this->form_validation->run()):
       
         (!empty($_FILES['image']['name'])) ? $this->upload->do_upload('image') : NULL;
        $imageName = (!empty($_FILES['image']['name'])) ? $this->upload->data() : array("file_name" => "user_img_default.jpg");

        //=== name
        $course_details = array(
            'image' => $imageName['file_name'],
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'lang' => $this->input->post('language'),
            'date' => date('Y-m-d H:i:s')
            
            );
        $this->Common_model->insert('course', $course_details);
        $insertid = $this->Common_model->getInsert_id();
         #region ------- Product Purchase Details -------
         foreach (json_decode($this->input->post("moduledescrib")) as $dtArray ):
            $mtitle =$dtArray->mtitle;
            $mdescription = $dtArray->description;
            $ylink = $dtArray->ylink;
           

            $course_module_details = array( 
                "title" => $mtitle,
                "description" => $mdescription,
                "youtube_link" => $ylink,
                "course_id"=> $insertid
            );
                                                  
            $this->Common_model->insert("course_module", $course_module_details);
       
          endforeach;//End Iterator Foreach

        $success['status'] = "true";
        echo json_encode($success);
    else:
        $error['status'] = "false";
        //'image' => $imageName['file_name'],
        // $error['title'] = form_error('title');
        // $error['description'] = form_error('description');
        // $error['language'] = form_error('language');
        echo json_encode($error);

    endif;
    } 
     
    public function view_course()
    {
            $this->load->view('backend/template/header');
            $this->load->view('backend/course/view_course');
            $this->load->view('backend/template/footer');  
    }
    

     public function view_course_module()
    {
            $this->load->view('backend/template/header');
            $this->load->view('backend/course/view_course_module');
            $this->load->view('backend/template/footer');  
    }


      public function update_course()
    { 
            $this->load->view('backend/template/header');
            $this->load->view('backend/course/edit_course');
            $this->load->view('backend/template/footer');
             
    }

   


        public function func_update_course(){ 
            
   //var_dump ( $_POST);
            $config = array('upload_path' => "./assets/images/",
            'allowed_types' => 'jpg|jpeg|png|gif',
            'encrypt_name' => TRUE);
        $this->load->library('upload', $config);
        
    $this->form_validation->set_rules('title', 'Title', "required");
    $this->form_validation->set_rules('description', 'Description', "required");
    $this->form_validation->set_rules('language', 'Language', "required");
    
    if ($this->form_validation->run()):
         $courseid = array("id" =>$this->input->post("id"));
         $coursedetails = $this->Common_model->get_all("course", $courseid)->result();
         if($coursedetails !=NULL):

             (!empty($_FILES['image']['name'])) ? $this->upload->do_upload('image') : NULL;
        $imageName = (!empty($_FILES['image']['name'])) ? $this->upload->data() : array("file_name" => "user_img_default.jpg");

        //=== name
        $course_details = array(
            'image' => $imageName['file_name'],
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'lang' => $this->input->post('language'),
            'date' => date('Y-m-d H:i:s')
            );
         $this->Common_model->update("course",$course_details,array("id"=>$this->input->post("id")));

        endif;
//       
          $this->Common_model->delete("course_module",array("course_id"=>$this->input->post("id")));


            $details_array = new MultipleIterator();
              
          
            $details_array->attachIterator(new ArrayIterator($this->input->post("module_title")));
            $details_array->attachIterator(new ArrayIterator($this->input->post("module_description")));
            $details_array->attachIterator(new ArrayIterator($this->input->post("module_ylink"))); 


            #region ------- Product Purchase Details -------
            foreach ($details_array as $dtArray):
              
                
                $mtitle = $dtArray[0];
                $mdescription = $dtArray[1];
                $mylink = $dtArray[2]; 
                $c_id =$this->input->post("id");

                $course_module_details = array( 
                    "title" => $mtitle,
                    "description" => $mdescription,
                    "youtube_link" => $mylink,
                   "course_id"=>$c_id
                );
                // var_dump( $course_module_details);
                // $this->Common_model->update("course_module",$course_module_details,array("id"=> $cmoduleid));
                 $this->Common_model->insert("course_module", $course_module_details);
               

            endforeach; //End Iterator Foreach

       
        $success['success'] = "true";
        echo json_encode($success);

       
    else:
         $error['status'] = "false";
        //'image' => $imageName['file_name'],
        $error['title'] = form_error('title');
        $error['description'] = form_error('description');
        $error['language'] = form_error('language');
        echo json_encode($error);
    endif;      
    }

        public function delete_course()
    {  
            
          $this->Common_model->delete("course",array("id"=>$_GET["id"]));
          header("Location:".base_url()."index.php/course", true, 301);
          
    }

       public function delete_course_module()
    {  
            
          $this->Common_model->delete("course_module",array("id"=>$_GET["id"]));
          header("Location:".base_url()."index.php/course_module", true, 301);
          
    }

    public function update_course_module()
    { 
            $this->load->view('backend/template/header');
            $this->load->view('backend/course/editcoursemodule');
            $this->load->view('backend/template/footer');
             
    }

    public function func_update_course_module(){ 
             
         $this->form_validation->set_rules('mtitle', 'Title', "required");
         $this->form_validation->set_rules('module_description', 'Description', "required");
         $this->form_validation->set_rules('ylink', 'ylink', "required");
     
         if ($this->form_validation->run()):
            
              $coursedetails = $this->Common_model->get_all("course_module", ["id"=>$this->input->post("id")])->result();
             
              if($coursedetails !=NULL):
                
                $course_details = array(
                 'title' => $this->input->post('mtitle'),
                 'course_id'=> $this->input->post('course'),
                 'description' => $this->input->post('module_description'),
                 'youtube_link' =>$this->input->post('ylink')
                 
                 );
              $this->Common_model->update("course_module",$course_details,array("id"=>$this->input->post("id")));
 
             endif;
         
             $success['success'] = "true";
             echo json_encode($success);

         else:
              $error['status'] = "false";
             echo json_encode($error);
         endif;      
         }
     

}
     
