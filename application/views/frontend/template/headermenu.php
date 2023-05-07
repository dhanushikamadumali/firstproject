 <!-- Header start -->
 <div class="header-section header-sticky">

<!-- Header Top Start -->
<div class="header-top d-none d-sm-block">
    <div class="container">

        <!-- Header Top Bar Wrapper Start -->
        <div class="header-top-bar-wrap d-sm-flex justify-content-between">

            <div class="header-top-bar-wrap__info">
                <ul class="header-top-bar-wrap__info-list">
                    <li><a href="tel:+94771254636"><i class="fas fa-phone"></i> <span class="info-text">+94 771 254 636</span></a></li>
                    <li><a href="mailto:info@digizen.edu.lk"><i class="far fa-envelope"></i> <span class="info-text">info@digizen.edu.lk</span></a></li>
                </ul>
            </div>

            <div class="header-top-bar-wrap__info d-sm-flex">
                <ul class="header-top-bar-wrap__info-list d-none d-lg-flex">
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
<div class="header-main">
    <div class="container">
        <!-- Header Main Wrapper Start -->
        <div class="header-main-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a class="header-logo__logo" href="index-main.html"><img src="<?php echo base_url(); ?>assets/images/dark-logo.png" width="296" height="64" alt="Logo"></a>
            </div>
            <!-- Header Logo End -->
            <!-- Header Inner Start -->
            <div class="header-inner">
                <!-- Header Navigation Start -->
                <div class="header-navigation d-none d-xl-block">
                    <nav class="menu-primary">
                        <ul class="menu-primary__container">
                        <li><a class="active" href="<?php echo base_url(); ?>index.php"><span>Home</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/course"><span>Courses</span></a></li>

                        </ul>
                    </nav>
                </div>
                <!-- Header Navigation End -->

                       

                <!-- Header Mobile Toggle Start -->
                <div class="header-toggle">
                    <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
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