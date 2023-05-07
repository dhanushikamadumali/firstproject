
    <!-- Dashboard Content Start -->
    <div class="dashboard-content">

        <div class="container">
            <h4 class="dashboard-title">Enrolled Courses</h4>
            <?php
            if ($this->session->userdata('member_id')):
                $this->db->select('course_enroll.*,course.image as cimage,course.title as ctitle,course.description as cdescrip');
                $this->db->join("course","course.id=course_enroll.course_id","right");
                // $user = $this->Common_model->get_all('system_user')->result();
                $course_enroll = $this->Common_model->get_all("course_enroll",["member_id"=>$this->session->userdata('member_id')])->result();
                if($course_enroll  != ""):
                    
                   
                    ?>
            <!-- Dashboard Course Start -->
            <div class="dashboard-course">

                <!-- Dashboard Tabs Start -->
                <div class="dashboard-tabs-menu">
                    <ul>
                        <li><a class="active" href="#">All Courses</a></li>
                        <li><a href="#">Active Courses</a></li>
                        <li><a href="#">Completed Courses</a></li>
                    </ul>
                </div>
                <!-- Dashboard Tabs End -->

                <!-- Dashboard Course List Start -->
                <div class="dashboard-course-list">

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-course-item">
                        <a class="dashboard-course-item__link" href="course-single-layout-01.html">
                            <div class="dashboard-course-item__thumbnail">
                                <img src="<?php echo base_url() ?>assets/content/course/<?php  echo $course_enroll[0]->cimage ?>" alt="Courses" width="260" height="160">
                               
                            </div>
                            <div class="dashboard-course-item__content">
                                <div class="dashboard-course-item__rating">
                                    <div class="rating-star">
                                        <div class="rating-label" style="width: 80%;"></div>
                                    </div>
                                </div>
                                <h3 class="dashboard-course-item__title"><?php  echo $course_enroll[0]->ctitle ?></h3>
                                <div class="dashboard-course-item__meta">
                                    <ul class="dashboard-course-item__meta-list">
                                        <li>
                                            <span class="meta-label">Total Lessons:</span>
                                            <span class="meta-value">6</span>
                                        </li>
                                        <li>
                                            <span class="meta-label">Completed Lessons:</span>
                                            <span class="meta-value">0/6</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dashboard-course-item__progress-bar-wrap">
                                    <div class="dashboard-course-item__progress-bar">
                                        <div class="dashboard-course-item__progress-bar-line" style="width: 22%;"></div>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-text">22% Complete</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Dashboard Course Item End -->


                  
                

                </div>
                <!-- Dashboard Course List End -->

            </div>
            <!-- Dashboard Course End -->
            <?php
             endif;
            endif;
            ?>
        </div>


    </div>
    <!-- Dashboard Content End -->


</main>
<!-- Dashboard Main Wrapper End -->

