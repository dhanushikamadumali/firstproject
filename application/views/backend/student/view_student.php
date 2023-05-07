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
                                Student Details
                            </div>
                            <div class="card-body">

                                <div class="userDatatable global-shadow border-0 bg-white w-100">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    
                                                    <th>
                                                        <span class="userDatatable-title">Member Id</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Image</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Full Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Display Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">year</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Address</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">School</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Telephone No</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Gender</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Date of Birth</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Parent Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Parent Telephone No</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">QR Image</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Email</span>
                                                    </th> 

                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            
                                            <?php
                                             $this->db->select("student_details.*,schools.name as name");
                                            $this->db->join("schools","student_details.school=schools.id");
                                    $sdetails = $this->Common_model->get_all("student_details")->result();
                                    foreach ($sdetails as $row) {
                                        ?>

                                         <tr>  
                                            <td><?php echo $row->member_id ?></td>
                                            <td><?php echo $row->image ?></td>
                                            <td><?php echo $row->full_name ?></td>
                                            <td><?php echo $row->display_name ?></td>
                                            <td><?php echo $row->year ?></td>
                                            <td><?php echo $row->address ?></td>
                                            <td><?php echo $row->name ?></td>
                                            <td><?php echo $row->telephone_no ?></td>
                                            <td><?php echo ($row->gender==1)?"Male":"Female" ?></td>
                                            <td><?php echo $row->date_of_birth ?></td>
                                            <td><?php echo $row->parent_name ?></td>
                                            <td><?php echo $row->parent_phone ?></td>
                                            <td><?php echo $row->qr_image ?></td>
                                            <td><?php echo $row->email ?></td> 
                                            <td><a href="<?php echo base_url() ?>index.php/student/update_student?id=<?php echo $row->id ?>"
                                                   ><i class="fa fa-edit"> </i></a>
                                                <a href="<?php echo base_url() ?>index.php/student/delete_student?id=<?php echo $row->id ?>"
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