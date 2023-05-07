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
                                    $coursedetails = $this->Common_model->get_all("course", $wheredet)->result();
                                    if($coursedetails != ""):
                                    ?>
                                    

                            <?= form_open_multipart("",array("id"=>"update_course"))?>
                                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $coursedetails[0]->id ?>">
                                <div class="row">
                                    
                                     <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                            <span style="color: red;font-size: 13px" class="error_image"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Title</label>
                                                    <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter title" value="<?php echo $coursedetails[0]->title ?>">
                                                    <span style="color: red;font-size: 13px" class="error_title"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Description</label>
                                                    <input class="form-control form-control-lg" type="text" name="description" placeholder="Enter description" value="<?php echo $coursedetails[0]->description ?>">
                                                    <span style="color: red;font-size: 13px" class="error_description"></span>
                                        </div>
                                    </div>

                                  
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Language</label>
                                            <?php $language=$this->Common_model->get_all("language")->result();?>
                                            <select  class="form-control form-control-lg" name="language">
                                                <?php 
                                                foreach($language as $language):
                                                 ?> <option value="<?php echo $language->id?>" <?php echo ($language->id==$coursedetails[0]->lang)?"selected":NULL?>>
                                                     <?php echo $language->language?>
                                                 </option> 
                                                 <?php
                                             endforeach;

                                             ?>
                                         </select>
                                         <span style="color: red;font-size: 13px" class="error_language"></span>
                                     </div>
                                 </div>

                                    <?php
                                        endif;
                                    ?>
                                    <!-- CKEDITOR -->
                                    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                                    <?php
                     

                                    $courseid = array("course_id" => $_GET["id"]);
                                    $coursemdetails = $this->Common_model->get_all("course_module",  $courseid)->result();
                                  
                                    if($coursemdetails !=""):
                                          // var_dump($coursemdetails);
                                          $modulerow=1;
                                          foreach ($coursemdetails as $row) :
                                       // var_dump($row)

                                       $modulerow=$modulerow+1;
                                    

                                      
                                    ?>             
                                <div class="col-md-12 module_section">
                                 <div class="row">
                                    <!-- <input type="hidden" name="c_id[]" value="<?php echo $row->course_id?>"> -->
                                     <!-- <input type="hidden" name="cm_id[]" value="<?php echo $row->id?>"> -->
                                     <div class="col-md-12">
                                        <label>Title</label>
                                        <input type="hidden" class="rowid" value="<?php echo $modulerow ?>">
                                        <input type="text" class="form-control form-control-lg module_title<?php echo $modulerow ?>" name="module_title<?php echo $modulerow ?>" value="<?php echo  $row->title ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Description</label>
                                        <textarea   
                                        type="text" class="form-control form-control-lg" name="module_description<?php echo $modulerow ?>" value="<?php echo $row->description ?>"><?php echo $row->description ?> </textarea>
                                        <script>
                                            CKEDITOR.replace("module_description"+<?php echo $modulerow ?>);
                                        </script>
                                    </div>
                                    <div class="col-md-11">
                                        <label>Youtube Link</label>
                                        <input type="text" class="form-control form-control-lg" name="module_ylink<?php echo $modulerow ?>" value="<?php echo $row->youtube_link ?>">
                                    </div>

                                    <div class="col-md-1" style="padding-top:30px;">
                                        <button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>
                                    </div>
                                 </div>

                                </div>
                            <?php
                        endforeach;
                           
                        endif;
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

          
           


                                                                                                            
                                    <div class="col-md-6">
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
    $("body").on('click',".remove_module_row",function(){
        $(this).parent().parent().remove();
    })  
    let newmodulerow=<?php echo count( $coursemdetails)+1 ?>;
    $(".add_module_row").click(function(e){
        newmodulerow=newmodulerow+1;
            e.preventDefault();
            $(".module_section").append('<div class="row module_row">\n\
            <div class="col-md-12">\n\
            <label>Title</label><input type="hidden" class="rowid" value="'+newmodulerow+'">\n\
            <input type="text" class="form-control form-control-lg module_title'+newmodulerow+'" name="module_title'+newmodulerow+'" >\n\
            </div>\n\
            <div class="col-md-12">\n\
            <label>Description</label><textarea type="text" class="form-control form-control-lg module_description'+newmodulerow+'"  name="module_description'+newmodulerow+'" id="module_description'+newmodulerow+'"  ></textarea></div>\n\
            <div class="col-md-11"><label>Youtube Link</label><input type="text" class="form-control form-control-lg module_ylink'+newmodulerow+'" name="module_ylink'+newmodulerow+'" ></div>    <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button></div> </div>');
 
           CKEDITOR.replace("module_description"+newmodulerow);
          // CKEDITOR.replace("module_description14");
    });
          
    $("#update-course").click(function (e) {
        e.preventDefault();
        $form = $('#update_course');
        add_course($form);

        function add_course($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'update_course');
          
            const arr_module = new Array();
            $(".rowid").each(function () { 
            
                var rid=$(this).val();
              
                
                var mtitle = $(".module_title"+rid).val();
                var description =  CKEDITOR.instances['module_description'+rid].getData();
                var ylink = $(".module_ylink"+rid).val();
              
               modulerow = {"mtitle":mtitle,"description": description, "ylink": ylink};
              
               arr_module.push( modulerow);
            });
            
           formdata.append('moduledescrib',  JSON.stringify(arr_module));
        console.log(arr_module);

        //    

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/course/func_update_course',
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