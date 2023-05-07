<body>
<div class="slider-section">
    <div class="slider-wrapper scene">
        <div class="container">
            <div class="row align-items-center gy-10">
                <div class="col-md-6">
                    <!-- Slider Widget Start -->
                    <div class="slider-widget" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Slider Caption Start -->
                        <div class="slider-caption">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <h2 class="about-content-02__main-title" data-aos="fade-up" data-aos-duration="1000">LOGIN</h2> 
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                        </div>
                        </div>
                       
                        <div class="slider-search">
                            <div class="row">
                            <?php echo form_open('', 'id="loginmember" '); ?>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <div class="countdown-register__form">
                                        <div class="countdown-register__input">
                                            <!-- <i class="far fa-envelope"></i> -->
                                            <input type="email" class="form-control  slider-search__field " name="email" placeholder="Email">
                                            <span style="color: red;font-size: 13px" class="error_email"></span>
                                        </div>
                                        <div class="countdown-register__input">
                                            <input type="password" name="password" class="form-control slider-search__field" placeholder="Password">
                                            <span style="color: red;font-size: 13px" class="error_password"></span> 
                                        </div>
                                        <div class="countdown-register__btn">
                                            <button type="submit" class="btn btn-primary btn-hover-secondary w-100" id="submit-stu">Login</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                </div>
                                <?php echo form_close(); ?>

                              
                            </div>
                        </div>
                        <!-- Slider Search End -->
                    </div>
                    <!-- Slider Widget End -->

                </div>
                <div class="col-md-6">

                    <!-- Slider Image Start -->
                    <div class="slider-image">
                        <div class="slider-image__image text-center text-lg-end" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/home-01-hero-image.png" alt="Hero Image" width="599" height="480">
                        </div>

                        <div class="slider-image-widget" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="slider-image-widget__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 53">
                                    <g fill-rule="nonzero">
                                        <path d="M46.2977393,23.4211436 C45.3957447,23.4211436 44.6636968,22.6890957 44.6636968,21.787101 C44.6636968,15.5297872 42.2281915,9.64946809 37.8051861,5.22446809 C37.1668883,4.58617021 37.1668883,3.55132984 37.8051861,2.91303197 C38.443484,2.27473409 39.4783245,2.27473409 40.1170213,2.91303197 C45.156383,7.95438832 47.9317819,14.6585106 47.9317819,21.787101 C47.9317819,22.6890957 47.199734,23.4211436 46.2977393,23.4211436 L46.2977393,23.4211436 Z"></path>
                                        <path d="M1.63404255,23.4211436 C0.732047898,23.4211436 0,22.6890957 0,21.787101 C0,14.6585106 2.77579792,7.95438832 7.81715428,2.91502662 C8.45545215,2.27672875 9.49069154,2.27672875 10.1289894,2.91502662 C10.7672873,3.55332449 10.7672873,4.58856388 10.1289894,5.22686175 C5.70398931,9.64946809 3.26808511,15.5297872 3.26808511,21.787101 C3.26808511,22.6890957 2.53603721,23.4211436 1.63404255,23.4211436 Z"></path>
                                        <path d="M23.9660905,52.2893617 C19.4605053,52.2893617 15.7958777,48.6247341 15.7958777,44.1191489 C15.7958777,43.2171543 16.5279256,42.4851064 17.4299202,42.4851064 C18.3319149,42.4851064 19.0639628,43.2171543 19.0639628,44.1191489 C19.0639628,46.8231382 21.262101,49.0212766 23.9660905,49.0212766 C26.6696809,49.0212766 28.8682181,46.8231382 28.8682181,44.1191489 C28.8682181,43.2171543 29.600266,42.4851064 30.5022607,42.4851064 C31.4042553,42.4851064 32.1363032,43.2171543 32.1363032,44.1191489 C32.1363032,48.6247341 28.4716755,52.2893617 23.9660905,52.2893617 L23.9660905,52.2893617 Z"></path>
                                        <path d="M41.9405585,45.7531915 L5.99162237,45.7531915 C3.88882979,45.7531915 2.1785904,44.0429521 2.1785904,41.9405585 C2.1785904,40.8247341 2.66449471,39.7683511 3.51223404,39.0426862 C6.82579792,36.2429521 8.71476061,32.1734043 8.71476061,27.8617021 L8.71476061,21.787101 C8.71476061,13.3775266 15.556117,6.53617021 23.9660905,6.53617021 C32.3756649,6.53617021 39.2170213,13.3775266 39.2170213,21.787101 L39.2170213,27.8617021 C39.2170213,32.1734043 41.1059841,36.2429521 44.3980053,39.0275266 C45.2672873,39.7683511 45.7531915,40.8247341 45.7531915,41.9405585 C45.7531915,44.0429521 44.0429521,45.7531915 41.9405585,45.7531915 Z M23.9660905,9.80425532 C17.3577128,9.80425532 11.9828457,15.1791223 11.9828457,21.787101 L11.9828457,27.8617021 C11.9828457,33.1360372 9.6714096,38.1167553 5.6429521,41.5220744 C5.56675527,41.5875001 5.44667551,41.7227393 5.44667551,41.9405585 C5.44667551,42.2365691 5.69521277,42.4851064 5.99162237,42.4851064 L41.9405585,42.4851064 C42.2365691,42.4851064 42.4851064,42.2365691 42.4851064,41.9405585 C42.4851064,41.7227393 42.3654255,41.5875001 42.2932181,41.5264627 C38.2603723,38.1167553 35.9489362,33.1360372 35.9489362,27.8617021 L35.9489362,21.787101 C35.9489362,15.1791223 30.5740692,9.80425532 23.9660905,9.80425532 Z"></path>
                                        <path d="M23.9660905,9.80425532 C23.0640958,9.80425532 22.3320479,9.07220742 22.3320479,8.17021277 L22.3320479,1.63404255 C22.3320479,0.732047898 23.0640958,0 23.9660905,0 C24.8680851,0 25.600133,0.732047898 25.600133,1.63404255 L25.600133,8.17021277 C25.600133,9.07220742 24.8680851,9.80425532 23.9660905,9.80425532 Z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="slider-image-widget__caption">
                                <h4 class="slider-image-widget__title">Hi Welcome <strong>"Today is a Nice Day!</strong></h4>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Image End -->

                </div>
            </div>
        </div>

        <img class="slider-section__shape-01" data-depth="0.8" src="<?php echo base_url(); ?>assets/frontend/images/shape/edumall-shape-grid-dots.png" alt="Shape" width="417" height="371">
        <div class="slider-section__shape-02" data-depth="-1"></div>
        <div class="slider-section__shape-03" data-depth="1.6"></div>
        <img class="slider-section__shape-04" data-depth="-0.6" src="<?php echo base_url(); ?>assets/frontend/images/shape/edumall-shape-01.png" alt="Shape" width="179" height="178">

    </div>
