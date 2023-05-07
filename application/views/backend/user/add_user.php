<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title"></h4>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Add User</h6>
                        </div>
                        <div class="card-body py-md-25">
                         
                                <?= form_open_multipart("",array("id"=>"add_user"))?>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>User Name</label>
                                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter name">
                                            <span style="color: red;font-size: 13px" class="error_name"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="text" name="password" placeholder="Enter password">
                                            <span style="color: red;font-size: 13px" class="error_password"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                <label>Email Address</label>
                                                <input class="form-control form-control-lg" type="text" name="email" placeholder="name@example.com">
                                                <span style="color: red;font-size: 13px" class="error_email"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>User Role</label>
                                            <input class="form-control form-control-lg" type="text" name="role" placeholder="">
                                            <span style="color: red;font-size: 13px" class="error_role"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Prefix</label>
                                            <input class="form-control form-control-lg" type="text" name="prefix" placeholder="">
                                            <span style="color: red;font-size: 13px" class="error_prefix"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="save-user">Add User</button>
                                        </div>
                                    </div>
                               
                        <?= form_close()?>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
        </div>
    </div>

</div>

<div class="succmod" style="width: 27%;
top: 45%;
left: 38%;
z-index: 9999;
position: fixed;display: none;
color: white;font-size: 25px;font-weight: 700;
background: #1F4363;padding: 50px">
Successfully Registered
</div>



<script>
    $("#save-user").click(function (e) {

        alert()
         $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#add_user');
         add_user($form);

        function add_user($form) {
            var formdata = new FormData($form[0]);
             formdata.append('form_name', 'add_user');

             $.ajax({
                 type: 'post',
             dataType: "JSON",
                 url: '<?php echo base_url(); ?>index.php/user/func_add_user',
                 data: formdata,
                 cache: false,
                 contentType: false,
                 processData: false,
                 success: function (data) {
                     $(".error_name").html("");
                     $(".error_password").html("");
                     $(".error_email").html("");
                     $(".error_role").html("");
                     $(".error_prefix").html("");
                   
                    if (data['status'] == "true") {


                      setTimeout(function () {
                          $('.loadingc').css("display", "none");
                          $(".succmod").fadeIn(2000);
                          $(".succmod").fadeOut(2000);
                          window.location = "<?php echo base_url() ?>index.php"
              }, 5000);

                 } else {

                       
                         $(".error_name").html(data.name);
                         $(".error_password").html(data.password);
                         $(".error_email").html(data.email);
                         $(".error_role").html(data.role);
                         $(".error_prefix").html(data.prefix);
                         $('.loadingc').css("display", "none");
                  }

             }
           });
         }
    });
</script>