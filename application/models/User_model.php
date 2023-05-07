<?php

class User_model extends CI_Model{
    private $id,$name,$userName,$password,$userTypeId,$image,$allUserDetails,$insertId;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Userpermission_model');
        $this->load->model('Feature_model');
        $this->load->library('encryption');
    }
    
    //return all user details
    public function all_user_details(){
        return $this->allUserDetails;
    }
    //end return all user details
    
    //return user id
    public function user_id(){
        return $this->id;
    }
    //end return user id
    
    //return user name
    public function user_name(){
        return $this->name;
    }
    //end return user name
    
    //return user username
    public function user_username(){
        return $this->email;
    }
    //end return user username
    
    //return user password
    public function user_password(){
        return $this->password;
    }
    //end return user password
    
    //return user id
    public function user_typeid(){
        return $this->userTypeId;
    }
    //end return user typeid
    
    //return user image
    public function user_image(){
        return $this->image;
    }
    //end return user image
    
    //insert
    public function insert(){
        $this->db->trans_start();
        $this->db->insert('user',func_get_arg(0));
        $this->insertId = $this->db->insert_id();
        $this->db->trans_complete();
    }
    //end insert
    
    //update
    public function update(){
        $this->db->update('user',func_get_arg(0),func_get_arg(1));
    }
    //end insert
    
    //delete
    public function delete(){
        $this->db->where(func_get_arg(0));
        $this->db->delete('user');
    }
    //end delete
    
    //get all users details
    public function get_all_users($data = NULL){
        $this->allUserDetails = $this->db->get_where('system_user',$data);
    }
    //end get all users details
    
    //get single system user details
    public function get_single_system_user(){ 
        $query1 = $this->db->get_where('system_user',func_get_arg(0)); 
        if($query1->num_rows() > 0):
        foreach($query1->result() as $row):
            $this->id           = $row->id;
            $this->name         = $row->name;
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


    //is logged in
    public function is_logged_in(){
//var_dump("abc".$this->session->userdata('user_id'));
	        if($this->uri->segment(1) != 'login'):
                    // var_dump("abc".$this->session->userdata('user_id'));
                    
                    // die();
		        if($this->session->userdata('user_id')):
			        $this->get_single_system_user(array('id'=>($this->session->userdata('user_id'))));
			        ($this->user_name() != NULL)? : header("Location: ".base_url()."index.php/logout") ;
		        else:
			        header("Location: ".base_url()."index.php/logout");
		        endif;
	        endif;

	        if($this->uri->segment(1) == 'login'):
		        if($this->session->userdata('user_id') != NULL):
			        redirect(base_url().'index.php/student');
		        endif;
	        endif;



    }
    //end is logged in
    
    
    //system users password encode
    public function password_encode(){
        if(func_get_arg(0) != null):
            $key = "4:L@795T26u44g";
            $pass = func_get_arg(0).$key;
            $pass = md5(sha1(md5($pass)));
            $password = $this->encrypt->encode($pass);
            return array('password'=>$password);
        endif;
        
        if(count(func_get_args()) == 2):
            $key = "4:L@795T26u44g";
            $pass = func_get_arg(1).$key;
            $pass = md5(sha1(md5($pass)));
            return array('password'=>$pass);
        endif;
    }
    //end system users password encode
    
    //check user privileges
    public function if_set_privileges($uri,$redirect = NULL){
        $this->get_single_system_user(array('id'=>$this->encrypt->decode($this->session->userdata('user_id'))));
        if($this->userTypeId != NULL):
            $this->Userpermission_model->get_all_permissions(array('user_type_id'=>$this->userTypeId));
            if(count($this->Userpermission_model->user_permissions()->result()) > 0):
                foreach($this->Userpermission_model->user_permissions()->result() as $row):
                    $feature_ids[] = $row->feature_id;
                endforeach;
                $featuresIds = implode($feature_ids,',');
                $this->Feature_model->get_all_features($featuresIds);
                foreach($this->Feature_model->all_features()->result() as $row):
                    $feature_keys[] = $row->name;
                endforeach;
                if(in_array($uri,$feature_keys)):
                    return TRUE;
                else:
                    if($redirect == TRUE):
                        header("Location: ".base_url()."index.php/dashboard");
                    endif;
                    return FALSE;
                endif;
            else:
                if($redirect == TRUE):
                        header("Location: ".base_url()."index.php/dashboard");
                    endif;
                    return FALSE;
            endif;//if permissions not null
        endif;//if type id not null
    }
    //end check user privileges
    
}//end user model
