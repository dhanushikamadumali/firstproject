<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/dashboard-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 04:31:13 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS & e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontend/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-3.6.0.min.js"></script>
  
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/vendor/edumall-icon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins/select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">

</head>

<body class="dashboard-page dashboard-nav-fixed">

    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <div class="dashboard-nav__wrapper">
            <!-- Dashboard Nav Header Start -->
            <div class="offcanvas-header dashboard-nav__header dashboard-nav-header">

                <div class="dashboard-nav__toggle d-xl-none">
                    <button class="toggle-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
                </div>

                <div class="dashboard-nav__logo">
                    <a class="logo" href=""><img src="<?php echo base_url() ?>assets/images/dark-logo.png" alt="Logo" width="148" height="62"></a>
                </div>

            </div>
            <!-- Dashboard Nav Header End -->

            <!-- Dashboard Nav Content Start -->
            <div class="offcanvas-body dashboard-nav__content navScroll">

                <!-- Dashboard Nav Menu Start -->
                <div class="dashboard-nav__menu">
                    <ul class="dashboard-nav__menu-list">
                        <li >
                            <a href="<?php echo base_url()   ?>index.php/frontend/microfile">
                                <i class="edumi edumi-layers"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()   ?>index.php/frontend/microprofile">
                                <i class="edumi edumi-follower"></i>
                                <span class="text">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()   ?>index.php/frontend/microcourseenroll">
                                <i class="edumi edumi-open-book"></i>
                                <span class="text">Enrolled Courses</span>
                            </a>
                        </li>
                       
                       
                       
                    </ul>
                    <!-- <ul class="dashboard-nav__menu-list"> -->
                        <!-- <li>
                            <span class="dashboard-nav__title">Instructor</span>
                        </li>
                        <li>
                            <a href="dashboard-my-courses.html">
                                <i class="edumi edumi-youtuber"></i>
                                <span class="text">My Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-announcement.html">
                                <i class="edumi edumi-announcement"></i>
                                <span class="text">Announcements</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-withdraw.html">
                                <i class="edumi edumi-wallet"></i>
                                <span class="text">Withdrawals</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-quiz-attempts.html">
                                <i class="edumi edumi-support"></i>
                                <span class="text">Quiz Attempts</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-question-answer.html">
                                <i class="edumi edumi-question"></i>
                                <span class="text">Question & Answer</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-assignments.html">
                                <i class="edumi edumi-checklist"></i>
                                <span class="text">Assignments</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-students.html">
                                <i class="edumi edumi-users"></i>
                                <span class="text">My Students</span>
                            </a>
                        </li> -->
                    <!-- </ul> -->
                    <!-- <ul class="dashboard-nav__menu-list"> -->
                        <!-- <li>
                            <a href="dashboard-settings.html">
                                <i class="edumi edumi-settings"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="index-main.html">
                                <i class="edumi edumi-sign-out"></i>
                                <span class="text">Logout</span>
                            </a>
                        </li> -->
                    <!-- </ul> -->
                </div>
                <!-- Dashboard Nav Menu End -->

            </div>
            <!-- Dashboard Nav Content End -->

            <div class="offcanvas-footer"></div>
        </div>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Nav End -->

    <!--  Dashboard Menu Start -->
    <div class="dashboard-menu">

        <!-- Dashboard Menu Close Start -->
        <div class="dashboard-menu__close">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <!-- Dashboard Menu Close End -->

        <!-- Dashboard Menu Content Start -->
        <div class="dashboard-menu__content">
            <div class="dashboard-menu__image">
                <img src="<?php echo base_url() ?>assets/images/canvas-menu-image.png" alt="Images" width="984" height="692">
            </div>
            <div class="dashboard-menu__main-menu">
                <ul class="dashboard-menu__menu-link">
                    <li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/frontend/course">Courses</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <div class="dashboard-menu__search">
                    <form action="#">
                        <input type="text" placeholder="Search…">
                        <button class="search-btn"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dashboard Menu Content End -->

    </div>
    <!-- Dashboard Menu End -->


    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <div class="dashboard-header">
            <div class="container">
                <!-- Dashboard Header Wrapper Start -->
                <div class="dashboard-header__wrap">

                    <div class="dashboard-header__toggle-menu d-xl-none">
                        <button class="toggle-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDashboard">
                            <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M18.7179688,2.60581293 L1.28207031,2.60581293 C0.573828125,2.60581293 0,2.02491559 0,1.30798783 C0,0.591060076 0.573828125,0.0101231939 1.28207031,0.0101231939 L18.7179688,0.0101231939 C19.4261719,0.0101231939 20,0.591020532 20,1.30798783 C20,2.02495513 19.4261719,2.60581293 18.7179688,2.60581293 Z"></path>
                                <path d="M11.5384766,10.5957293 L1.28207031,10.5957293 C0.573828125,10.5957293 2.91322522e-13,10.0147924 2.91322522e-13,9.29786464 C2.91322522e-13,8.58093688 0.573828125,8 1.28207031,8 L11.5384766,8 C12.2466797,8 12.8205469,8.58089734 12.8205469,9.29786464 C12.8205469,10.0148319 12.2466797,10.5957293 11.5384766,10.5957293 Z"></path>
                                <path d="M18.7179688,17.6 L1.28207031,17.6 C0.573828125,17.6 0,17.0628683 0,16.4 C0,15.7371317 0.573828125,15.2 1.28207031,15.2 L18.7179688,15.2 C19.4261719,15.2 20,15.7370952 20,16.4 C20,17.0628683 19.4261719,17.6 18.7179688,17.6 Z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dashboard-header__user">
                    <?php
                        if ($this->session->userdata('member_id')):
                            $member = $this->Common_model->get_all("member",["id"=>$this->session->userdata('member_id')])->result();
                            if($member != ""):
                                ?>
                                 <div class="dashboard-header__user-avatar">
                                    <img src="<?php echo base_url() ?>assets/images/avatar/<?php  echo $member[0]->image ?>" alt="Avatar" width="90" height="90">
                                </div>

                                <div class="dashboard-header__user-info">
                            <h4 class="dashboard-header__user-name"><span class="welcome-text">Howdy,</span><?php  echo $member[0]->name ?></h4>
                            <div class="dashboard-header__user-rating">
                                <div class="rating-star">
                                    <p>4.50 <span>(12 ratings)</span></p>
                                <div class="rating-label" style="width: 100%;"></div>
                                </div>

                            </div>
                        </div>
                               
                           
                        <?php
                         endif;
                        endif;
                        ?>
                       
                        
                    </div>
<!-- 
                    <div class="dashboard-header__btn">
                        <a class="btn btn-outline-primary" href="#"><i class="edumi edumi-content-writing"></i> <span class="text">Add A New Course </span></a>
                    </div> -->

                    <div class="dashboard-header__toggle">
                        <button class="btn btn-toggle"><i class="far fa-bars"></i></button>
                    </div>

                </div>
                <!-- Dashboard Header Wrapper End -->
            </div>
        </div>
        <!-- Dashboard Header End -->