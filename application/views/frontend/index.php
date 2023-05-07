<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/index-single-instructor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 04:27:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS & e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

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



<body>

<main class="main-wrapper">

    <!-- Header start -->
    <div class="header-section header-sticky">

        <!-- Header Top Start -->
        <div class="header-top-05 d-none d-sm-block">
            <div class="container">

                <!-- Header Top Bar Wrapper Start -->
                <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                    <div class="header-top-bar-wrap__info">
                        <ul class="header-top-bar-wrap__info-list header-top-bar-wrap__info-list-04">
                            <li><a href="tel:+94771254636"><i class="fas fa-phone"></i> <span class="info-text">+94 771 254 636</span></a></li>
                            <li><a href="mailto:info@digizen.edu.lk"><i class="far fa-envelope"></i> <span class="info-text">info@digizen.edu.lk</span></a></li>
                        </ul>
                    </div>

                    <div class="header-top-bar-wrap__info d-sm-flex">
                        <ul class="header-top-bar-wrap__info-list header-top-bar-wrap__info-list-04 d-none d-lg-flex">
                        <?php
                            if ($this->session->userdata('member_id')):
                                $member = $this->Common_model->get_all("member",["id"=>$this->session->userdata('member_id')])->result();
                                if($member != ""):
                                    ?>

                                    <li><a href="<?php echo base_url()   ?>index.php/frontend/microfile"> Hi <?=$member[0]->name?></a></li>
                                    <li><a  href="<?php echo base_url()   ?>index.php/frontend/memberlogout">Log Out</a></li>
                                    <?php
                                                
                                endif;
                                ?>
                                <?php
                            else:
                                ?>
                              <li><a href="<?php echo base_url(); ?>index.php/frontend/login">Log in</a></li>
                            <li> <a href="<?php echo base_url(); ?>index.php/frontend/register">Register</a></li>
                            <?php
                            endif;
                            ?>
                        </ul>
                       
                    </div>

                </div>
                <!-- Header Top Bar Wrapper End -->

            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Main Start -->
        <div class="header-main-05">
            <div class="container">
                <!-- Header Main Wrapper Start -->
                <div class="header-main-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a class="header-logo__logo" ><img src="<?php echo base_url(); ?>assets/images/light-logo.png" width="296" height="64" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Inner Start -->
                    <div class="header-inner">

                        <!-- Header Navigation Start -->
                        <div class="header-navigation d-none d-xl-block">
                            <nav class="menu-primary">
                                <ul class="menu-primary__container menu-primary__container-03">
                                <li><a class="active" href="<?php echo base_url(); ?>index.php"><span>Home</span></a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/course"><span>Courses</span></a></li>
                            </nav>
                        </div>
                        <!-- Header Navigation End -->

                        <!-- Header Mini Cart Start -->
                        <!-- <div class="header-action">
                            <a href="#" class="header-action__btn header-action__btn-02">
                                <i class="far fa-shopping-cart"></i>
                                <span class="header-action__number">3</span>
                            </a> -->

                            <!-- Header Mini Cart Start -->
                            <!-- <div class="header-mini-cart"> -->

                                <!-- Header Mini Cart Product List Start -->
                                <!-- <ul class="header-mini-cart__product-list ">
                                    <li class="header-mini-cart__item">
                                        <a href="#" class="header-mini-cart__close"></a>
                                        <div class="header-mini-cart__thumbnail">
                                            <a href="shop-single-list-left-sidebar.html"><img src="<?php echo base_url(); ?>assets/frontend/images/product/product-1.png" alt="Product" width="80" height="93"></a>
                                        </div>
                                        <div class="header-mini-cart__caption">
                                            <h3 class="header-mini-cart__name"><a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>
                                            <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>
                                        </div>
                                    </li>
                                    <li class="header-mini-cart__item">
                                        <a href="#" class="header-mini-cart__close"></a>
                                        <div class="header-mini-cart__thumbnail">
                                            <a href="shop-single-list-left-sidebar.html"><img src="<?php echo base_url(); ?>assets/frontend/images/product/product-2.png" alt="Product" width="80" height="93"></a>
                                        </div>
                                        <div class="header-mini-cart__caption">
                                            <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>
                                            <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>
                                        </div>
                                    </li>
                                    <li class="header-mini-cart__item">
                                        <a href="#" class="header-mini-cart__close"></a>
                                        <div class="header-mini-cart__thumbnail">
                                            <a href="shop-single-list-left-sidebar.html"><img src="<?php echo base_url(); ?>assets/frontend/images/product/product-3.png" alt="Product" width="80" height="93"></a>
                                        </div>
                                        <div class="header-mini-cart__caption">
                                            <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>
                                            <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>
                                        </div>
                                    </li>
                                </ul> -->
                                <!-- Header Mini Cart Product List End -->

                                <!-- <div class="header-mini-cart__footer">
                                    <div class="header-mini-cart__total">
                                        <p class="header-mini-cart__label">Total:</p>
                                        <p class="header-mini-cart__value">$445<span class="separator">.99</span></p>
                                    </div>
                                    <div class="header-mini-cart__btn">
                                        <a href="cart.html" class="btn btn-primary btn-hover-secondary">View cart</a>
                                        <a href="checkout.html" class="btn btn-primary btn-hover-secondary">Checkout</a>
                                    </div>
                                </div>

                            </div> -->
                            <!-- Header Mini Cart End -->

                        </div>
                        <!-- Header Mini Cart End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle">
                            <button class="header-toggle__btn header-toggle__btn-02 d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Inner End -->

                </div>
                <!-- Header Main Wrapper End -->
            </div>
        </div>
        <!-- Header Main End -->

    </div>
    <!-- Header End -->



    <!-- Slider Section Start -->
    <div class="slider-section slider-section-06" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/home-single-instructor-hero-image.jpg);">
        <div class="container">

            <div class="row gy-10 align-items-center">
                <div class="col-lg-8">

                    <!-- Slider Caption Start -->
                    <div class="slider-caption-06" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="slider-caption-06__sub-title">For a Better Future</h4>
                        <h2 class="slider-caption-06__main-title">Education for <mark>Life</mark> <small>With Frank Castle</small></h2>
                        <div class="slider-caption-06__btn">
                            <a class="btn btn-primary btn-hover-secondary" href="course-grid-left-sidebar.html">Get Started</a>
                        </div>
                    </div>
                    <!-- Slider Caption End -->

                </div>
                <div class="col-lg-4">
                    <!-- Slider Video Start -->
                    <div class="video-play" data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="glightbox">
                            <div class="video-play__play">
                                <div class="video-play__mask"></div>
                                <div class="video-play__icon"></div>
                            </div>
                            <div class="video-play__text">
                                <p>Watch video <br>intro</p>
                            </div>
                        </a>
                    </div>
                    <!-- Slider Video End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/mobile-bg.jpg);">
        <div class="offcanvas-header bg-white">
            <div class="offcanvas-logo">
                <a class="offcanvas-logo__logo" href="#"><img src="<?php echo base_url(); ?>assets/content/login/dark_logo.jpg" alt="Logo"></a>
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

        <!-- Header User Button Start -->
        <!-- <div class="offcanvas-user d-lg-none">
            <div class="offcanvas-user__button">
                <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
            </div>
            <div class="offcanvas-user__button">
                <button class="offcanvas-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
            </div>
        </div> -->
        <!-- Header User Button End -->

    </div>
    <!-- Offcanvas End -->

    <!-- About Section Start -->
    <div class="about-section section-padding-02 scene">

        <div class="container">

            <!-- About Wrapper Start -->
            <div class="about-wrapper scene">

                <div class="about-main-content">
                    <div class="row align-items-center gy-10">
                        <div class="col-md-6">

                            <!-- About Image Start -->
                            <div class="about-image-03">
                                <div class="about-image-03__image" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="<?php echo base_url(); ?>assets/frontend/images/introduce-image.jpg" alt="About" width="640" height="400">
                                </div>
                            </div>
                            <!-- About Image End -->

                        </div>
                        <div class="col-md-6">
                            <!-- About Content End -->
                            <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="section-title__title-02"><span>Hi, I'm Frank Castle.</span></h3>
                                    <h3 class="section-title__title-02">I'm The <mark>Founder</mark> of The EduMall Academy. </h3>
                                </div>
                                <!-- Section Title End -->
                                <p>Facing the study with the right mindset can change our chances of learning everything necessary. At the same time, having learned these contents will make our way of interpreting the world change.</p>
                                <img class="about-content__signature" src="<?php echo base_url(); ?>assets/frontend/images/instructor-signature.png" alt="Signature">
                            </div>
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>

                <div class="about-wrapper__shape-01" data-depth="-0.5"></div>
                <div class="about-wrapper__shape-02" data-depth="0.5"></div>
                <div class="about-wrapper__shape-03" data-depth="-0.4"></div>

            </div>
            <!-- About Wrapper End -->

        </div>

        <img class="about-section__shape-03" data-depth="-0.4" src="<?php echo base_url(); ?>assets/frontend/images/shape/edumall-shape-grid-dots.png" alt="Shape">
        <div class="about-section__shape-04" data-depth="0.4"></div>

    </div>
    <!-- About Section End -->

    <!-- Category Start -->
    <div class="category-seaction section-padding-02">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03"><mark>Courses </mark> Category</h2>
                <p class="mt-0">Learning new languages, connect to the world and <br> become a global citizen with EduMall</p>
            </div>
            <!-- Section Title End -->

            <!-- Category Start -->
            <div class="category-active swiper-dots-style" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-1.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Art & Design</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-2.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Business</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-3.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Data Science</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-4.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Development</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-5.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Finance</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-6.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Health & Fitness</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-7.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Lifestyle</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-8.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Marketing</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-9.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Music</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Category Item Start -->
                            <div class="category-item">
                                <a class="category-item__link" href="course-category.html">
                                    <div class="category-item__image">
                                        <img src="<?php echo base_url(); ?>assets/frontend/images/category/category-1.jpg" alt="Category" width="258" height="318">
                                    </div>
                                    <div class="category-item__caption">
                                        <h3 class="category-item__name">Personal Development</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Category Item End -->

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Category End -->

        </div>
    </div>
    <!-- Category End -->

    <!-- Call To Action Start -->
    <div class="call-to-action-section section-padding-02">
        <div class="container">

            <!-- Call To Action Wrapper Start -->
            <div class="call-to-action__wrapper-02 scene">

                <div class="call-to-action">
                    <div class="row gy-4 flex-row-reverse">
                        <div class="col-lg-6 col-md-7">

                            <!-- Call To Action Image Start -->
                            <div class="call-to-action__image text-center text-md-start" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/instructor-get-free-book-image.png" alt="Instructor" width="477" height="292">
                            </div>
                            <!-- Call To Action Image End -->

                        </div>

                        <div class="col-lg-6 col-md-5">

                            <!-- Call To Action Caption Start -->
                            <div class="call-to-action__caption-02 text-center text-md-start" data-aos="fade-up" data-aos-duration="1000">
                                <h3 class="call-to-action__sub-title-02">Get a copy of my</h3>
                                <h2 class="call-to-action__main-title-02">Exclusive Mobile App Coding Tutorials Book</h2>
                                <a class="mt-8 btn btn-secondary btn-hover-white" href="course-category.html"> <i class="fas fa-arrow-alt-to-bottom"></i> Get Free Book </a>
                            </div>
                            <!-- Call To Action Caption End -->

                        </div>
                    </div>
                </div>

                <div class="call-to-action__shape-04" data-depth="-0.6"></div>
                <div class="call-to-action__shape-05" data-depth="0.6"></div>
                <div class="call-to-action__shape-06" data-depth="0.5"></div>
                <div class="call-to-action__shape-07" data-depth="-0.5"></div>

            </div>
            <!-- Call To Action Wrapper End -->

        </div>
    </div>
    <!-- Call To Action End -->

    <!-- Courses Start -->
    <div class="courses-section section-padding-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03"><mark>New </mark> Online Courses</h2>
                <p class="mt-0">Online Courses for anyone, anywhere</p>
            </div>
            <!-- Section Title End -->

            <div class="course-active swiper-button-style swiper-dots-style" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Communications</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Negotiation is a skill well worth mastering – by putting …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-2.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$29.<small class="separator">99</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>If you’re someone who has a LOT on their plate …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$49.<small class="separator">99</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Management</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>38</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-8.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Strategy & Analytics</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2022</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Our program is different than the rest of the materials …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 0;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-1.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$26.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Communications</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Negotiation is a skill well worth mastering – by putting …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>38</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 0;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>38</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="course-single-layout-01.html"><img src="<?php echo base_url(); ?>assets/frontend/images/courses/courses-7.jpg" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$49.<small class="separator">99</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 0;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="far fa-user-alt"></i></span>
                                            <span>10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
                <div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
            </div>

        </div>
    </div>
    <!-- Courses End -->

    <!-- Why Choose Start -->
    <div class="why-choose-section-02 bg-color-01 section-padding-01 scene">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03">Why <mark>Choose </mark> My Education?</h2>
                <p class="mt-0">Online Courses for anyone, anywhere</p>
            </div>
            <!-- Section Title End -->

            <!-- Counter Start -->
            <div class="counter-wrapper-02 counter">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">

                        <!-- Counter Item Start -->
                        <div class="counter-item-04" data-aos="fade-up" data-aos-duration="1000">
                            <div class="counter-item-04__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="82px" viewBox="0 0 64 82">
                                    <g transform="translate(1.000000, 3.000000)" fill="#D3E6FA">
                                        <path d="M5.2776187,48.0755646 C5.2254052,48.0035853 5.21387762,47.9100792 5.24778248,47.8273364 L10.9139499,33.1031604 C10.9593822,32.9867824 10.9824376,32.862332 10.9831156,32.7372087 C10.9885404,30.6033872 11.0048147,27.0811016 11.0278701,26.7070774 C11.8029334,12.7174957 22.7935082,1.40326357 36.8572124,0.118396152 C36.349997,0.0719795218 35.8387127,0.0369988405 35.322682,0.0188357514 C35.0785675,0.0100906242 34.8337749,0.00470898092 34.5869482,0.00134532471 C34.480487,0.000672662356 34.3719918,-9.25820039e-07 34.2648527,-9.25820039e-07 C19.1385724,-0.00269082164 6.64872807,11.7239098 5.81873896,26.7070774 C5.79636185,27.0811016 5.78008755,30.6033872 5.77466279,32.7372087 C5.77466279,32.8630047 5.7509294,32.9867824 5.70617517,33.1038331 L0.0400076884,47.8280091 C0.00813714812,47.9107519 0.0196647312,48.0035853 0.0698438981,48.0762376 C0.70700944,48.1488897 0.204106756,48.1927433 0.292937332,48.1927433 L5.50071213,48.1927433 C5.4112035,48.1946337 5.32711964,48.1502351 5.2776187,48.0755646 L5.2776187,48.0755646 Z"></path>
                                        <path d="M34.7286702,68.2257826 C34.1421174,65.8955311 32.0298494,64.2622024 29.6090477,64.2648865 L29.5859925,64.2648865 C28.0379001,64.2716203 26.3480856,64.2790199 24.8725494,64.2864197 C27.1102652,64.4821771 28.9763844,66.0637075 29.5208953,68.2257826 C29.5419164,68.3078528 29.5520877,68.3926135 29.5520877,68.4773743 L29.5520877,77.1949637 L34.7598625,77.1949637 L34.7598625,68.4780471 C34.7598625,68.3932862 34.7496912,68.3085254 34.7286702,68.2257826 Z"></path>
                                        <path d="M16.923912,62.7714871 C15.8477741,61.7429207 15.2422347,60.3235121 15.2483375,58.8408694 L15.2483375,49.2252184 C15.2483375,48.6547642 14.7818077,48.1919429 14.2067826,48.1919429 L8.99900777,48.1919429 C9.57403286,48.1919429 10.0405627,48.6547642 10.0405627,49.2252184 L10.0405627,58.8408694 C10.0398847,60.3214942 10.6440678,61.7388843 11.7141029,62.7701418 C12.7841378,63.8020718 14.2291597,64.3597446 15.7209701,64.3173641 C16.0118732,64.308619 17.8786707,64.2965104 20.1394416,64.2857471 C18.9276846,64.151206 17.7952649,63.6177505 16.923912,62.7714871 L16.923912,62.7714871 Z"></path>
                                    </g>
                                    <path d="M37.1274277,0.0203506142 C36.8679939,0.0108549198 36.6078878,0.00475060938 36.3471097,0.00203757865 C20.1291282,-0.185161507 6.641924,12.5491265 5.74869148,28.8910671 C5.71777457,29.404508 5.70500446,33.8050439 5.70231603,34.8956822 L0.153387064,49.5630046 C-0.120161025,50.2867056 -0.0240495828,51.0999366 0.411476784,51.738177 C0.847003185,52.3764176 1.56548728,52.7575984 2.3337075,52.7575984 L9.92987947,52.7575984 L9.92987947,61.41081 C9.92987947,63.4666089 10.7552289,65.435591 12.2170651,66.8680712 C13.6789014,68.3005514 15.6528845,69.0744434 17.6900458,69.0140785 C18.0321493,69.0032264 21.0599986,68.9849134 26.2157441,68.9632091 L26.229186,68.9632091 C27.6372538,68.9618527 28.8772943,69.899883 29.2698058,71.2652158 L29.2698058,80.9581963 C29.2698058,81.5333588 29.7322165,82 30.3021646,82 L56.4169458,82 C56.7019199,82 56.9734518,81.8813051 57.1683634,81.6724017 C57.363947,81.4634983 57.4647633,81.1826996 57.4479606,80.8964749 C57.4372069,80.7228409 56.4324044,63.3146791 57.4452721,52.3336874 C57.7208367,49.35071 60.5389881,42.2059437 60.7930453,41.5683814 C65.294829,32.875831 65.0427882,22.4564363 60.1269856,13.9958501 C55.2837708,5.59155913 46.686157,0.367618548 37.1274277,0.0203506142 Z M58.9386975,40.648664 C58.9232391,40.6785074 58.9091247,40.7090289 58.8970269,40.7395505 C58.7666376,41.0644359 55.7038386,48.7280695 55.3892917,52.1403838 C54.5108457,61.6624435 55.1244808,75.8787245 55.3274578,79.9157142 L31.3338513,79.9157142 L31.3338513,71.1268513 C31.3338513,71.0413907 31.3237698,70.9559303 31.3029344,70.8725046 C30.7215604,68.52302 28.627942,66.8762103 26.228514,66.8789233 L26.2056624,66.8789233 C22.5460307,66.8945233 18.08659,66.9162275 17.6248513,66.9311491 C16.1462123,66.9745576 14.7139487,66.4116038 13.6533614,65.3711565 C12.5927738,64.3313875 11.9939252,62.9022985 11.9945972,61.4094533 L11.9945972,51.7151164 C11.9945972,51.1399539 11.5321865,50.6733125 10.9622384,50.6733125 L2.33303544,50.6733125 C2.24498917,50.6733125 2.16231976,50.629904 2.11191174,50.5559739 C2.06217561,50.4827222 2.05074981,50.3891226 2.08233896,50.3056968 L7.69847879,35.4599926 C7.74283787,35.3426541 7.76636171,35.2171765 7.76636171,35.0910204 C7.77173858,32.9395871 7.7878692,29.3882299 7.81004873,29.0111186 C8.63270971,13.9042853 21.0122788,2.08089737 36.0050064,2.08360946 C36.1105275,2.08360946 36.2180648,2.08360946 36.3242581,2.08564521 C36.5682334,2.08835825 36.8108646,2.09378431 37.0534959,2.10260161 C41.5183136,2.23689655 45.8668565,3.56628161 49.6555329,5.95442704 C61.2191622,13.3230185 65.2551746,28.4074693 58.9386975,40.648664 Z" fill="#0071DC" class="primary-fill-color"></path>
                                    <path d="M36.0003388,5 C24.9547587,4.99932235 16,13.9540813 16,24.9996612 C16,36.0452413 24.9540812,45 36.0003388,45 C47.0459188,45 56,36.0459188 56,24.9996612 C55.9878048,13.9595014 47.0411763,5.01219524 36.0003388,5 Z M46.8860247,39.2221243 L46.8860247,37.1705993 L49.2817292,34.8988804 C49.4883722,34.7024003 49.6055828,34.4293603 49.6055828,34.1441252 L49.6055828,32.1407037 C51.0453091,31.63392 51.9098224,30.1630279 51.6523655,28.6589374 C51.3949085,27.1548469 50.0913634,26.0545573 48.5649148,26.0545573 C47.0391437,26.0545573 45.7355986,27.1548469 45.4781416,28.6589374 C45.2206847,30.1630279 46.085198,31.63392 47.5242468,32.1407037 L47.5242468,33.6962856 L45.1292197,35.9680043 C44.9218992,36.1644846 44.8046886,36.4375244 44.8046886,36.723437 L44.8046886,40.6008741 C43.581768,41.2946527 42.2816104,41.8407326 40.9299616,42.228273 L40.9299616,34.1319297 L44.4855774,29.255831 C44.6156609,29.0783212 44.6854453,28.8635479 44.6854453,28.642677 L44.6854453,23.156134 C46.1251716,22.6493504 46.9890074,21.1784582 46.732228,19.6743679 C46.4747711,18.1702772 45.1712259,17.0706652 43.6447774,17.0706652 C42.119006,17.0706652 40.8147835,18.1702772 40.558004,19.6743679 C40.3005472,21.1784582 41.1650603,22.6493504 42.6041093,23.156134 L42.6041093,28.3039179 L39.0484935,33.1793392 C38.9190875,33.3575263 38.8486255,33.5722998 38.8486255,33.7924932 L38.8486255,42.6910178 C38.0024053,42.8265215 37.1473772,42.9010486 36.2896392,42.9145989 L36.2896392,31.5783635 L38.2612172,29.6067854 C38.4563424,29.4116601 38.5661005,29.147428 38.5661005,28.8710006 L38.5661005,15.1688714 C40.0051491,14.6620878 40.8696626,13.1911956 40.6122055,11.6871051 C40.3547487,10.1830146 39.0512034,9.08340255 37.5254324,9.08340255 C35.9989837,9.08340255 34.6954385,10.1830146 34.4379816,11.6871051 C34.1805247,13.1911956 35.045038,14.6620878 36.4847644,15.1688714 L36.4847644,28.440099 L34.5131862,30.4109995 C34.3180609,30.6068024 34.208303,30.8710344 34.208303,31.1474619 L34.208303,42.8299092 C33.8702214,42.7960332 33.5348498,42.7533497 33.2028658,42.7005032 L33.2028658,26.7971172 C33.2028658,26.5213673 33.093108,26.2564576 32.8973053,26.0613324 L30.031403,23.1961077 L30.031403,21.5653212 C31.4711294,21.0585376 32.3349649,19.5876455 32.0781857,18.0835548 C31.8207286,16.5794645 30.5171836,15.4798523 28.9907349,15.4798523 C27.4649637,15.4798523 26.1614186,16.5794645 25.9039617,18.0835548 C25.6465047,19.5876455 26.511018,21.0585376 27.9500668,21.5653212 L27.9500668,23.6263318 C27.9500668,23.9020818 28.0598249,24.1669913 28.2549501,24.3621165 L31.1215297,27.2280188 L31.1215297,42.2431783 C30.0381782,41.9362626 28.9873474,41.5270416 27.9819103,41.0209353 L27.9819103,33.1054897 C27.9819103,32.6813632 27.7244533,32.2992429 27.3308152,32.1407037 L24.4757532,30.9882451 L24.4757532,28.7334643 C25.914802,28.2260032 26.7793153,26.7557885 26.5218584,25.2516982 C26.2644014,23.7476075 24.9608563,22.6479955 23.4350852,22.6479955 C21.9093141,22.6479955 20.6050914,23.7476075 20.348312,25.2516982 C20.0908551,26.7557885 20.9553684,28.2260032 22.3944172,28.7334643 L22.3944172,31.6908317 C22.3944172,32.1156354 22.6518741,32.4970783 23.0455122,32.6562951 L25.9005741,33.8080761 L25.9005741,39.7939499 C19.4797337,35.4144719 16.6138314,27.3960434 18.8035704,19.9392774 C20.9939871,12.4825116 27.7413912,7.28730162 35.5098156,7.07523828 C43.2789173,6.86385259 50.298684,11.684395 52.8915465,19.0110775 C55.4844087,26.3377598 53.0588933,34.5004997 46.8860247,39.2221243 L46.8860247,39.2221243 Z M48.5649148,30.2409424 C47.9849591,30.2409424 47.5147616,29.7707448 47.5147616,29.1901117 C47.5147616,28.6101561 47.9849591,28.1399584 48.5655923,28.1399584 C49.1455479,28.1399584 49.6157457,28.6101561 49.6157457,29.1901117 C49.615068,29.7700673 49.1448704,30.2402649 48.5649148,30.2409424 L48.5649148,30.2409424 Z M43.6454548,21.2563729 C43.0648217,21.2563729 42.5946239,20.7861753 42.5946239,20.2062196 C42.5946239,19.6255866 43.0648217,19.1553888 43.6447774,19.1553888 C44.2254104,19.1553888 44.695608,19.6255866 44.695608,20.2055422 C44.6949305,20.7854978 44.224733,21.2556955 43.6454548,21.2563729 Z M37.5254324,13.2691103 C36.9447992,13.2691103 36.4746016,12.7989125 36.4746016,12.2189568 C36.4746016,11.6383238 36.9447992,11.1681262 37.5247548,11.1681262 C38.105388,11.1681262 38.5755857,11.6383238 38.5755857,12.2189568 C38.5749081,12.7989125 38.1047104,13.2684327 37.5254324,13.2691103 Z M28.9914123,19.6655615 C28.4114567,19.6662375 27.9412577,19.1953624 27.9412577,18.6154068 C27.9405817,18.0354512 28.4114567,17.564576 28.9914123,17.564576 C29.5713679,17.564576 30.0422432,18.0347735 30.0422432,18.6154068 C30.0415657,19.1953624 29.5713679,19.6655615 28.9907349,19.6655615 L28.9914123,19.6655615 Z M23.4357627,26.8330256 C22.8558071,26.8330256 22.3856094,26.3621505 22.3856094,25.7821948 C22.3856094,25.2022392 22.8558071,24.7313641 23.4364403,24.7313641 C24.0163959,24.7320416 24.4865935,25.2022392 24.4865935,25.7821948 C24.485916,26.3628281 24.0157183,26.8323482 23.4350852,26.8330256 L23.4357627,26.8330256 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                </svg>
                            </div>
                            <div class="counter-item-04__content">
                                <span class="counter-item-04__count count" data-count="1533">0</span>
                                <p class="counter-item-04__text">Online Courses</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                    <div class="col-lg-4 col-sm-4">

                        <!-- Counter Item Start -->
                        <div class="counter-item-04" data-aos="fade-up" data-aos-duration="1000">
                            <div class="counter-item-04__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="78px" viewBox="0 0 80 78">
                                    <path d="M1.88621514,5.14167331 L1.88621514,53.034741 C1.88621514,54.7950112 3.31319602,56.221992 5.07346614,56.221992 L8.76494024,56.221992 L8.76494024,1.95442231 L5.07346614,1.95442231 C3.31319602,1.95442231 1.88621514,3.38140319 1.88621514,5.14167331 Z" fill="#D3E6FA"></path>
                                    <g fill="#0071DC" class="primary-fill-color">
                                        <path d="M74.6078088,0.0420717131 L5.39219124,0.0420717131 C2.41896414,0.0420717131 2.26467804e-15,2.38900398 2.26467804e-15,5.2736255 L2.26467804e-15,52.8041434 C2.26467804e-15,55.6886056 2.41896414,58.0356972 5.39219124,58.0356972 L48.3760956,58.0356972 L48.3760956,56.1233466 L5.39219124,56.1233466 C3.47410359,56.1233466 1.9123506,54.6344223 1.9123506,52.8041434 L1.9123506,5.2736255 C1.9123506,3.44350598 3.47410359,1.95442231 5.39219124,1.95442231 L74.6078088,1.95442231 C76.5258964,1.95442231 78.0876494,3.44350598 78.0876494,5.2736255 L78.0876494,52.8041434 C78.0876494,54.6344223 76.5258964,56.1233466 74.6078088,56.1233466 L69.2396813,56.1233466 L69.2396813,58.0356972 L74.6078088,58.0356972 C77.5810359,58.0356972 80,55.6887649 80,52.8041434 L80,5.2736255 C80,2.38900398 77.5810359,0.0420717131 74.6078088,0.0420717131 Z"></path>
                                        <path d="M31.6046215,28.7201594 L31.6046215,9.40541833 C31.6038311,8.70163794 31.0335015,8.13130835 30.3297211,8.13051793 L10.2648606,8.13051793 C9.56108017,8.13130835 8.99075058,8.70163794 8.98996016,9.40541833 L8.98996016,28.7201594 C8.99075058,29.4239397 9.56108017,29.9942693 10.2648606,29.9950598 L30.3297211,29.9950598 C31.0335015,29.9942693 31.6038311,29.4239397 31.6046215,28.7201594 L31.6046215,28.7201594 Z M29.6922709,28.0827092 L10.9023108,28.0827092 L10.9023108,10.0428685 L29.6922709,10.0428685 L29.6922709,28.0827092 Z"></path>
                                        <path d="M36.7351394,14.043513 L36.7427888,14.043513 L67.4159363,13.8044622 C67.9440173,13.8024378 68.3704705,13.3727025 68.3684534,12.8446215 C68.3664219,12.3165405 67.9366866,11.8900872 67.4086056,11.8921044 L67.4009562,11.8921044 L36.7278088,12.1311554 C36.3862002,12.1324649 36.0712395,12.3159209 35.9015693,12.6124173 C35.7318991,12.9089137 35.7332963,13.2734057 35.9052347,13.5685926 C36.077173,13.8637795 36.3935309,14.0448155 36.7351394,14.043513 L36.7351394,14.043513 Z"></path>
                                        <path d="M68.3984347,24.6449402 C68.3943796,24.1197243 67.9674625,23.6960956 67.4422311,23.6960956 L67.434741,23.6960956 L36.7614343,23.9351394 C36.2333532,23.9371638 35.8069,24.366899 35.8089171,24.8949801 C35.8109486,25.4230611 36.2406839,25.8495144 36.7687649,25.8474972 L36.776255,25.8474972 L67.4495618,25.6084462 C67.7031576,25.6065094 67.9455965,25.5039076 68.123541,25.3232136 C68.3014855,25.1425195 68.4003581,24.8985359 68.3984347,24.6449402 L68.3984347,24.6449402 Z"></path>
                                        <path d="M11.141992,38.4551469 L11.1499602,38.4551469 L39.4137052,38.2267729 C39.7553137,38.2239262 40.0694543,38.0390497 40.2377933,37.7417847 C40.4061322,37.4445196 40.4030948,37.0800277 40.2298251,36.7856093 C40.0565555,36.491191 39.7393775,36.3115756 39.3977689,36.3144223 L11.134502,36.5427888 C10.606421,36.5448572 10.1800034,36.9746281 10.1820642,37.5027092 C10.18414,38.0307902 10.613911,38.4572078 11.141992,38.4551469 L11.141992,38.4551469 Z"></path>
                                        <path d="M11.1759363,50.2584935 L11.1839044,50.2584935 L39.4478088,50.0301195 C39.9758898,50.0280072 40.4022716,49.5982005 40.4001671,49.0701195 C40.398047,48.5420385 39.9682404,48.1156566 39.4401594,48.1177611 L39.4323506,48.1177611 L11.1684462,48.3461355 C10.6403652,48.3482038 10.2139476,48.7779747 10.2160084,49.3060558 C10.2180843,49.8341368 10.6478552,50.2605544 11.1759363,50.2584935 L11.1759363,50.2584935 Z"></path>
                                    </g>
                                    <path d="M58.3121912,52.694502 C58.3776361,52.6960956 58.4429216,52.696743 58.5080478,52.696743 C62.7864542,52.696743 66.3193625,49.3791235 66.4251793,45.2156175 C66.4754838,43.2123344 65.7212528,41.272375 64.330996,39.8291633 C62.8593176,38.2857597 60.8307515,37.3961385 58.6984861,37.3590438 C54.336255,37.2578486 50.6930677,40.610996 50.585498,44.8379283 C50.5353545,46.8411833 51.2895622,48.7810828 52.6796813,50.2243825 C54.1513388,51.7678158 56.179918,52.6574428 58.3121912,52.694502 L58.3121912,52.694502 Z M52.4972112,44.8868526 C52.5768924,41.7601594 55.2565737,39.2694821 58.5032669,39.2694821 C58.5531474,39.2694821 58.6031873,39.2694821 58.6533865,39.2712351 C60.2775741,39.2974181 61.823587,39.9731387 62.9459761,41.1474104 C63.9849274,42.2237183 64.549466,43.6713384 64.5134661,45.1668526 C64.4326693,48.3416733 61.6733068,50.8629482 58.3572908,50.7824701 C56.7330914,50.756192 55.1870948,50.0804211 54.0647012,48.9061355 C53.025912,47.8297883 52.4613974,46.3822869 52.4972112,44.8868526 L52.4972112,44.8868526 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                    <path d="M69.1931474,53.9561753 C70.0745817,53.8513147 70.9859761,53.6591235 71.4860558,52.8855777 C72.063745,51.9917131 71.7042231,50.9169721 71.3869323,49.969243 C71.2498805,49.5598406 71.0203984,48.8742629 71.0876494,48.6581673 C71.1513944,48.4621514 71.7091633,48.0425498 72.0425498,47.7917131 C72.8560956,47.1796016 73.7781673,46.4860558 73.8058964,45.3926693 C73.8336255,44.2992829 72.9478884,43.56 72.1662151,42.9080478 C71.8465339,42.6414343 71.3117131,42.1953785 71.2578486,41.9971315 C71.2019124,41.7781673 71.4650199,41.1058167 71.6232669,40.7040637 C71.9882072,39.7733865 72.4019124,38.7187251 71.8698008,37.7974502 C71.3376892,36.8761753 70.214502,36.7023108 69.2243825,36.5502789 C68.7993625,36.4849402 68.0879681,36.3757769 67.9335458,36.2216733 C67.7845418,36.0737849 67.6744223,35.3694024 67.6086056,34.9483665 C67.4533865,33.956494 67.2774502,32.8321912 66.3505976,32.2954582 C65.4431873,31.7695618 64.3945817,32.1679681 63.4694821,32.52 C63.0615139,32.6749004 62.3792829,32.9343426 62.1588845,32.8731474 C61.9628685,32.8117928 61.5373705,32.2627888 61.2823904,31.9346614 C60.6632669,31.1378486 59.9612749,30.2328287 58.8792032,30.2070188 C57.796494,30.1882072 57.052749,31.0519522 56.3958566,31.8188048 C56.1249402,32.1349801 55.6723506,32.6642231 55.4736255,32.7156972 C55.2489243,32.767012 54.579761,32.4753785 54.1794422,32.3013546 C53.2710757,31.9064542 52.2422311,31.4591235 51.3109163,31.9407171 C50.3596813,32.4323506 50.1289243,33.5466135 49.9254183,34.5298805 C49.8388845,34.9474104 49.6943426,35.6463745 49.5375299,35.7875697 C49.3746614,35.9343426 48.658008,36.0089243 48.2298008,36.0533865 C47.2336255,36.1568127 46.1043825,36.2741036 45.5258964,37.1689243 C44.9474104,38.063745 45.3077291,39.1373705 45.6250199,40.085259 C45.7619124,40.4948207 45.9915538,41.180239 45.9241434,41.396494 C45.8603984,41.59251 45.3026295,42.0122709 44.969243,42.2629482 C44.1556972,42.8750598 43.2337849,43.5686056 43.2058964,44.6621514 C43.178008,45.7556972 44.0640637,46.4948207 44.8457371,47.1464542 C45.1644622,47.4130677 45.700239,47.8592829 45.7541036,48.0575299 C45.8100398,48.276494 45.5469323,48.9488446 45.3886853,49.3505976 C45.023745,50.2812749 44.6098805,51.3359363 45.1421514,52.2572112 C45.6744223,53.1784861 46.7972908,53.3523506 47.7875697,53.5043825 C47.9725896,53.532749 48.2119522,53.5695618 48.4360159,53.6148207 C48.3781943,53.6987863 48.3342347,53.7914943 48.3058167,53.8894024 L42.3010359,74.6199203 C42.1955481,74.9841102 42.3152177,75.3762262 42.6060826,75.6194536 C42.8969474,75.862681 43.3040528,75.9110653 43.6438247,75.7427888 L49.2631076,72.9587251 L53.2081275,77.7010359 C53.4333913,77.9719132 53.7893603,78.0969746 54.1345462,78.0265115 C54.479732,77.9560484 54.7582063,77.7014775 54.8592829,77.3639841 L59.6481275,61.3784861 L63.3649402,76.3904382 C63.4495558,76.732221 63.7151633,76.9998452 64.0562962,77.0870436 C64.3974292,77.174242 64.7588824,77.0669034 64.9971315,76.8076494 L69.1800797,72.2549801 L74.650996,75.3008765 C74.99625,75.4927883 75.4239755,75.452645 75.7274918,75.1998441 C76.0310082,74.9470432 76.1478324,74.5336274 76.0215139,74.1593625 L69.1931474,53.9561753 Z M46.8012749,51.2988048 C46.7654183,51.074741 47.0261355,50.4101992 47.1678088,50.0482869 C47.4865339,49.2379283 47.8143426,48.4001594 47.6058964,47.583745 C47.4031873,46.7898008 46.7250996,46.2242231 46.0693227,45.6772908 C45.7534661,45.4138645 45.1690837,44.9265339 45.1177689,44.7099602 C45.1796016,44.4960956 45.7885259,44.038247 46.1176096,43.7905976 C46.8003187,43.2769721 47.5064542,42.7458167 47.7493227,41.9625498 C47.9992032,41.1576096 47.7134661,40.303745 47.4372908,39.4779283 C47.3136255,39.1080478 47.0866932,38.4288446 47.134502,38.20749 C47.3158566,38.0696414 48.034741,37.9949004 48.4261355,37.9544223 C49.2935458,37.8642231 50.1905976,37.7711554 50.8165737,37.2071713 C51.4380876,36.6466932 51.6208765,35.767012 51.7969721,34.9163347 C51.8790438,34.5203187 52.030757,33.7874104 52.1818327,33.6438247 C52.4003187,33.6119522 53.0583267,33.8988048 53.416255,34.0540239 C54.2253386,34.4057371 55.0623108,34.7697211 55.8978486,34.5791235 C56.7066135,34.394741 57.2868526,33.7168127 57.8481275,33.0611952 C58.1204781,32.7424701 58.6275697,32.1504382 58.8261355,32.1174502 C59.0369721,32.1604781 59.5144223,32.7757769 59.770996,33.1062948 C60.2999203,33.7875697 60.8466932,34.492749 61.6454183,34.7142629 C62.4705976,34.9439044 63.3233466,34.6199203 64.1474104,34.3064542 C64.5332271,34.16 65.1722709,33.9174502 65.3923506,33.9542629 C65.5431076,34.125259 65.6564143,34.849243 65.7179283,35.2428685 C65.8521116,36.1003984 65.990757,36.987251 66.5842231,37.5770518 C67.1811952,38.1703586 68.0718725,38.3070916 68.9333865,38.4393625 C69.3211155,38.4989641 70.032988,38.6082869 70.2082869,38.7541036 C70.2441434,38.9781673 69.9834263,39.6427092 69.841753,40.0046215 C69.5239841,40.8148207 69.1953785,41.652749 69.4038247,42.4691633 C69.6066932,43.2631076 70.2846215,43.8286853 70.9403984,44.3756175 C71.256255,44.6390438 71.8406375,45.1263745 71.8917928,45.3427888 C71.8299602,45.5566534 71.2211952,46.0146614 70.8921116,46.2623108 C70.209243,46.7759363 69.5032669,47.3070916 69.260239,48.0903586 C69.0105179,48.8952988 69.2960956,49.7491633 69.5724303,50.5748207 C69.6960956,50.9447012 69.9230279,51.6239044 69.8752191,51.8455777 C69.6937052,51.9832669 68.9749801,52.0578486 68.5835857,52.0984861 C67.7161753,52.1885259 66.8191235,52.281753 66.1931474,52.8455777 C65.5716335,53.4062151 65.389004,54.2858964 65.2129084,55.1364143 C65.1308367,55.5325896 64.9791235,56.265498 64.8280478,56.4090837 C64.6094024,56.4409562 63.9515538,56.1541036 63.5936255,55.9988845 C62.7843825,55.647012 61.947251,55.283506 61.1118725,55.472988 C60.3064542,55.6565737 59.7276494,56.3297211 59.1687649,56.9827888 C59.1596813,56.9894821 59.1512351,56.996494 59.1424701,57.003506 C59.1337052,57.0105179 59.1225498,57.0194422 59.1126693,57.0282072 C59.0998141,57.0388313 59.0872244,57.0501461 59.0749004,57.0621514 C59.0640637,57.0726693 59.0535458,57.0833466 59.0430279,57.0940239 C59.03251,57.1047012 59.0227888,57.1155378 59.0132271,57.1266932 C59.0036653,57.1378486 58.9913944,57.15251 58.9813546,57.1658964 C58.9730677,57.1765737 58.9654183,57.187251 58.9572908,57.1977689 C58.9470916,57.2119522 58.9373705,57.2266135 58.9279681,57.2414343 C58.9206375,57.2530677 58.9136255,57.2647012 58.9067729,57.2766534 C58.901992,57.2847809 58.8967331,57.2925896 58.8922709,57.3010359 C58.6315538,57.5944223 58.32749,57.9101195 58.1840637,57.9338645 C57.9733865,57.8908367 57.4957769,57.2755378 57.2392032,56.9458167 C56.7102789,56.2645418 56.1633466,55.5601594 55.3647809,55.338008 C55.1734297,55.2854872 54.975796,55.2593755 54.7773705,55.2603984 C54.1389641,55.2603984 53.4922709,55.5061355 52.861992,55.7456574 C52.4761753,55.8921116 51.8374502,56.1348207 51.6168924,56.0978486 C51.4662948,55.9266932 51.352988,55.2028685 51.2914741,54.809243 C51.1572908,53.9515538 51.0184861,53.0648606 50.4251793,52.4750598 C49.8282072,51.8819124 48.9373705,51.7450199 48.0760159,51.612749 C47.6889243,51.5545817 46.9765737,51.4450996 46.8012749,51.2988048 L46.8012749,51.2988048 Z M53.5376892,75.1075697 L50.2490837,71.1553785 C49.9659542,70.8150636 49.4862418,70.7135961 49.0895618,70.9101195 L44.7415139,73.0645418 L49.6199203,56.2224701 C49.7902789,56.8481275 50.0758566,57.4208765 50.6605578,57.7595219 C51.5678088,58.2854183 52.6167331,57.887012 53.541992,57.5349801 C53.9498008,57.3800797 54.6318725,57.1206375 54.8524303,57.181992 C55.0482869,57.2431873 55.4739442,57.7921912 55.7289243,58.1203187 C56.3439044,58.9126693 57.0409562,59.8095618 58.110757,59.8460558 L53.5376892,75.1075697 Z M69.4514741,70.2168924 C69.065068,70.0017045 68.5815071,70.0796068 68.2822311,70.405259 L64.7934661,74.2022311 L60.7899602,58.0333068 C61.0519522,57.7325896 61.3776892,57.3799203 61.5378486,57.3388048 C61.7609562,57.2873307 62.4315538,57.5789641 62.8320319,57.7531474 C63.7403984,58.1480478 64.7690837,58.5956972 65.7005578,58.1137849 C66.6517928,57.6221514 66.8823904,56.5078884 67.0860558,55.5246215 C67.150366,55.1716415 67.239295,54.8235938 67.3521912,54.4830279 L73.4165737,72.4251793 L69.4514741,70.2168924 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                </svg>
                            </div>
                            <div class="counter-item-04__content">
                                <span class="counter-item-04__count count"  data-count="1240">0</span>
                                <p class="counter-item-04__text">Certificates</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                    <div class="col-lg-4 col-sm-4">

                        <!-- Counter Item Start -->
                        <div class="counter-item-04" data-aos="fade-up" data-aos-duration="1000">
                            <div class="counter-item-04__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90px" height="61px" viewBox="0 0 90 61">
                                    <g transform="translate(0.037309, 11.586486)">
                                        <path d="M20.6001277,26.0310704 C19.6718051,25.8770816 18.7321438,25.7988069 17.7910194,25.7969781 C8.48365339,25.7969781 0.93636944,33.2129509 0.93636944,43.3257409 L6.55458608,43.3257409 C6.55458608,34.2616116 12.6318431,27.3606419 20.6001277,26.0310704 Z" fill="#D3E6FA"></path>
                                        <path d="M11.4237072,11.9855288 C11.4269991,6.40169456 15.9526628,1.87566504 21.5364971,1.87273888 C21.7146267,1.87273888 21.9019006,1.88224884 22.0796645,1.89139314 C18.3857602,0.160207006 14.0129881,0.818957514 10.9928309,3.56113003 C7.97230784,6.30366829 6.89621457,10.5923135 8.26346031,14.4361832 C9.6310717,18.2796872 13.1742791,20.9249308 17.2482176,21.1432951 C13.6922084,19.4816052 11.4211468,15.9105994 11.4237072,11.9855288 Z" fill="#D3E6FA"></path>
                                        <path d="M17.7910194,1.11910481e-13 C11.6888899,1.11910481e-13 6.74185997,4.94702993 6.74185997,11.0491594 C6.74185997,17.1512889 11.6888899,22.0983188 17.7910194,22.0983188 C23.8935145,22.0983188 28.8401788,17.1512889 28.8401788,11.0491594 C28.8357894,4.94885875 23.8916857,0.00475499638 17.7910194,1.11910481e-13 Z M17.7910194,19.9680783 C12.8654923,19.9680783 8.87210045,15.9750419 8.87210045,11.0491594 C8.87210045,6.12327688 12.8654923,2.13024048 17.7910194,2.13024048 C22.7169019,2.13024048 26.7099383,6.12327688 26.7099383,11.0491594 C26.7021171,15.9714869 22.7137023,19.9602572 17.7910194,19.9680783 Z" fill="#0071DC" class="primary-fill-color"></path>
                                        <path d="M17.7910194,23.9606086 C12.9877367,23.9606086 8.52096191,25.8238376 5.20636035,29.2137875 C1.84494032,32.6501902 -5.97921712e-13,37.3411817 -5.97921712e-13,42.4352508 C0.00146298361,42.9517171 0.419903077,43.3701572 0.93636944,43.3716203 L34.6456693,43.3716203 C35.1625013,43.3701572 35.5805756,42.9517171 35.5820387,42.4352508 C35.5820387,37.3506916 33.7374641,32.6501902 30.376044,29.2229318 C27.0610768,25.8333475 22.5946677,23.9606086 17.7910194,23.9606086 Z M2.3224156,41.4005992 C2.52276265,37.22142 4.11699827,33.4026955 6.84072142,30.5732349 C9.71959776,27.5866622 13.6094615,25.9411397 17.7818751,25.9411397 C21.9542886,25.9411397 25.8441524,27.5866622 28.722673,30.5732349 C31.4556483,33.4026955 33.0409875,37.22142 33.2413345,41.4005992 L2.3224156,41.4005992 Z" fill="#0071DC" class="primary-fill-color"></path>
                                    </g>
                                    <g transform="translate(27.351351, 0.000000)">
                                        <g transform="translate(1.189189, 1.189189)" fill="#D4E1F4">
                                            <polygon points="40.2725822 54.5290128 41.3166318 48.4548593 34.0082846 41.3699684 44.1149023 39.917101 46.8848964 34.3272368 44.4487806 29.429214 39.9387039 38.5334177 29.8320861 39.9862851 37.1404334 47.071176 35.4144889 57.0747738"></polygon>
                                            <path d="M15.8140888,16.0485642 C15.8140888,8.73558172 21.7782222,2.80682314 29.1360531,2.80682314 C29.5678111,2.80682314 29.985431,2.83438874 30.4030508,2.86249481 C25.9359323,-0.620495476 19.7401505,-0.907501694 14.9663424,2.14633064 C10.193078,5.20070344 7.89018746,10.9256931 9.23005112,16.4090786 C10.5699148,21.8924641 15.2578062,25.9300088 20.9087247,26.4678074 C17.6917469,23.9560979 15.8130013,20.1147554 15.8140888,16.0485642 Z"></path>
                                            <path d="M29.121915,35.3509461 C30.6939709,35.349865 32.2616766,35.5120156 33.7994746,35.8352353 C30.3024523,33.6910666 26.2703545,32.5641215 22.1615842,32.5835795 C9.89780771,32.6116856 -0.0277326025,42.3385467 -0.000115705559,55.5808283 L7.09953732,55.5667753 C8.36653495,43.7638486 17.7352489,35.3790522 29.121915,35.3509461 Z"></path>
                                        </g>
                                        <path d="M23.4864865,29.1351351 C31.5317849,29.1351351 38.0540541,22.6129865 38.0540541,14.5672984 C38.0540541,6.52214867 31.5317849,0 23.4864865,0 C15.4411881,0 8.91891892,6.52214867 8.91891892,14.5672984 C8.92645607,22.6097564 15.4438799,29.1270598 23.4864865,29.1351351 Z M23.4864865,2.75636822 C30.0098323,2.75636822 35.2976349,8.04461142 35.2976349,14.5672984 C35.2976349,21.0905237 30.0098323,26.3787669 23.4864865,26.3787669 C16.9631407,26.3787669 11.6753381,21.0905237 11.6753381,14.5672984 C11.6828752,8.04730316 16.9663709,2.76390523 23.4864865,2.75636822 Z" fill="#0071DC" class="primary-fill-color"></path>
                                        <path d="M23.5711295,32.7027027 C17.186957,32.7166483 11.2628804,35.16087 6.87209431,39.6094931 C2.42577002,44.0994164 -0.0135556368,50.2375937 -5.61949535e-05,56.8971191 C0.00277911914,57.2607756 0.14761412,57.6099501 0.404614499,57.8716969 C0.666515274,58.1302256 1.02315778,58.2734354 1.39395703,58.2703217 L37.0778063,58.2015623 L37.0778063,55.4553662 L2.82978326,55.5240211 C3.1227202,50.1276386 5.24133975,45.1978948 8.8790931,41.5318303 C12.7406327,37.6185009 17.967759,35.4628444 23.5847419,35.4628444 L23.6266678,35.4628444 C28.9447244,35.4354896 34.0645856,37.4500819 37.9005342,41.0786007 L39.8378378,39.1015542 C35.4808103,34.9801145 29.6672657,32.6903662 23.6266678,32.7166483 C23.6130555,32.7027027 23.5988986,32.7027027 23.5711295,32.7027027 Z" fill="#0071DC" class="primary-fill-color"></path>
                                        <path d="M60.6417808,40.361284 L51.2500949,38.9427513 L47.1056298,30.5009488 C46.8739584,30.0318702 46.392627,29.7333167 45.863871,29.7297297 C45.3318444,29.7214821 44.8428815,30.0162701 44.6079394,30.4875005 L40.3375542,38.8599094 L30.9322404,40.1407308 C30.405665,40.2112003 29.9657619,40.5721542 29.7995036,41.0702812 C29.6332454,41.5684084 29.7695226,42.1165634 30.150554,42.4818208 L36.9050018,49.0785087 L35.2304264,58.3051572 C35.1339421,58.8204982 35.3454443,59.3449841 35.7744453,59.6542963 C36.1990854,59.9700637 36.7714499,60.0130985 37.2396988,59.7645728 L45.6823497,55.4680919 L54.0552266,59.8888356 C54.2569171,59.9964225 54.4820471,60.0529055 54.710993,60.0540541 C55.0026264,60.0561332 55.2866283,59.9641464 55.5204801,59.7920075 C55.9549321,59.4859229 56.1767915,58.9630508 56.0928448,58.4428683 L54.5578173,49.1882473 L61.4092945,42.7023739 C61.7925063,42.340882 61.9331444,41.7959547 61.7723372,41.2978275 C61.5989925,40.8040038 61.1645405,40.4441258 60.6417808,40.361284 Z M52.8022985,48.0063198 C52.4308791,48.350698 52.2615556,48.8562238 52.3519828,49.3510064 L53.6883642,57.3570545 L46.4171632,53.5372612 C46.1926124,53.4178926 45.9419651,53.3546272 45.6870695,53.3540304 C45.4388497,53.3570146 45.1948781,53.4143115 44.9721479,53.5217432 L37.6390438,57.2347016 L39.0992316,49.2590927 C39.1878381,48.7631164 39.0257974,48.2558 38.6640884,47.8994849 L32.8069513,42.200234 L40.9793901,41.1002529 C41.4873608,41.0334065 41.9291798,40.7248389 42.1597997,40.2748194 L45.8576067,33.0327301 L49.4467796,40.3362942 C49.6658686,40.7916853 50.1040462,41.107415 50.6120167,41.1766488 L58.7528972,42.3989826 L52.8022985,48.0063198 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="counter-item-04__content">
                                <span class="counter-item-04__count count" data-count="12085">0</span>
                                <p class="counter-item-04__text">Online Learners</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                </div>
            </div>
            <!-- Counter End -->

            <!-- Why Choose Box Item Start -->
            <div class="why-choose-wrapper section-padding-02">
                <div class="row gy-6">
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Choose Box Item Start -->
                        <div class="choose-box-item">
                            <div class="choose-box-item__icon">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon/intructor-box-01.png" alt="Intructor">
                            </div>
                            <div class="choose-box-item__caption">
                                <h4 class="choose-box-item__title">Enhance personal skills</h4>
                                <p>Equip learners with a wide range of coding knowledge for education and coaching purpose</p>
                            </div>
                        </div>
                        <!-- Choose Box Item Start -->
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Choose Box Item Start -->
                        <div class="choose-box-item">
                            <div class="choose-box-item__icon">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon/intructor-box-02.png" alt="Intructor">
                            </div>
                            <div class="choose-box-item__caption">
                                <h4 class="choose-box-item__title">Sufficient Knowledge</h4>
                                <p>Study keeps your brain growing because everyone know that we cannot reach the top of knowledge</p>
                            </div>
                        </div>
                        <!-- Choose Box Item Start -->
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Choose Box Item Start -->
                        <div class="choose-box-item">
                            <div class="choose-box-item__icon">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon/intructor-box-03.png" alt="Intructor">
                            </div>
                            <div class="choose-box-item__caption">
                                <h4 class="choose-box-item__title">Self Learning</h4>
                                <p>You can learn anytime from anywhere, so, you control your study with all our tools & courses</p>
                            </div>
                        </div>
                        <!-- Choose Box Item Start -->
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Choose Box Item Start -->
                        <div class="choose-box-item">
                            <div class="choose-box-item__icon">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/icon/intructor-box-04.png" alt="Intructor">
                            </div>
                            <div class="choose-box-item__caption">
                                <h4 class="choose-box-item__title">Get Promote in Career</h4>
                                <p>Having a sound basis of skills and knowledge with us and boost up your career</p>
                            </div>
                        </div>
                        <!-- Choose Box Item Start -->
                    </div>
                </div>
            </div>
            <!-- Why Choose Box Item End -->

        </div>

        <div class="why-choose-section-02__shape-01" data-depth="-0.6"></div>
        <div class="why-choose-section-02__shape-02" data-depth="0.6"></div>
        <img class="why-choose-section-02__shape-03" data-depth="-0.6" src="<?php echo base_url(); ?>assets/frontend/images/shape/edumall-shape-01.png" alt="Shape">
        <div class="why-choose-section-02__shape-04" data-depth="0.6"></div>
    </div>
    <!-- Why Choose End -->

    <!-- Testimonial Start -->
    <div class="testimonial-section section-padding-01">
        <div class="container">
            <div class="row gy-10">
                <div class="col-xl-3 col-lg-5 col-md-9 col-sm-7">

                    <!-- Section Title Start -->
                    <div class="section-title mb-0" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="section-title__title-02">What Our <br> Learners <mark>Say</mark></h2>
                        <p>People love EduMall, so do you. Because this is the All-in-one solution for any Online studying, eLearning center.</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="section-btn" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" class="btn btn-light btn-hover-primary">View all</a>
                    </div>

                </div>

                <div class="col-xl-9">
                    <!-- Event Active Start -->
                    <div class="event-active swiper-dots-style" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-01.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>Working with <mark>@edumall</mark> is like having a family member who can fix everything. They know what you need, exactly when you need it.</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-02.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>I have chance to use <mark>@edumall</mark> to create my online center's website. It's amazing experience, I'd love your product so much.</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-03.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>I have done some researches and found out <mark>@edumall</mark>. Fortunately, I am not regret for my choice, it's perfectly for my project!</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-04.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>I have done some researches and found out <mark>@edumall</mark>. Fortunately, I am not regret for my choice, it's perfectly for my project!</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-01.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>Working with <mark>@edumall</mark> is like having a family member who can fix everything. They know what you need, exactly when you need it.</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item-02 testimonial-item-bg">

                                        <div class="testimonial-image">
                                            <img src="<?php echo base_url(); ?>assets/frontend/images/avatar/avatar-02.jpg" alt="Avatar" width="70" height="70">
                                        </div>

                                        <div class="testimonial-caption-02">
                                            <p>I have chance to use <mark>@edumall</mark> to create my online center's website. It's amazing experience, I'd love your product so much.</p>
                                        </div>

                                        <div class="testimonial-info-02__caption">
                                            <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                            <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                        </div>

                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Event Active End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Newsletter Start -->
    <div class="newsletter-section">
        <div class="container position-relative scene">
            <div class="newsletter">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper">

                    <div class="newsletter__content" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="newsletter__title"> Subscribe <br> <span>Our Newsletter</span> </h3>
                    </div>
                    <div class="newsletter__form" data-aos="fade-up" data-aos-duration="1000">
                        <form action="#">
                            <input type="text" placeholder="Your e-mail">
                            <button class="btn btn-secondary btn-hover-primary">Subscribe</button>
                        </form>
                    </div>

                </div>
                <!-- Newsletter Wrapper End -->
            </div>

            <div class="newsletter-section__shape-01" data-depth="-0.6"></div>
            <div class="newsletter-section__shape-02" data-depth="0.6"></div>
            <div class="newsletter-section__shape-03" data-depth="-0.6"></div>
            <div class="newsletter-section__shape-04" data-depth="0.6"></div>

        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <div class="footer-section footer-bg-1">

        <!-- Footer Widget Area Start -->
        <div class="footer-widget-area section-padding-01">
            <div class="container">
                <div class="row gy-6 align-items-center">

                    <div class="col-lg-3 order-lg-1">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget text-center text-lg-start">
                            <a href="#" class="footer-widget__logo"><img src="<?php echo base_url(); ?>assets/images/dark-logo.png" alt="Logo" width="150" height="32"></a>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-lg-3 order-lg-3">
                        <!-- Footer Widget Start -->
                        <!-- <div class="footer-widget">
                            <div class="footer-widget__social justify-content-lg-end m-0">
                                <a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div> -->
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-lg-6 order-lg-2">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget d-flex flex-wrap  gap-4 gap-md-8 align-items-center justify-content-center text-center">
                            <p class="footer-widget__copyright m-0">&copy; 2022 <span> EduMall </span> Made with <i class="fa fa-heart"></i> by <a href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio">BootXperts</a></p>
                            <ul class="footer-widget__link footer-widget__link-02 flex-wrap justify-content-center flex-row gap-3 gap-sm-8">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Accessibility</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Widget Area End -->

    </div>
    <!-- Footer End -->

    <!--Back To Start-->
    <button id="backBtn" class="back-to-top backBtn">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </button>
    <!--Back To End-->