</div>
<!-- Slider Section End -->
    

  
<!-- Activation JS -->
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
<script type="text/javascript">

 $("#submit-stu").click(function(e) {
   
  e.preventDefault(); 
  $form = $('#loginmember');
  login_stu($form);

  function login_stu($form) {
    var formdata = new FormData($form[0]);
    formdata.append('form_name', 'loginmember');

        $.ajax({
        type: 'post',
        dataType: "JSON",
        url: '<?php echo base_url()?>index.php/Frontend/member_validation',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
              

            $(".error").html("");
                if(data.status==false){
                    $(".error_email").html(data.email);
                    $(".error_password").html(data.password);
                    notification_message("error","Error Occurred ! Please Check the fields.");
                        $.each(data.errors, function(key,val) {
                            $(".error_"+key).html(val);
                        });
                }else{
                    
                    // notification_message("info", "User Login Successfully!!");
                    setTimeout(function(){ window.location.href="<?php echo base_url()?>index.php";  });
                }
            }//data
            });//ajax
        }//function add student
    });//function e
</script>




<!-- sweetalert -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/sweetalert.js"></script>

<!-- Vendors JS -->
<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Plugins JS -->
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/parallax.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.powertip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/nice-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.sticky-kit.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/flatpickr.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/range-slider.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/plugins/select2.min.js"></script>




</body>


<!-- Mirrored from htmldemo.net/edumall/edumall/index-single-instructor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 04:27:23 GMT -->
</html>