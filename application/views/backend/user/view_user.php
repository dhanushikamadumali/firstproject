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
                                User Details
                            </div>
                            <div class="card-body">

                                <div class="userDatatable global-shadow border-0 bg-white w-100">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    
                                                    <th>
                                                        <span class="userDatatable-title">User Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Email</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">User Role</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Prefix</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            
                                              <?php
                                    $sdetails = $this->Common_model->get_all("system_user")->result();
                                    foreach ($sdetails as $row) {
                                        ?>

                                         <tr>  
                                            <td><?php echo $row->user_name ?></td>
                                            <td><?php echo $row->email ?></td>
                                            <td><?php echo $row->user_role ?></td>
                                            <td><?php echo $row->prefix ?></td>
                                            <td><a href="<?php echo base_url() ?>index.php/user/update_user?id=<?php echo $row->id ?>"
                                                   ><i class="fa fa-edit"> </i></a>
                                                <a href="<?php echo base_url() ?>index.php/user/delete_user?id=<?php echo $row->id ?>"
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
                </div>