</main>





<!-- Edumall Demo Option Start -->
<!-- <div class="edumall-demo-option">

    <div class="edumall-demo-option__toolbar">
        <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left" title="Select Demo"><i class="far fa-ruler-triangle"></i></button>
        <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip" data-bs-placement="left" title="Support Channel"><i class="far fa-life-ring"></i></a>
        <a class="toolbar-action" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio" data-bs-tooltip="tooltip" data-bs-placement="left" title="Purchase EduMall"><i class="far fa-shopping-cart"></i></a>
    </div>

    <div class="edumall-demo-option__panel">

        <div class="edumall-demo-option__header">
            <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template</h5>
            <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio"><i class="far fa-shopping-cart"></i> Buy Now</a>
        </div> -->

        <!-- <div class="edumall-demo-option__body"> -->
            <!-- <div class="edumall-demo-option-item">
            <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                <img src="<?php echo base_url(); ?>assets/frontend/images/demo/landing.jpg" alt="">
            </a>
        </div> -->
            <!-- <div class="edumall-demo-option-item">
                <a href="index-main.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-01.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Course Hub">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-02.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Academy">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-03.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Education Center">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-04.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="University">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-05.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Language Academic">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-06.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Single Instructor">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-07.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-08.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Art">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/demo/home-09.jpg" alt="Home" width="130" height="158">
                </a>
            </div>
        </div>

    </div>

</div> -->
<!-- Edumall Demo Option End -->


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


<!-- Activation JS -->
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>