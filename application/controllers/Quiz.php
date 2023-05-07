<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

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
            $this->load->view('backend/quiz/add_quiz');
            $this->load->view('backend/template/footer');
    }


    public function func_add_quiz() {
//add func_add_quiz
//$quiz_id=get insertID

////foreach()
    $insert_quiz_data = array(
        'course_module_id' => $this->input->post('mid'),
        'title' => $this->input->post('title'),
        'description' => $this->input->post('describe'),
    );

    $this->Common_model->insert("c_quiz", $insert_quiz_data);
    $q_id = $this->Common_model->getInsert_id();
    // var_dump($q_id);
        $question_array= json_decode($this->input->post('questionarr'), TRUE);
// var_dump($question_array);
    foreach ($question_array as $dtArray1) : 
        $insert_question_data = array(
            'q_id' =>$q_id ,
            'question' => $dtArray1["question"] ,
        );
        $this->Common_model->insert("c_q_question", $insert_question_data);
        $q_q_id = $this->Common_model->getInsert_id();
 
        $answer_array= json_decode($this->input->post('anssarr'), TRUE);
        // var_dump($answer_array);
        foreach ($answer_array as $dtArray) : 
            if($dtArray["qnum"] ==$dtArray1["qnum1"] ):
               
            $insert_answer_data = array(
                'q_q_id' => $q_q_id,
                'answer' => $dtArray["qa"] 
            ); 
            $this->Common_model->insert("c_q_q_answers", $insert_answer_data);
            $c_a_id = $this->Common_model->getInsert_id();
            if ($dtArray["ca"]==1):
               
                $this->Common_model->update("c_q_question", ["answer_id" => $c_a_id], ["id" => $q_q_id]);
            endif; 
        endif;

        endforeach;
    endforeach;
        //validation and insert
         // var_dump( $this->input->post('module_id'));
        // $this->form_validation->set_rules('quiz_title', 'quiz_title', 'trim|required');

        // //   var_dump($_POST);
        //   $details_array= json_decode($this->input->post('anssarr'), TRUE);
        //   var_dump($details_array);
        //   $question_array= json_decode($this->input->post('questionarr'), TRUE);
        //   var_dump($question_array);
        //   echo $details_array;
          //die();
        // if ($this->form_validation->run()) :
        //     $insert_quiz_data = array(
        //         'course_module_id' => $this->input->post('module_id'),
        //         'title' => $this->input->post('quiz_title'),
        //     );

        //     // $this->Common_model->insert("c_quiz", $insert_quiz_data);
        //     $q_id = $this->Common_model->getInsert_id();
        //     // var_dump($q_id);

        //     	foreach( $this->input->post('questionnums') as $qnumbers):

        //     		 $question_details = array( 
		//                 	"q_id" => $q_id,
		//                     "question" => $this->input->post('question'.$qnumbers),
		                   
		//                 );
		//                 // var_dump( $question_details);
		//                 // $this->Common_model->insert("c_q_question", $question_details);
		//             	$q_q_id = $this->Common_model->getInsert_id();

	 	// 			foreach ($this->input->post('answer'.$qnumbers) as $answerarr) :
	            	  
	    //             $insert_answer_data = array(
	    //                 'q_q_id' => $q_q_id,
	    //                 'answer' => $answerarr
	    //             ); 
	    //             // $this->Common_model->insert("c_q_q_answers", $insert_answer_data);
	    //             $c_a_id = $this->Common_model->getInsert_id();



        //     	endforeach;



			// $details_array = new MultipleIterator();
   //          $details_array->attachIterator(new ArrayIterator($this->input->post("question")));           

   //          #region ------- Product Purchase Details -------
   //          foreach ($details_array as $dtArray):
   //              $mque = $dtArray[0];               

   //              $question_details = array( 
   //              	"q_id" => $q_id,
   //                  "question" => $mque,
                   
   //              );
   //              // var_dump( $question_details);
   //              $this->Common_model->insert("c_q_question", $question_details);
   //          	$q_q_id = $this->Common_model->getInsert_id();


            	
   //          	 $details_array1 = new MultipleIterator();
   //              $details_array1->attachIterator(new ArrayIterator($this->input->post("answer")));

   //          	 foreach ($details_array1 as $dtArray) :
   //          	  $answer = $dtArray[0]; 
   //              $insert_answer_data = array(
   //                  'q_q_id' => $q_q_id,
   //                  'answer' => $answer
   //              ); 
   //              $this->Common_model->insert("c_q_q_answers", $insert_answer_data);
   //              $c_a_id = $this->Common_model->getInsert_id();
   //              // if ($dtArray["ca"]==1):
   //              //     // $this->Common_model->update("c_q_question", ["answer_id" => $c_a_id], ["id" => $q_q_id]);
   //              // endif; 
   //          endforeach;
               

            // endforeach; //End Iterator Foreach
            // var_dump($q_q_id);

            // $success["status"] = true;
            // echo json_encode($success);

        // else :
            // $error["status"] = false;
            // $error["quiz_title"] = form_error('quiz_title');
            // echo json_encode($error);

        // endif;
    }
}

   