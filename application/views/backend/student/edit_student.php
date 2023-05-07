<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title"></h4>
<!--                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn">

                            <div class="form-group mb-0">
                                <div class="input-container icon-left position-relative">
                                    <span class="input-icon icon-left">
                                        <span data-feather="calendar"></span>
                                    </span>
                                    <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                    <span class="input-icon icon-right">
                                        <span data-feather="chevron-down"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown action-btn">
                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <span class="dropdown-item">Export With</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-print"></i> Printer</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-file-pdf"></i> PDF</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-file-text"></i> Google Sheets</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-file-csv"></i> CSV</a>
                            </div>
                        </div>
                        <div class="dropdown action-btn">
                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-share"></i> Share
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <span class="dropdown-item">Share Link</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-facebook"></i> Facebook</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-twitter"></i> Twitter</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-google"></i> Google</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-feed"></i> Feed</a>
                                <a href="#" class="dropdown-item">
                                    <i class="la la-instagram"></i> Instagram</a>
                            </div>
                        </div>
                        <div class="action-btn">
                            <a href="#" class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus"></i> Add New</a>
                        </div>
                    </div>-->
                </div>

            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Add Student</h6>
                        </div>
                        <div class="card-body py-md-25">
                            <div class="card-block">
                                     <?php
                                    $wheredet = array("id" => $_GET["id"]);
                                    $studentdetails = $this->Common_model->get_all("student_details", $wheredet)->result();
                                    ?>

                            <form id="update_student">
                                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $studentdetails[0]->id ?>">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Member Id</label>
                                            <input class="form-control form-control-lg" type="text" name="memberid" placeholder="Enter member id" value="<?php echo $studentdetails[0]->member_id ?>">
                                            <span style="color: red;font-size: 13px" class="error_memberid"></span>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <span style="color: red;font-size: 13px" class="error_image"></span>
                                        </div>
                                    </div>-->
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Full Name</label>
                                            <input class="form-control form-control-lg" type="text" name="fullname" placeholder="Enter full name" value="<?php echo $studentdetails[0]->full_name ?>">
                                            <span style="color: red;font-size: 13px" class="error_fullname"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Display Name</label>
                                            <input class="form-control form-control-lg" type="text" name="displayname" placeholder="Enter display name"  value="<?php echo $studentdetails[0]->display_name ?>">
                                            <span style="color: red;font-size: 13px" class="error_displayname"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Year</label>
                                            <input class="form-control form-control-lg" type="text" name="year" placeholder="Enter year"  value="<?php echo $studentdetails[0]->year ?>">
                                            <span style="color: red;font-size: 13px" class="error_year"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">


                                        <div class="form-group mb-25">
                                            <label>Address</label>
                                            <input class="form-control form-control-lg" type="text" name="address" placeholder="Enter address"  value="<?php echo $studentdetails[0]->address ?>">
                                            <span style="color: red;font-size: 13px" class="error_address"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>School</label>
                                           <?php $schools=$this->Common_model->get_all("schools")->result();?>
                                            <select  class="form-control form-control-lg" name="school">
                                                <?php 
                                                foreach($schools as $school):
                                                 ?> <option value="<?php echo $school->id?>" <?php echo ($school->id==$studentdetails[0]->school)?"selected":NULL?>>
                                                     <?php echo $school->name?>
                                                 </option> 
                                                 <?php
                                             endforeach;

                                             ?>
                                         </select>
                                            <span style="color: red;font-size: 13px" class="error_school"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Telephone No</label>
                                            <input class="form-control form-control-lg" type="text" name="telephone" placeholder="Enter telephon no"  value="<?php echo $studentdetails[0]->telephone_no ?>">
                                            <span style="color: red;font-size: 13px" class="error_telephone"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Gender</label>
                                            <div class="col-sm-12">
                                                <input type="radio" name="gender" value="<?php echo ($studentdetails[0]->gender=="male")?"checked":null ?>" required  style="position: initial;opacity:1;margin: 10px;height: 15px;transform: scale(1.5)" checked> Male

                                                 <input type="radio" name="gender" value="<?php echo  
                                                   ($studentdetails[0]->gender=="female")?"checked":null ?>" required
                                                    style="position: initial;opacity:1;margin: 10px;height: 15px;transform: scale(1.5)" checked> Female

                                                <span style="color: red;font-size: 13px" class="error_gender"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Date of Birth</label>
                                            <input class="form-control form-control-lg" type="date" name="dob" placeholder="Enter date of birth"  value="<?php echo date("Y-m-d",strtotime($studentdetails[0]->date_of_birth)) ?>">
                                            <span style="color: red;font-size: 13px" class="error_dob"></span>
                                        </div>
                                    </div>
                                   <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-25">
                                                <label>Parent Name</label>
                                                <input class="form-control form-control-lg" type="text" name="parentname" placeholder="Enter parent name" value="<?php echo $studentdetails[0]->parent_name ?>">
                                                <span style="color: red;font-size: 13px" class="error_parentname"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-25">
                                                <label>Parent Phone No</label>
                                                <input class="form-control form-control-lg" type="text" name="parentphone" placeholder="Enter parent tel no" value="<?php echo $studentdetails[0]->parent_phone ?>">
                                                <span style="color: red;font-size: 13px" class="error_parentphone"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!--<div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label> QR Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <span style="color: red;font-size: 13px" class="error_qr"></span>
                                        </div>

                                    </div>-->
                                     <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-25">
                                                    <label>Email Address</label>
                                                    <input class="form-control form-control-lg" type="text" name="email" placeholder="name@example.com"  value="<?php echo $studentdetails[0]->email ?>">
                                                    <span style="color: red;font-size: 13px" class="error_email"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-25">
                                                    <label>Password</label>
                                                    <div class="input-container position-relative icon-right">
                                                        <a href="#" class="input-icon icon-right"><span data-feather="eye-off"></span></a>
                                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Password"  value="<?php echo $studentdetails[0]->password ?>">
                                                        <span style="color: red;font-size: 13px" class="error_name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="update-student">Update Student</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                           </div>
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
    $("#update-student").click(function (e) {
    $('.loadingc').css("display","block");
        e.preventDefault(); 
        $form = $('#update_student');
        update_student($form);

    function update_student($form){ 
        var formdata = new FormData($form[0]);
            formdata.append('form_name', 'update_student');

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/student/func_update_student',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(".error_memberid").html("");
                    $(".error_image").html("");
                    $(".error_fullname").html("");
                    $(".error_displayname").html("");
                    $(".error_year").html("");
                    $(".error_address").html("");
                    $(".error_school").html("");
                    $(".error_telephone").html("");
                    $(".error_gender").html("");
                    $(".error_dob").html("");
                    $(".error_parentname").html("");
                    $(".error_parentphone").html("");
                    $(".error_qr").html("");
                    $(".error_email").html("");
                    $(".error_password").html("");
                    $(".error_restrict").html("");
                    $(".error_datetime").html("");
                    
                    

                    if (data['status'] == "true") {
                       
                         
                         setTimeout(function () { 
                            $('.loadingc').css("display","none");
                             $(".succmod").fadeIn(2000);
                            $(".succmod").fadeOut(2000);
                            window.location = "<?php echo base_url() ?>index.php"
                        }, 5000);
                        
                    }else{

                     // var div = document.createElement("div");
                    // div.innerHTML = ;
                    $(".error_memberid").html(data.memberid);
                    $(".error_image").html(data.image);
                    $(".error_fullname").html(data.fullname);
                    $(".error_displayname").html(data.displayname);
                    $(".error_year").html(data.year);
                    $(".error_address").html(data.address);
                    $(".error_school").html(data.school);
                    $(".error_telephone").html(data.telephone);
                    $(".error_gender").html(data.gender);
                    $(".error_dob").html(data.dob); 
                    $(".error_parentname").html(data.parentname);
                    $(".error_parentphone").html(data.parentphone);
                    $(".error_qr").html(data.qr);
                    $(".error_email").html(data.email);
                    $(".error_password").html(data.password);
                    $(".error_restrict").html(data.restrict);
                    $(".error_datetime").html(data.dt);
                    $('.loadingc').css("display","none");
                    }
                    
                }
            });
        }
    });
</script>