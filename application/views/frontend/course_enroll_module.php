

<body>

<main class="main-wrapper">

<?php $this->load->view("frontend/template/headermenu")?>
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-11">
        <div class="page-banner__wrapper">
            <div class="container">
            <?php
            if ($this->input->get('id')):
                $course=$this->Common_model->get_all("course_module",array('id' => $this->input->get('id')))->result();
                if ($course !=NULL):

                                
            ?>
                <!-- Page Breadcrumb Start -->
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/frontend/course">courses</a></li>
                        <li class="breadcrumb-item active"><?php echo ($course[0]->title)?></li>
                    </ul>
                </div>
                <!-- Page Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/mobile-bg.jpg);">
        <div class="offcanvas-header bg-white">
            <div class="offcanvas-logo">
                <a class="offcanvas-logo__logo" href="#"><img src="<?php echo base_url(); ?>assets/images/dark-logo.png" alt="Logo"></a>
            </div>
            <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
        </div>

        <div class="offcanvas-body">
            <nav class="canvas-menu">
                <ul class="offcanvas-menu">
                    <li><a class="active" href="<?php echo base_url(); ?>index.php"><span>Home</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/frontend/course"><span>Courses</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Offcanvas End -->
   
    <!-- Tutor Course Top Info Start -->
    <div class="tutor-course-top-info section-padding-01 bg-color-11">
        <div class="container custom-container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- Tutor Course Top Info Start -->
                    <div class="tutor-course-top-info__content">
                        <div class="tutor-course-top-info__badges">
                            <span class="onsale">-39%</span>
                            <a class="badges-category" href="#">Data Modeling</a>
                        </div>
                        <h1 class="tutor-course-top-info__title" style="text-transform: capitalize;font-size: 27px"><?php echo ($course[0]->title)?></h1>
                        <!-- <div class="tutor-course-top-info__meta">
                               
                            <div class="tutor-course-top-info__meta-update">Last Update <?php echo DATE($course[0]->date)?></div>
                        </div> -->
                        <div class="tutor-course-top-info__meta">
                            <div class="tutor-course-top-info__meta-rating">

                                <div class="rating-average"><strong>4.38</strong> /5</div>
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 90%;"></div>
                                </div>
                                <div class="rating-count">(8)</div>

                            </div>
                            <!-- <div class="tutor-course-top-info__meta-action"><i class="meta-icon far fa-user-alt"></i> 0 already enrolled</div> -->
                        </div>
                    </div>
                    <!-- Tutor Course Top Info End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Tutor Course Top Info End -->

    <!-- Tutor Course Main content Start -->
    <div class="tutor-course-main-content sticky-parent">
        <div class="container custom-container">

            <div class="row gy-10">
                <div class="col-lg-8">

                    <!-- Tutor Course Main Segment Start -->
                    <div class="tutor-course-main-segment">
                        <!-- Tutor Course Segment Start -->
                        <div class="tutor-course-segment">
                            <h4 class="tutor-course-segment__title" style="margin-top: 20px">About This Course Module</h4>
                            <!-- Tutor Course Segment Content Wrapper Start -->
                            <div class="tutor-course-segment__content-wrap" style="text-align: justify;">
                                <p ><?php echo ($course[0]->description)?></p>
                               
                            </div>
                            <!-- Tutor Course Segment Content Wrapper End -->
                        </div>
                        <!-- Tutor Course Segment End -->
                        <!-- Tutor Course Segment Start -->
                        <div class="tutor-course-segment">
                            <h4 class="tutor-course-segment__title">Student Feedback</h4>

                            <div class="tutor-course-segment__feedback">
                                <div class="tutor-course-segment__reviews-average">
                                    <div class="count">4.4</div>
                                    <div class="reviews-rating-star">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="rating-total">8 Ratings</div>
                                </div>
                                <div class="tutor-course-segment__reviews-metar">

                                    <div class="course-rating-metar">
                                        <div class="rating-metar-star">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-col">
                                            <div class="rating-metar-bar">
                                                <div class="rating-metar-line" style="width: 75%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-text">75%</div>
                                    </div>

                                    <div class="course-rating-metar">
                                        <div class="rating-metar-star">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-col">
                                            <div class="rating-metar-bar">
                                                <div class="rating-metar-line" style="width: 13%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-text">13%</div>
                                    </div>

                                    <div class="course-rating-metar">
                                        <div class="rating-metar-star">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-col">
                                            <div class="rating-metar-bar">
                                                <div class="rating-metar-line" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-text">0%</div>
                                    </div>

                                    <div class="course-rating-metar">
                                        <div class="rating-metar-star">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-col">
                                            <div class="rating-metar-bar">
                                                <div class="rating-metar-line" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-text">0%</div>
                                    </div>

                                    <div class="course-rating-metar">
                                        <div class="rating-metar-star">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 20%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-col">
                                            <div class="rating-metar-bar">
                                                <div class="rating-metar-line" style="width: 13%;"></div>
                                            </div>
                                        </div>
                                        <div class="rating-metar-text">13%</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tutor Course Segment End -->

                        <!-- Tutor Course Segment Start -->
                        <div class="tutor-course-segment">
                            <h4 class="tutor-course-segment__title">Reviews <span class="count">(3)</span></h4>

                            <div class="tutor-course-segment__review-commnet">
                                <ul class="comment-list-02">
                                    <li>
                                        <div class="comment-item-02">
                                            <div class="comment-item-02__header">
                                                <div class="comment-item-02__author">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-04.jpg" alt="Avatar" width="52" height="52">
                                                </div>
                                                <div class="comment-item-02__info">
                                                    <h6 class="comment-item-02__name"><a href="#">Adeniyi David</a></h6>
                                                    <p class="comment-item-02__date">2 weeks ago</p>
                                                </div>
                                            </div>
                                            <div class="comment-item-02__body">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <p>el mejor de la historia</p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tutor Course Segment End -->

                    </div>
                    <!-- Tutor Course Main Segment End -->

                </div>
                <div class="col-lg-4">

                    <div class="sidebar-sticky">
                        <!-- Tutor Course Sidebar Start -->
                        <div class="tutor-course-sidebar">

                            <!-- Tutor Course Price Preview Start -->
                            <div class="tutor-course-price-preview">
                                <div class="tutor-course-price-preview__thumbnail">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/tXr3wCyBE9I" title="YouTube video" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tutor-course-price-preview__price">
                                    <div class="tutor-course-price">
                                        <!-- <span class="sale-price">$46<span class="separator">.00</span></span> -->
                                        <!-- <span class="regular-price">$76<span class="separator">.00</span></span> -->
                                    </div>
                                    <!-- <div class="tutor-course-price-badge">39% off</div> -->
                                </div>
                                <div class="tutor-course-price-preview__meta">
                                    <ul class="tutor-course-meta-list">
                                        <li>
                                            <div class="label"><i class="far fa-sliders-h"></i> Level </div>
                                            <div class="value">Beginner</div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-clock"></i> Duration </div>
                                            <div class="value">15.3 hours</div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-play-circle"></i> Lectures </div>
                                            <div class="value">4 lectures</div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-tag"></i> Subject </div>
                                            <div class="value"><a href="#">Data Modeling</a></div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-globe"></i> Language </div>
                                            <div class="value">Russian</div>
                                        </li>
                                    </ul>
                                </div>
                                   
                                <div class="tutor-course-price-preview__btn">
                                    <!-- <button class="btn btn-primary btn-hover-secondary w-100"> <i class="far fa-shopping-cart"></i> Add to cart </button> -->
                                    <!-- <a href="#" class="btn btn-light btn-hover-primary w-100">Add to wishlist</a> -->
                                </div>
                                   
                            </div>
                            <!-- Tutor Course Price Preview End -->

                            <!-- Sidebar Widget Start -->
                               
                            <!-- Sidebar Widget End -->

                            <!-- Sidebar Widget Start -->
                               
                            <!-- Sidebar Widget End -->

                        </div>
                        <!-- Tutor Course Sidebar End -->
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Tutor Course Main content End -->
    <?php
         endif;
    endif;
    ?>

