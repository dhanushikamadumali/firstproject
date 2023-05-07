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
                            <h6>Add Course</h6>
                        </div>
                         <div class="card-body py-md-25">
                            <div class="card-block">
                                     <?php
                                    $wheredet = array("id" => $_GET["id"]);
                                    $coursemoduledetails = $this->Common_model->get_all("course_module", $wheredet)->result();
                                    if($coursemoduledetails != ""):
                                    ?>
                                    

                            <?= form_open_multipart("",array("id"=>"update_course_module"))?>
                                <input type="text" class="form-control" name="id" placeholder="" value="<?php echo $coursemoduledetails[0]->id ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Title</label>
                                                    <input class="form-control form-control-lg mtitle" type="text" name="mtitle" placeholder="Enter title" value="<?php echo $coursemoduledetails[0]->title ?>">
                                                    
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Youtube Link</label>
                                        <input type="text" class="form-control form-control-lg ylink" name="ylink" value="<?php echo $coursemoduledetails[0]->youtube_link ?>">
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group mb-25">
                                                <label>Course</label>
                                                <?php $course=$this->Common_model->get_all("course")->result();?>
                                                <select  class="form-control form-control-lg course" name="course">
                                                    <?php 
                                                    foreach($course as  $course):
                                                     ?> <option value="<?php echo $course->id?>" <?php echo ($course->id==$coursemoduledetails[0]->course_id)?"selected":NULL?>>
                                                         <?php echo $course->title?>
                                                     </option> 
                                                     <?php
                                                 endforeach;

                                                 ?>
                                             </select>
                                             
                                         </div>
                                     </div>
                                    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                                    <div class="col-md-12 mb-25">
                                        <div class="form-group mb-25">
                                        <label>Description</label>
                                            <textarea   
                                            type="text" class="form-control form-control-lg " name="module_description" value="<?php echo $coursemoduledetails[0]->description ?>"><?php echo $coursemoduledetails[0]->description ?> </textarea>
                                            <script>
                                                CKEDITOR.replace("module_description");
                                            </script>
                                        </div>
                                    </div>
                                    <?php
                                        endif;
                                    ?>                                        
                                    <div class="col-md-6 mt-5">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="update-course">Update Course</button>
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
            <!-- ends: .atbd-page-content -->
        </div>

<script>
    
          
    $("#update-course").click(function (e) {
        e.preventDefault();
        $form = $('#update_course_module');
        add_course($form);

        function add_course($form) {
            var formdata = new FormData($form[0]);
           
           
            
            formdata.append('form_name', 'update_course_module');
            var dd = CKEDITOR.instances.module_description.getData();
           
           formdata.append('module_description', dd);
          
        //     const arr_module = new Array();
            
              
                
              
        //         var module_description =  CKEDITOR.instances['module_description'].getData();
              
              
        //        modulerow = {"module_description": module_description};
              
        //        arr_module.push( modulerow);
           
            
        //    formdata.append('moduledescrib',  JSON.stringify(arr_module));
        
        //    

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/course/func_update_course_module',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                   
                    if (data['status'] == "true") {


                        // setTimeout(function () {
                        //     $('.loadingc').css("display", "none");
                        //     $(".succmod").fadeIn(2000);
                        //     $(".succmod").fadeOut(2000);
                        //     window.location = "<?php echo base_url() ?>index.php"
                        // }, 5000);

                    } else {

                        // var div = document.createElement("div");
                        // div.innerHTML = ;
                        // $(".error_image").html(data.image);
                        // $(".error_title").html(data.title);
                        // $(".error_description").html(data.description);
                        // $(".error_lang").html(data.lang);
                        // $('.loadingc').css("display", "none");
                    }

                }
            });
        }
    });
</script>