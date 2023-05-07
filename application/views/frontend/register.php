
    <!-- Dashboard Content Start -->
    <div class="dashboard-content">

        <div class="container">
            <h4 class="dashboard-title">Register</h4>
           

            <!-- Dashboard Profile Start -->
            <div class="dashboard-profile">
            <?php echo form_open('', 'id="register" '); ?>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Name</label>
                           
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter name" >
                            <span style="color: red;font-size: 13px" class="error_name"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Date of  Birth</label>
                            <input class="form-control form-control-lg" type="date" name="dob"  >
                            <span style="color: red;font-size: 13px" class="error_dob"></span>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Email</label>
                            <input  class="form-control form-control-lg" type="email" name="email" placeholder="Enter email" >
                            <span style="color: red;font-size: 13px" class="error_email"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Phone Number</label>
                            <input class="form-control form-control-lg" type="text" name="contact" placeholder="Enter contact number" >
                            <span style="color: red;font-size: 13px" class="error_contact"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Address1</label>
                            <input class="form-control form-control-lg" type="text" name="address1" placeholder="Enter address1" >
                            <span style="color: red;font-size: 13px" class="error_address1"></span>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group mb-25">
                            <label>Address2</label>
                            <input class="form-control form-control-lg" type="text" name="address2" placeholder="Enter address2" >
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
                                           ?>
                                            <option    value="<?= $tableRes->id ?>"  > <?= $tableRes->name ?></option>
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
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" >
                            <span style="color: red;font-size: 13px" class="error_password"></span>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                  
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <label class="control-label">Gender</label>
                    </br>
                    </br>
                    <input type="radio" name="gender" checked="checked" value="1">
                    <lable class="control-label"> Male</lable>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="0">
                    <lable class="control-label"> Female</lable>
                    
                  </div>
                  
                </div>
                <div class="row">
                <div class="dashboard-header__btn" style="margin-top:20px">
                    <button type="submit" class="btn btn-primary" id="member_register"  ><i class="edumi edumi-content-writing"></i> <span class="text">Register </span></button>
                </div>  

            </div>
            <!-- Dashboard Profile End -->
            
            <?php echo form_close(); ?>
        </div>


    </div>
    <!-- Dashboard Content End -->


</main>
<!-- Dashboard Main Wrapper End -->
<script type="text/javascript">

 $("#member_register").click(function(e) {
  
   
  e.preventDefault(); 
  $form = $('#register');
  login_stu($form);

  function login_stu($form) {
    var formdata = new FormData($form[0]);
    formdata.append('form_name', 'register');

        $.ajax({
        type: 'post',
        dataType: "JSON",
        url: '<?php echo base_url()?>index.php/Frontend/register_member',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
              

            $(".error").html("");
                if(data.status==false){
                    $(".error_name").html(data.name);
                    $(".error_dob").html(data.dob);
                    $(".error_email").html(data.email);
                    $(".error_contact").html(data.contact);
                    $(".error_address1").html(data.address1);
                    $(".error_password").html(data.password);
                    // notification_message("error","Error Occurred ! Please Check the fields.");
                        // $.each(data.errors, function(key,val) {
                            // $(".error_"+key).html(val);
                        // });
                }else{
                    
                    // notification_message("info", "User Login Successfully!!");
                    setTimeout(function(){ window.location.href="<?php echo base_url()?>index.php/frontend/login";  });
                }
            }//data
            });//ajax
        }//function add student
    });//function e
</script>