<?php $this->load->view("frontend/template/footermenu")?>


</main>




<script type="text/javascript">
    function course_entroll(e,a) {
    swal({
        title: "course enroll?",
        text: "Are you sure you want to course enroll now !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/Frontend/add_course_details",
            type: "post",
          dataType:"json",
            data: {
            "courseid": e,
            "memberid":a
            }, 
            
            success: function(data){
                // console.log(data.courseid);

                // window.open("<?php echo base_url() ?>index.php/frontend/course_enroll_module?id=" + data.courseid, '_blank'); 
                // window.location.reload();
                
                
                    setTimeout(function(){window.location.reload();});
            
            }
        });
    } 
    });  
      
  
    // var url ="../controller/PosController.php?status=getproductDetails";
    // var ProductId = e;
    // var sizeId = a;


       }

      

    //    $("body").on("click",".course_enroll_login",function(){
     
    //     alert()
    //     swal({
    //     title: "course enroll",
    //     text: "you should login for course enroll !",
    //     icon: "warning",
    //     buttons: true,
    //     dangerMode: true,
    //     })
    //     .then((willDelete) => {
    //     if (willDelete) {
    //         $.ajax({
    //             url: "<?php echo base_url(); ?>index.php/frontend/login",
    //             // type:'POST',
    //             // data: {
    //             // "uid": $(this).val(),
    //             // "func_n":"activeuser"
    //             // }, 
    //             // success: function(data){
               
              
    //             //         setTimeout(function(){window.location.reload();});
         
    //             // }
    //         });
    //     } 
    //     });  
    // });

</script>


