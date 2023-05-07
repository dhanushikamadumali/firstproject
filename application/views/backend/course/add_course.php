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

                            <?= form_open_multipart("",array("id"=>"add_course"))?>
                                <div class="row">
                                    
                                      <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Image</label>
                                            <input class="form-control image" type="file" id="formFile" name="image">
                                            <span style="color: red;font-size: 13px" class="error_image"></span>
                                        </div>
                                    </div> 

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Title</label>
                                                    <input class="form-control form-control-lg" type="text" name="title" placeholder="Enter title">
                                                    <span style="color: red;font-size: 13px" class="error_title"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Description</label>
                                                    <input class="form-control form-control-lg" type="text" name="description" placeholder="Enter description">
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
                                                 ?> <option value="<?php echo $language->id?>">
                                                     <?php echo $language->language?>
                                                 </option> 
                                                 <?php
                                             endforeach;

                                             ?>
                                         </select>
                                         <span style="color: red;font-size: 13px" class="error_language"></span>
                                     </div>
                                 </div>
                           
                                    <!-- <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Language</label>
                                                    <input class="form-control form-control-lg" type="text" name="lang" placeholder="Enter language">
                                                    <span style="color: red;font-size: 13px" class="error_lang"></span>
                                         </div>
                                    </div> -->
<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
 
 <div class="col-md-12 module_section">
 <div class="row module_row">

    <div class="col-md-12">
        <label>Title</label  >
        <input type="hidden" class="rowid" value="1">
        <input type="text" class="form-control form-control-lg module_title1" name="module_title1" >
    </div>

    <div class="col-md-12">
        <label>Description</label>
        <textarea type="text" class="form-control form-control-lg module_description1" name="module_description1" id="module_description1" ></textarea>
       
    </div>
    

    <div class="col-md-11">
        <label>Youtube Link</label>
        <input type="text" class="form-control form-control-lg module_ylink1" name="module_ylink1" >
    </div>

    <div class="col-md-1" style="padding-top:30px;">
        <button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>
    </div>

 </div>
 </div>


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
    CKEDITOR.replace( 'module_description1' );
</script>
<script>
    let modulerow=1;
    $(".add_module_row").click(function(e){
        modulerow=modulerow+1;

        e.preventDefault();
        $(".module_section").append('<div class="row module_row">\n\
        <div class="col-md-12">\n\
        <label>Title</label><input type="hidden" class="rowid" value="'+modulerow+'">\n\
        <input type="text" class="form-control form-control-lg module_title'+modulerow+'" name="module_title'+modulerow+'" >\n\
        </div>   \n\
        <div class="col-md-12">\n\
        <label>Description</label><textarea type="text" class="form-control form-control-lg module_description'+modulerow+'"  name="module_description'+modulerow+'" id="module_description'+modulerow+'"  ></textarea></div>\n\
         <div class="col-md-11"><label>Youtube Link</label><input type="text" class="form-control form-control-lg module_ylink'+modulerow+'" name="module_ylink'+modulerow+'" ></div>    <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button></div> </div>');
 
       CKEDITOR.replace("module_description"+modulerow);
      
      
    

    });

   
</script>



                                   <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-lg btn-primary " id="save-course">Add Course</button>
                                        </div>
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

$("body").on('click',".remove_module_row",function(){
     $(this).parent().parent().remove();
})   


$("#save-course").click(function (e) {
        e.preventDefault();
        $form = $('#add_course');
        add_course($form);

        function add_course($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'add_course');
          
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
                url: '<?php echo base_url(); ?>index.php/course/func_add_course',
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



