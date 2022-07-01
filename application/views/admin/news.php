<?php $this->load->view('admin/includes/headlinks') ?>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<?php $this->load->view('admin/includes/preloader') ?>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<?php $this->load->view('admin/includes/header') ?>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<?php $this->load->view('admin/includes/leftbar') ?>

<div class="page-wrapper">

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="white-box analytics-info">
                    <h5>New list</h5>
                    <a href="<?php echo 'admin_creat' ?>">
                        <button type="button" class="btn btn-success" style="display: block; margin-left: auto; margin-right: 0; margin-bottom: 10px; ">Creat</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Img</th>
                                <th>Status</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Corona-virus is over.</td>
                                <td>sjsjsjsj</td>
                                <td>June 28, 2022</td>
                                <td>Health</td>
                                <td><img style="width: 60px ;" src="https://www.who.int/images/default-source/health-topics/health-financing/novelcoronavirus-optimized.jpg?sfvrsn=755458c4_12" alt=""></td>
                                <td>Active</td>
                                <td>
                                    <i class="fas fa-pencil-alt" style="margin-left: 10px; margin-right: 10px;"></i>
                                    <i class="fas fa-eraser"></i>
                                </td>

                                
                            </tr>
                            <tr>
                                <th>2</th>
                                <td></td>

                            </tr>
                            <tr>
                                <th>3</th>
                                <th></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>









        <?php $this->load->view('admin/includes/scripts') ?>