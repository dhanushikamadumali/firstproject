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
                            <h6>Add User Type</h6>
                        </div>
                        <div class="card-body py-md-25">

                            <form id="add_type">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Name</label>
                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter Name">
                                                    <span style="color: red;font-size: 13px" class="error_name"></span>
                                                </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                                    <label>Prefix</label>
                                                    <input class="form-control form-control-lg" type="text" name="prefix" placeholder="Enter prefix">
                                                    <span style="color: red;font-size: 13px" class="error_prefix"></span>
                                                </div>
                                    </div>

                                   
                                     
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button  class="btn btn-lg btn-primary btn-submit" id="save-type">Add Type</button>
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
                        
 </div>
</div>
            <!-- ends: .atbd-page-content -->
</div>
            
<script  type="text/javascript">
    $("#save-type").click(function (e) {
        $('.loadingc').css("display", "block");
        e.preventDefault();
        $form = $('#add_type');
        add_type($form);

        function add_type($form) {
            var formdata = new FormData($form[0]);
            formdata.append('form_name', 'add_type');

            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/user_type/func_add_user_type',
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(".error_name").html("");
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
                        $(".error_name").html(data.name);
                        $(".error_prefix").html(data.prefix);
                                  
                        $('.loadingc').css("display", "none");
                    }

                }
            });
        }
    });
</script>