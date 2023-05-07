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
                    Course Module Details
                </div>
                <div class="card-body">
                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless">
                                <thead>
                                    <tr class="userDatatable-header">

                                        <th>
                                            <span class="userDatatable-title">Title</span>
                                        </th>
                                        
                                        <th>
                                            <span class="userDatatable-title">Description</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Youtube Link</span>
                                        </th>                                               

                                        <th>
                                            <span class="userDatatable-title float-right"></span>
                                        </th>
                                    </tr>
                                </thead>
                                <?php
                                $sdetails = $this->Common_model->get_all("course_module")->result();
                                if($sdetails ):
                                    foreach ($sdetails as $row) :
                                ?>
                                <tr>
                                <td><?php echo $row->title ?></td>
                                <td><?php echo $row->description ?></td>
                                <td><?php echo $row->youtube_link ?></td>
                                <td>
                                    <a class="" href="<?php echo base_url() ?>index.php/quiz?id=<?php echo $row->id?>"><button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">ADD QUIZE</button></a>
                                    <a href="<?php echo base_url() ?>index.php/course/update_course_module?id=<?php echo $row->id ?>"
                                       ><i class="fa fa-edit"> </i></a>
                                
                                </td>
                                </tr>
                                <?php
                                endforeach;
                                endif;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>