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
                            <h6>Add Course Module</h6>
                        </div>
                        <div class="card-body py-md-25">

                             <?php
                                    $wheredet = array("id" => $_GET["id"]);
                                    $coursemdetails = $this->Common_model->get_all("course_module", $wheredet)->result();
                                foreach ($coursemdetails as $row) :
                                       var_dump($row)

                                    ?>

                            <form id="update_course_module">
                                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $coursemdetails[0]->id ?>">
                                <div class="row">                                    

                            <div class="col-md-12 module_section">
                                 <div class="row">
                                    <div class="col-md-12">
                                        <label>Title</label>
                                        <input type="text" class="form-control form-control-lg" name="module_title[]" value="<?php echo $coursemdetails[0]->title ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Description</label>
                                        <textarea type="text" class="form-control form-control-lg" name="module_description[]" value="<?php echo $coursemdetails[0]->description ?>"></textarea>
                                    </div>
                                    <div class="col-md-11">
                                        <label>Youtube Link</label>
                                        <input type="text" class="form-control form-control-lg" name="module_ylink[]" value="<?php echo $coursemdetails[0]->youtube_link ?>">
                                    </div>
                                    <div class="col-md-1" style="padding-top:30px;">
                                        <button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>
                                    </div>
                                 </div>
                     <?php
                        endforeach;
                     ?>

                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="col-md-11"></div>
                                    <div class="col-md-1">
                                        <br>
                                        <br>
                                         <button type="button" class="btn btn-md btn-primary btn-submit add_module_row" style="height: 30px;padding:0 10px;line-height:10px">+</button>
                                    </div>
                                    </div>
                                    
                                 </div>

          
            <script>
                $(".update_module_row").click(function(e){
                    e.preventDefault();
            $(".module_section").append('<div class="row">    <div class="col-md-12"><label>Title</label><input type="text" class="form-control form-control-lg" name="module_title[]" value="<?php echo $coursemdetails[0]->title ?>"></div>   <div class="col-md-12"><label>Description</label><textarea type="text" class="form-control form-control-lg"  name="module_description[]" value="<?php echo $coursemdetails[0]->descriptin ?>"></textarea></div>   <div class="col-md-11"><label>Youtube Link</label><input type="text" class="form-control form-control-lg" name="module_ylink[]" value="<?php echo $coursemdetails[0]->youtube_link ?>"></div>    <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button></div> </div>');
                });
            </script>

                                                                                                            
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="update-course-module">Update Course Module</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
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
    $("#update-course-module").click(function (e) {
        $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#update_course_module');
        update_course_module($form);

        function update_course_module($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'update_course_module');

            // $.ajax({
            //     type: 'post',
            //     dataType: "JSON",
            //     url: '<?php echo base_url(); ?>index.php/course/func_update_course',
            //     data: formdata,
            //     cache: false,
            //     contentType: false,
            //     processData: false,
            //     success: function (data) {
            //         $(".error_image").html("");
            //         $(".error_title").html("");
            //         $(".error_description").html("");
            //         $(".error_lang").html("");
                                  
                     if (data['status'] == "true") {


                         setTimeout(function () {
                             $('.loadingc').css("display", "none");
                             $(".succmod").fadeIn(2000);
                             $(".succmod").fadeOut(2000);
                             window.location = "<?php echo base_url() ?>index.php"
                         }, 5000);

                     }
             //else {

            //             // var div = document.createElement("div");
            //             // div.innerHTML = ;
            //             $(".error_image").html(data.image);
            //             $(".error_title").html(data.title);
            //             $(".error_description").html(data.description);
            //             $(".error_lang").html(data.lang);
            //             $('.loadingc').css("display", "none");
            //         }

            //     }
            // });
        }
    });
</script> 