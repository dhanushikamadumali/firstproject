
    <!-- Dashboard Content Start -->
    <div class="dashboard-content">

        <div class="container">
            <h4 class="dashboard-title">Edit My Profile</h4>
            <?php
             if ($this->input->get('id')):
            
                $member = $this->Common_model->get_all("member",["id"=>$this->input->get('id')])->result();
                if($member != ""):
                    ?>

            <!-- Dashboard Profile Start -->
            <div class="dashboard-profile">
            <?php echo form_open('', 'id="editprofile" '); ?>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Name</label>
                            <input class="form-control form-control-lg" name="id" value="<?php echo $member[0]->id ?>" hidden>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter name" value="<?php echo $member[0]->name ?>">
                            <span style="color: red;font-size: 13px" class="error_name"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Date of  Birth</label>
                            <input class="form-control form-control-lg" type="date" name="dob" placeholder="Enter date of birth" value="<?php echo $member[0]->dob ?>" >
                            <span style="color: red;font-size: 13px" class="error_dob"></span>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Email</label>
                            <input  class="form-control form-control-lg" type="email" name="email" placeholder="Enter email" value="<?php echo $member[0]->email ?>" readonly>
                            <span style="color: red;font-size: 13px" class="error_email"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Phone Number</label>
                            <input class="form-control form-control-lg" type="text" name="contact" placeholder="Enter contact number" value="<?php echo $member[0]->contact ?>">
                            <span style="color: red;font-size: 13px" class="error_contact"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Address1</label>
                            <input class="form-control form-control-lg" type="text" name="address1" placeholder="Enter address1" value="<?php echo $member[0]->address1 ?>">
                            <span style="color: red;font-size: 13px" class="error_address1"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Address2</label>
                            <input class="form-control form-control-lg" type="text" name="address2" placeholder="Enter address2" value="<?php echo $member[0]->address2 ?>">
                            <span style="color: red;font-size: 13px" class="error_adress2"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                        <label>Country</label>
                        <select class="form-control" name="country" >
                                <option value="">Select country</option>
                                <?php
                      
                                  $country = $this->Common_model->get_all("country")->result();
                                  if($country != ""):
                                        foreach ($country as $tableRes):
                                            $selected = $member[0]->country == $tableRes->id ? "selected" : null; ?>
                                            <option  <?= $selected ?>  value="<?= $tableRes->id ?>"  > <?= $tableRes->name ?></option>
                                        <?php
                                        endforeach;
                                    endif;
                                ?>
                            </select>
                            <span style="color: red;font-size: 13px" class="error_country"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Password</label>
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" value="<?php echo $member[0]->password ?>">
                            <span style="color: red;font-size: 13px" class="error_password"></span>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                <div class="dashboard-header__btn" style="margin-top:20px">
                    <button type="submit" class="btn btn-primary" id="edit-member"  ><i class="edumi edumi-content-writing"></i> <span class="text">Update </span></button>
                </div>  

            </div>
            <!-- Dashboard Profile End -->
            <?php
             endif;
            endif;
            ?>
            <?php echo form_close(); ?>
        </div>


    </div>
    <!-- Dashboard Content End -->


</main>
<!-- Dashboard Main Wrapper End -->
<script type="text/javascript">

 $("#edit-member").click(function(e) {
  
  e.preventDefault(); 
  $form = $('#editprofile');
  login_stu($form);

  function login_stu($form) {
    var formdata = new FormData($form[0]);
    formdata.append('form_name', 'editprofile');

        $.ajax({
        type: 'post',
        dataType: "JSON",
        url: '<?php echo base_url()?>index.php/Frontend/edit_member_profile',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
              

            $(".error").html("");
                if(data.status==false){
                    $(".error_name").html(data.name);
                    $(".error_dob").html(data.dob);
                    // $(".error_email").html(data.email);
                    $(".error_contact").html(data.contact);
                    $(".error_address1").html(data.address1);
                    $(".error_password").html(data.password);
                    // notification_message("error","Error Occurred ! Please Check the fields.");
                        // $.each(data.errors, function(key,val) {
                            // $(".error_"+key).html(val);
                        // });
                }else{
                    
                    // notification_message("info", "User Login Successfully!!");
                    setTimeout(function(){ window.location.href="<?php echo base_url()?>index.php/frontend/microprofile";  });
                }
            }//data
            });//ajax
        }//function add student
    });//function e
</script>



