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
                            <h6>User Permission</h6>
                        </div>
                        <div class="card-body py-md-25">

                           <form id="user_permission">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Select User Type</label>
                                            <?php $user = $this->Common_model->get_all("system_user_type")->result(); ?>
                                            <select  class="form-control form-control-lg" name="user">
                                                <?php
                                                foreach ($user as $user):
                                                    ?> <option value="<?php echo $user->id ?>">
                                                        <?php echo $user->name ?>
                                                    </option> 
                                                    <?php
                                                endforeach;
                                                ?>
                                            </select>
                                            <span style="color: red;font-size: 13px" class="error_user"></span>
                                        </div>
                                    </div>
                                </div>
                                 
                                
                               <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Select Features</label>
                                            <?php
                                            $feature = $this->Common_model->get_all("system_feature")->result();
                                            foreach ($feature as $feature):
                                                ?> 
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-<?php echo $feature->id ?>" name="feature[]" value="<?php echo $feature->id ?>">
                                                    <label for="check-<?php echo $feature->id ?>">
                                                        <span class="checkbox-text">
                                                            <?php echo $feature->name ?>

                                                        </span>
                                                    </label>
                                                </div>
                                                
                                                <?php
                                            endforeach;
                                            ?>
                                            <span style="color: red;font-size: 13px" class="error_feature"></span>
                                        </div>
                                    </div>
                                </div>
                                
                               <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label>Prefix</label>
                                            <?php $prefix=$this->Common_model->get_all("system_user_type")->result();?>
                                            <select  class="form-control form-control-lg" name="prefix">
                                                <?php 
                                                foreach($prefix as $prefix):
                                                 ?> <option value="<?php echo $prefix->id?>">
                                                     <?php echo $prefix->prefix?>
                                                 </option> 
                                                 <?php
                                             endforeach;

                                             ?>
                                         </select>
                                         <span style="color: red;font-size: 13px" class="error_prefix"></span>
                                     </div>
                                 </div>
                                                      

                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <button  class="btn btn-lg btn-primary btn-submit" id="submit">Submit</button>
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
    $("#submit").click(function (e) {
        $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#user_permission');
        user_permission($form);

        function user_permission($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'user_permission');

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/user_permission/func_user_permission',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                  $(".error_user").html("");
                    $(".error_feature").html("");
                    $(".error_prefix").html("");                  
                   
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
                        $(".error_user").html(data.user);
                        $(".error_feature").html(data.feature);
                        $(".error_prefix").html(data.prefix);
                                              
                        $('.loadingc').css("display", "none");
                    }

                }
            });
        }
    });
</script>