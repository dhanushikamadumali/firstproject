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

                            <form id="add_course_module">
                                <!-- <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Course</label>
                                            <?php $course = $this->Common_model->get_all("course") ?>
                                            <select  class="form-control form-control-lg" name="course">
                                                <?php
                                                //foreach ($course as $course):
                                                    ?> <option value="<?php echo $course->id ?>">
                                                        <?php echo $course->title ?>
                                                    </option> 
                                                    <?php
                                                //endforeach;
                                                ?>
                                            </select>
                                            <span style="color: red;font-size: 13px" class="error_course"></span>
                                        </div>
                                    </div>
                                </div> -->


                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Select Course</label>
                                            <?php
                                            $courses = $this->Common_model->get_all("course")->result();
                                            foreach ($courses as $course):
                                                ?> 
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-<?php echo $course->id ?>" name="course[]" value="<?php echo $course->id ?>">
                                                    <label for="check-<?php echo $course->id ?>">
                                                        <span class="checkbox-text">
                                                            <?php echo $course->title ?>

                                                        </span>
                                                    </label>
                                                </div>
                                                
                                                <?php
                                            endforeach;
                                            ?>
                                            <span style="color: red;font-size: 13px" class="error_course"></span>
                                        </div>
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
                                    <div class="form-group mb-0">
                                        <button  class="btn btn-lg btn-primary btn-submit" id="save-course">Add Course Module</button>
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
    $("#save-course").click(function (e) {
        $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#add_course_module');
        add_course_module($form);

        function add_course_module($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'add_course_module');

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/course_module/func_add_course_module',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    //$(".error_membert").html("");
                    $(".error_course[]").html("");
                    $(".error_title").html("");
                    $(".error_description").html("");

                    if (data['status'] == "true") {


                        setTimeout(function () {
                            $('.loadingc').css("display", "none");
                            $(".succmod").fadeIn(2000);
                            $(".succmod").fadeOut(2000);
                            window.location = "<?php echo base_url() ?>index.php"
                        }, 5000);

                    } else {

                        //$(".error_member").html(data.member);
                        $(".error_course[]").html(data.course);
                        $(".error_title").html(data.title);
                        $(".error_description").html(data.description);

                        $('.loadingc').css("display", "none");
                    }

                }
            });
        }
    });
</script>