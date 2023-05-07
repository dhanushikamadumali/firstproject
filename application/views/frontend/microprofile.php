
        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">My Profile</h4>
                <?php
                if ($this->session->userdata('member_id')):
                    $member = $this->Common_model->get_all("member",["id"=>$this->session->userdata('member_id')])->result();
                    if($member != ""):
                        ?>

                <!-- Dashboard Profile Start -->
                <div class="dashboard-profile">

                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Registration Date</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->add_date ?></p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Name</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->name ?></p>
                        </div>
                    </div>
                   
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Date of birth</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->dob ?></p>
                        </div>
                    </div>
                   
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Email</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->email ?></p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Phone Number</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->contact ?></p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Address</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->address1 ?></p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Address</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $member[0]->address2 ?></p>
                        </div>
                    </div>
                    <?php
                    $country = $this->Common_model->get_all("country",["id"=>$member[0]->country])->result();
                    if($country != ""):
                        ?>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Country</div>
                        <div class="dashboard-profile__content">
                            <p><?php  echo $country[0]->name  ?></p>
                        </div>
                    </div>

                    <?php
                    endif;
                    ?>
                   
                    <div class="dashboard-header__btn" style="margin-top:20px">
                        <a class="btn btn-primary"  href="<?php echo base_url() ?>index.php/frontend/Editmember?id=<?php echo $member[0]->id ?>"><i class="edumi edumi-content-writing"></i> <span class="text">Edit </span></a>
                    </div>  

                </div>
                <!-- Dashboard Profile End -->
                <?php
                 endif;
                endif;
                ?>
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->



