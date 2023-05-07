<?php

class Common_model extends CI_Model {

    private $id, $insert_id;

    public function __construct() {
        parent::__construct();
        //$this->load->library('encrypt');
    }
     //return user id
     public function user_id() {
        return $this->id;
    }
    function getId() {
        return $this->id;
    }

    function getInsert_id() {
        return $this->insert_id;
    }

    //insert
    public function insert($table, $data) {
        $this->db->trans_start();
        $this->db->insert($table, $data);
        $this->insert_id = $this->db->Insert_id();
        $this->db->trans_complete();
    }

    //update
    public function update($table, $data, $where) {
        $this->db->update($table, $data, $where);
    }

    //delete
    public function delete($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function can_login($username, $password){

        $this->db->where('email',$username);
        $this->db->where('password',$password);

        $query = $this->db->get('member');


        if ($query->num_rows() > 0) {

                return true;
     
        }

        else{


            return false;

        }



    }


    //get all details
//    public function get_all($table,$data = NULL){
//        return $this->db->get_where($table,$data);
//    }
//     public function get_all($table, $data = NULL, $limit = NULL) {
// //        (count(func_get_args()) == 2) ? $this->db->limit(func_get_arg(1), func_get_arg(2)) : NULL;
//         if ($limit != null) {
//             $this->db->limit($limit);
//         }
//         $result = $this->db->get_where($table, $data);
//         return ($this->db->affected_rows() ? $result : FALSE);
//     }

      //get all details
      public function get_all($table, $data = NULL, $limit = NULL, $des = null, $order = null) {
        //        (count(func_get_args()) == 2) ? $this->db->limit(func_get_arg(1), func_get_arg(2)) : NULL;
        if ($limit != null) {
            $this->db->limit($limit);
        }
        if ($des != null) {
            $this->db->order_by('id', "desc");
        }
        if ($order != null) {
            $this->db->order_by($order, "asc");
        }
        $result = $this->db->get_where($table, $data);
        return $result;
    }
	

    
      public function get_like($table,$colname, $key = NULL) {
        $this->db->like($colname, $key, 'after');
        $this->db->select()->from($table); 
        $query = $this->db->get();
        return $query;
    }

//     public function search_without($table,$name = NULL,$inarray=NULL) {
//        $this->db->like('item_name', $name, 'after');
//        $this->db->select()->from($table);
//        $this->db->where_not_in('id', $inarray );
//        $query = $this->db->get();
//        return $query;
//    }
     public function get_groupby($table,$groupby=NULL) {
        //$this->db->like('item_name', $name, 'after');
        $this->db->select()->from($table);
         $this->db->group_by($groupby); 
        $query = $this->db->get();
        return $query;
    }
     //get single system user details
     public function get_single_system_user(){ 
        $query1 = $this->db->get_where('system_user',func_get_arg(0)); 
        if($query1->num_rows() > 0):
        foreach($query1->result() as $row):
            $this->id           = $row->id;
            // $this->name         = $row->name;
            $this->email    = $row->email;
            // $this->userTypeId   = $row->user_type_id;
            // $this->image        = $row->image;
        endforeach;
        
        if(count(func_get_args()) == 2 && func_get_arg(1) == TRUE):
           foreach($query1->result() as $row):
            $this->password     = $row->password;
           endforeach; 
        endif;
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    //end get single system user details
     //return user password
     public function user_password(){
        return $this->password;
    }
    //end return user password
      //is logged in
      public function is_logged_in() {

        if ($this->uri->segment(1) != 'edulogin' && $this->uri->segment(1) != 'edulogout'):
                $this->get_single_system_user(array('id' => $this->session->userdata('user_id')));
                ($this->getId() != NULL)? : redirect(base_url().'index.php/edulogout');
        endif;

        if ($this->uri->segment(1) == 'edulogin'):
            if ($this->session->userdata('user_id') != NULL):
                redirect(base_url() . 'index.php/Edulogin');
            endif;
        endif;
    }
     //is logged in
     public function is_loggedmember_in() {

        if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != 'logout'):
                $this->get_single_system_user(array('id' => $this->session->userdata('member_id')));
                ($this->getId() != NULL)? : redirect(base_url().'index.php/logout');
        endif;

        if ($this->uri->segment(1) == 'login'):
            if ($this->session->userdata('member_id') != NULL):
                redirect(base_url() . 'index.php/login');
            endif;
        endif;
    }

    public function make_query()
    {
        $query="SELECT * FROM course";
        return $query;
    }
    public function count_all()
        {
        $query = $this->make_query();
        $data = $this->db->query($query);
        return $data->num_rows();
        }

     public  function fetch_data($limit, $start){
         $query = $this->make_query();
        $query .= ' LIMIT '.$start.', ' . $limit;
        $data = $this->db->query($query);
        $output = '';
         if($data->num_rows() > 0)
         {
          foreach($data->result_array() as $row)
          {
           $output .= '

           <div class="col-xl-3 col-lg-4 col-sm-6">
          

            <!-- Course Start -->
            <div class="course-item-02" >
            <a href="'. base_url().'index.php/frontend/course_details?id='. $row['id'].'">
                <div class="course-header">
                    <div class="course-header__thumbnail rounded-0">
                        <img src="'.base_url().'assets/content/course/'. $row['image'].'" alt="courses" width="330" height="221">
                    </div>
                   
                </div>
                <div class="course-info-02">
                    
                    <h3 class="course-info-02__title">'.$row['title'].'</h3>
                    <div class="course-info-02__description">
                        <p>'.$row['description'].'</p>
                    </div>
                    <div class="course-info-02__price">
                        <span class="free">Free</span>
                    </div>
                    <div class="course-info-02__rating">

                        <div class="rating-star">
                            <div class="rating-label" style="width: 100%;"></div>
                        </div>

                        <span>(2)</span>
                    </div>
                </div>
                </a>
            </div>
            <!-- Course End -->
            </div>
       
          
       
           ';
          }
         }
         else
         {
          $output = '<h3>No Data Found</h3>';
         }
         return $output;
        }
   

   
   
}
