<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
    
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
        
        // $this->Common_model->is_logged_in();
        
    }
    public function index()
    {
        // $this->load->view('frontend/template/header');
        $this->load->view('frontend/index');
        // $this->load->view('frontend/template/footer');
        
    }
    public function course()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/course');
        $this->load->view('frontend/template/footer');
        
    }
    public function fetch_data()
    {
        
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = "#";
        $config['total_rows'] = $this->Common_model->count_all();
        // //var_dump($category);
        $config['per_page'] = 2;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination justify-content-center" >';
        $config['full_tag_close'] = '</ul>';
        
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li  >';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li  >';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '>>';
        $config['next_tag_open'] = '<li  >';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '<<';
        $config['prev_tag_open'] = '<li  >';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li  ><a class="active"  href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li >';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 3;
       
        
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];
        $output = array(
            'pagination_link'  => $this->pagination->create_links(),
            'product_list'   => $this->Common_model->fetch_data($config["per_page"], $start)
        );
        // echo ($output);
        echo json_encode($output);
        
    }
    public function course_details()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/course_details');
        $this->load->view('frontend/template/footer');
        
    }
    public function add_course_details(){
        $cid = $this->input->post('courseid');
        // $redirect = 'index.php/frontend/course_enroll_module?id=" $cid"';

        $course_entroll_details = array(
                'member_id' =>  $this->input->post('memberid'),
                'course_id' =>  $this->input->post('courseid'),
                'datetime' => date('Y-m-d H:i:s')
            );

        $this->Common_model->insert('course_enroll',  $course_entroll_details);

        // redirect(base_url() . $redirect);
                
        $success['status'] = "true";
        $success["courseid"] =  $cid;
        echo json_encode($success);
          
    }
    public function course_enroll_module()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/course_enroll_module');
        $this->load->view('frontend/template/footer');
        
    }

    public function login()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/login');
        $this->load->view('frontend/template/footer');

		
    }


    public function member_validation(){
       
      
        $this->form_validation->set_rules('email', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // $this->form_validation->set_message('check_user_exists', 'Invalid Username or Password!');
        if ($this->form_validation->run()):
                        
            $member_details=$this->Common_model->get_all("member",array('email' => $this->input->post('email')))->result();
            $member_insertID =$member_details[0]->id;
           
            if( $member_insertID): 
                $data = array(
                    'member_id'=>$member_insertID
                );
                // var_dump($data);
                $this->session->set_userdata($data); 
            endif;
            $success['status'] = true; 
            echo json_encode($success);
        else:
            $error['status'] = false;
            $error['email'] = form_error("password");
            $error['password'] = form_error("password");
            echo json_encode($error);
        endif;
 
 
       }
     //check user exists
     public function check_member_exists() {
        $member_details=$this->Common_model->get_all("member",array('email' => $this->input->post('email')))->result();
        // var_dump($user_details);
        if ($member_details):
            // echo 'callback';
            // var_dump($user_details);
            //decode and check system user password
            // $ps = $this->Common_model->password_encode($this->input->post('password'));
            // echo "udetails in";
            //var_dump($this->encrypt->encode("ABC"));
            //var_dump($this->encrypt->decode($this->encrypt->encode("ABC")));
            //  var_dump($ps['password']);
            //  var_dump(($user_details[0]->password));
            //  var_dump($this->input->post('password'));
            if ($member_details[0]->password == $this->input->post('password')):
                // echo "udetails pw";
                // var_dump($user_details[0]->password);
                return TRUE;
            else:
                return FALSE;
            endif;
        else:
            return FALSE;
        endif;
    }
       public function memberlogout(){
                
        $this->session->unset_userdata('member_id');
        $this->session->sess_destroy();
        redirect(base_url().'index.php/frontend/login');
    }
 
    public function frontend_ajax(){
        $this->load->view('frontend/ajax');
    }
    public function register()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/register');
        $this->load->view('frontend/template/footer');
        
    }
    public function register_member(){
        $this->form_validation->set_rules('name', 'name', "trim|required");
        $this->form_validation->set_rules('dob', 'date of birth', "trim|required");
        $this->form_validation->set_rules('email', 'email', "trim|required|is_unique[member.email]");
        $this->form_validation->set_rules('contact', 'contact', "trim|required");
        $this->form_validation->set_rules('password', 'password', "trim|required");
        $this->form_validation->set_rules('address1', 'address1', "trim|required");
        $this->form_validation->set_rules('country', 'contry', "trim|required");

        if ($this->form_validation->run()):
            // $member_details = $this->Common_model->get_all("member",array("id"=>$this->input->post("id")))->result();

        

            $edit_member_details = array(   "name"=>$this->input->post("name"),
                                            "dob"=>$this->input->post("dob"),
                                            "email" => $this->input->post("email"),
                                            "password" => $this->input->post("password"),
                                            "contact"=>$this->input->post("contact"),
                                            "address1"=>$this->input->post("address1"),
                                            "address2"=>$this->input->post("address2"),
                                            "country"=>$this->input->post("country"),
                                            "gender"=>$this->input->post("gender"),
                                        );
       
         
                $this->Common_model->insert("member", $edit_member_details);
    
               
                $success["status"] = true;
                echo json_encode($success);
    
            
            else:
                $error['status'] = false;
                $error['name'] = form_error("name");
                $error['dob'] = form_error("dob");
                $error['email'] = form_error("email");
                $error['contact'] = form_error("contact");
                $error['password'] = form_error("password");
                $error['address1'] = form_error("address1");
                $error['country'] = form_error("country");
                echo json_encode($error);
            endif;
        
    }
            
           
            
            public function add_invoice(){
                
                // // 	#region ------- Producs purchase Details -------
                $this->form_validation->set_rules("table_pid[]" , "product id " ,"trim|required" );
                $this->form_validation->set_rules("table_qty[]" , " product qty" ,"trim|required" );
                $this->form_validation->set_rules("table_rt[]" , "product rate " ,"trim|required" );
                $this->form_validation->set_rules("table_pr[]" , " product price" ,"trim|required" );
                
                if ($this->form_validation->run()):
                    //             #region ------- Create Doube Entry Details 
                    $this->db->select('acc_id');
                    $customer_acc_id    = $this->Common_model->get_all('customer_information',['id'=>$this->session->userdata('cus_id')])->result();
                    
                    //             #region ------- // get bank commpany account id
                    $this->db->select('*');
                    $branch_details  = $this->Common_model->get_all('branch',['id'=>1])->result();
                    //             #region ------- // create transation number
                    $query = $this->db->query("SELECT * FROM sales_order ORDER BY id DESC LIMIT 1")->result();
                    if($query):
                        $exp_tranno_code = (explode("_", $query[0]->transaction_no));
                        $Eacc_number =  $exp_tranno_code[1];
                        $Eacc_number++;
                        $traNo = "SO". date('Ym').'_'.str_pad($Eacc_number, 4, "0", STR_PAD_LEFT); //$branch_details[0]->code.
                    else: 
                        $traNo = "SO". date('Ym').'_'."0001"; //$branch_details[0]->code.
                    endif;
                    //             #region ------- // insert sales order details
                    $DateTime = date('Y-m-d H:i:s');
                    
                    $this->db->limit(1);
                    $this->db->order_by("id","desc");
                    $accdate=$this->Common_model->get_all("cashier_open")->result();
                    
                    $add_sales_order_details = array( 		 
                        "branch_id "=>1,
                        "transaction_no"=> $traNo,
                        "customer_id "=>$this->session->userdata('cus_id'),
                        "total_amount"=>$this->input->post("in_pu_gtot"),
                        "sales_date"=> $DateTime,
                        "cr"=>$branch_details [0]->acc_sales_order,
                        "dr"=>$customer_acc_id  [0]->acc_id,                                   
                        "status"=>1,
                        "packaging_charge"=>$this->input->post("in_pu_package_charge"),
                        "acc_date"=> $accdate[0]->acc_date,
                        "portal"=>1
                    );
                    
                    $this->Common_model->insert("sales_order",  $add_sales_order_details);
                    $sales_order_insertID = $this->Common_model->getInsert_id();
                    
                    //             # region ------- // create transation number sales order payment
                    
                    
                    $query1 = $this->db->query("SELECT * FROM sales_order_payment ORDER BY id DESC LIMIT 1")->result();
                    if($query1):
                        $exp_tranno_code = (explode("_", $query1[0]->transaction_no));
                        $Eacc_number =  $exp_tranno_code[1];
                        $Eacc_number++;
                        $traNo1 = $branch_details[0]->code."SP". date('Ym').'_'.str_pad($Eacc_number, 4, "0", STR_PAD_LEFT);
                    else: 
                        $traNo1 = $branch_details[0]->code."SP". date('Ym').'_'."0001";
                    endif;
                    
                    $DateTime = date('Y-m-d H:i:s');
                    $add_sales_order_payment_details = array( 	
                        "transaction_no"=> $traNo1,	 
                        "order_id "=>$sales_order_insertID ,
                        "date" => $DateTime,
                        "amount"=>$this->input->post("in_pu_gtot"),
                        // "payment_type"=>$this->input->post("in_pu_pytp"),
                        "bank_id "=>1, 
                        "cr"=>$branch_details [0]->acc_cashin_hand,  
                        "dr"=>$branch_details [0]->acc_sales_order,                               
                        // "add_by"=>$this->session->userdata("user_id"),
                        "acc_date"=> $accdate[0]->acc_date
                    );
                    
                    $this->Common_model->insert("sales_order_payment",  $add_sales_order_payment_details);
                    
                    $details_array = new MultipleIterator();
                    //         // var_dump( $details_array);
                    $details_array->attachIterator(new ArrayIterator($this->input->post("table_pid")));
                    $details_array->attachIterator(new ArrayIterator($this->input->post("table_qty")));
                    $details_array->attachIterator(new ArrayIterator($this->input->post("table_pr")));
                    $details_array->attachIterator(new ArrayIterator($this->input->post("table_rt")));
                    $details_array->attachIterator(new ArrayIterator(($this->input->post("table_pkcharge")!="")?$this->input->post("table_pkcharge"):""));
                    
                    //          #region ------- Product Purchase Details -------
                    foreach ($details_array as $dtArray):
                        
                        $table_pid = $dtArray[0];
                        $table_qty = $dtArray[1];
                        $table_pr = $dtArray[2];
                        $table_rt = $dtArray[3];
                        $table_pkcharge = $dtArray[4];
                        $branchid = 1;
                        
                        $DateTime = date('Y-m-d H:i:s');
                        $sales_order_details_details = array(  
                            "branch_id"=> $branchid,
                            "order_id"=>$sales_order_insertID,
                            "product_id"=> $table_pid,
                            "item_qty"=> $table_qty,
                            "per_price"=> $table_pr,
                            "packaging_charge"=> $this->input->post("otype")=="dine-in" ? 0.00 :$table_pkcharge,
                            "total_price"=> $table_rt,
                            "status"=> 1,
                            "order_date"=> $DateTime,
                            "acc_date"=> $accdate[0]->acc_date
                        );
                        $this->Common_model->insert("sales_order_details", $sales_order_details_details);
                        
                        $ppqty=$this->Common_model->get_all('product_purchase_details',['product_id '=>$table_pid,'prod_date'=>date("Y-m-d")])->result();
                        if($ppqty):
                            $updetails=array(
                                "quantity"=>$ppqty[0]->quantity-$table_qty,
                                "sold_qty"=>$ppqty[0]->sold_qty+$table_qty
                            );
                            $this->Common_model->update('product_purchase_details',$updetails,['product_id '=>$table_pid,'prod_date'=>date("Y-m-d")]);
                        endif;
                    endforeach;//End Iterator Foreach
                    
                    $success['status'] = true; 
                    // $success["saleid"] = $sales_order_insertID;
                    echo json_encode($success);
                    
                else:
                    $error['status'] = false;
                    $error["errors"] = $this->form_validation->error_array();
                    echo json_encode($error);
                    
                    
                endif;
                
            }
            public function microfile()
            {
                $this->load->view('frontend/template/microheader');
                $this->load->view('frontend/microfile');
                $this->load->view('frontend/template/microfooter');
                
            }
            public function microprofile()
            {
                $this->load->view('frontend/template/microheader');
                $this->load->view('frontend/microprofile');
                $this->load->view('frontend/template/microfooter');
                
            }
            public function microcourseenroll()
            {
                $this->load->view('frontend/template/microheader');
                $this->load->view('frontend/microcourseenroll');
                $this->load->view('frontend/template/microfooter');
                
            }
            public function editmember()
            {
                $this->load->view('frontend/template/microheader');
                $this->load->view('frontend/editmicroprofile');
                $this->load->view('frontend/template/microfooter');
                
            }
            public function edit_member_profile(){
                $this->form_validation->set_rules('name', 'name', "trim|required");
                $this->form_validation->set_rules('dob', 'date of birth', "trim|required");
                // $this->form_validation->set_rules('email', 'email', "trim|required");
                $this->form_validation->set_rules('contact', 'contact', "trim|required");
                $this->form_validation->set_rules('password', 'password', "trim|required");
                $this->form_validation->set_rules('address1', 'address1', "trim|required");
                $this->form_validation->set_rules('country', 'contry', "trim|required");

                if ($this->form_validation->run()):
                    $member_details = $this->Common_model->get_all("member",array("id"=>$this->input->post("id")))->result();

                if($member_details != NULL):
		
                    $edit_member_details = array(   "name"=>$this->input->post("name"),
                                                    "dob"=>$this->input->post("dob"),
                                                    "email" => $this->input->post("email"),
                                                    "password" => $this->input->post("password"),
                                                    "contact"=>$this->input->post("contact"),
                                                    "address1"=>$this->input->post("address1"),
                                                    "address2"=>$this->input->post("address2"),
                                                    "country"=>$this->input->post("country"),
                                                );
	   		
                 
                        $this->Common_model->update("member", $edit_member_details,array("id"=>$member_details[0]->id));
			
                       
                        $success["status"] = true;
                        echo json_encode($success);
			
                    endif;
                    else:
                        $error['status'] = false;
                        $error['name'] = form_error("name");
                        $error['dob'] = form_error("dob");
                        $error['contact'] = form_error("contact");
                        $error['password'] = form_error("password");
                        $error['address1'] = form_error("address1");
                        $error['country'] = form_error("country");
                        echo json_encode($error);
                    endif;
                
            }
            
        }
        