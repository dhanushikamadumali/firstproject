<div class="contents">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title"></h4>
                            
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Course Details
                            </div>
                            <div class="card-body">

                                <div class="userDatatable global-shadow border-0 bg-white w-100">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">

                                                    <th>
                                                        <span class="userDatatable-title">Image</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Title</span>
                                                    </th>
                                                    
                                                    <th>
                                                        <span class="userDatatable-title">Description</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Language</span>
                                                    </th>                                               

                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <?php
                                             $this->db->select("course.*,language.language as language");
                                            $this->db->join("language","course.lang=language.id");
                                    $sdetails = $this->Common_model->get_all("course")->result();
                                    foreach ($sdetails as $row) {
                                        ?>
                                          

                                         <tr>
                                            <td><?php echo $row->image ?></td>  
                                            <td><?php echo $row->title ?></td>
                                            <td><?php echo $row->description ?></td>
                                            <td><?php echo $row->language ?></td>
                                            
                                            
                                            <td><a href="<?php echo base_url() ?>index.php/course/update_course?id=<?php echo $row->id ?>"
                                                   ><i class="fa fa-edit"> </i></a>
                                                <a href="<?php echo base_url() ?>index.php/course/delete_course?id=<?php echo $row->id ?>"
                                                   ><i class="fa fa-trash"> </i></a>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>

                                               

                                            
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>