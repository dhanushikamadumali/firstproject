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
                                            <input class="form-control" type="file" id="formFile">
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

 
 <div class="col-md-12 module_section">
 <div class="row">

    <div class="col-md-12">
        <label>Title</label
        ><input type="text" class="form-control form-control-lg" name="module_title[]">
    </div>

    <div class="col-md-12">
        <label>Description</label>
        <textarea type="text" class="form-control form-control-lg" name="module_description[]"></textarea>
    </div>

    <div class="col-md-11">
        <label>Youtube Link</label>
        <input type="text" class="form-control form-control-lg" name="module_ylink[]">
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
    $(".add_module_row").click(function(e){
        e.preventDefault();
$(".module_section").append('<div class="row">    <div class="col-md-12"><label>Title</label><input type="text" class="form-control form-control-lg" name="module_title[]"></div>   <div class="col-md-12"><label>Description</label><textarea type="text" class="form-control form-control-lg"  name="module_description[]"></textarea></div>   <div class="col-md-11"><label>Youtube Link</label><input type="text" class="form-control form-control-lg" name="module_ylink[]"></div>    <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button></div> </div>');
    });
</script>



                                   <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="save-course">Add Course</button>
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

        alert()
        $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#add_course');
        add_course($form);

        function add_course($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'add_course');

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/course/func_add_course',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(".error_image").html("");
                    $(".error_title").html("");
                    $(".error_description").html("");
                    $(".error_lang").html("");
                   

                    if (data['status'] == "true") {


                        setTimeout(function () {
                            $('.loadingc').css("display", "none");
                            $(".succmod").fadeIn(2000);
                            $(".succmod").fadeOut(2000);
                            window.location = "<?php echo base_url() ?>index.php"
                        }, 5000);

                    } else {

                        // var div = document.createElement("div");
                        // div.innerHTML = ;
                        $(".error_image").html(data.image);
                        $(".error_title").html(data.title);
                        $(".error_description").html(data.description);
                        $(".error_lang").html(data.lang);
                        $('.loadingc').css("display", "none");
                    }

                }
            });
        }
    });
</script>