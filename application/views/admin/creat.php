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


    <div class="container-fluid">

    <div class="row justify-content-center">
    <div class="col-sm-12 col-lg-12 col-md-12">
    <div class="white-box analytics-info">





                    <h3>Create</h3> <br>
                    <form action="<?php echo base_url('admin_creat_act'); ?>" method="post" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="row">
                                <label for="title">Title</label>
                                <input name='title' type="text" id="title" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="row">
                                <label for="desc">Description</label>
                                <textarea name="descr" id="desc" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-6 col-sm-6 col-lg-2 col-md-2" style="float: left; margin: 0px 0px;">
                            <div class="row">
                                <label for="date">Date</label> <br>
                                <input name="date" type="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-lg-1 col-md-1" style="float: left;  margin: 0px 40px;">
                            <div class="row">
                                <label for="cate">Category</label> <br>
                                <select name="cate" id="cate" class="form-control">
                                    <option value="">~Select~</option>
                                    <option value="Health">~Health~</option>
                                    <option value="Travel">~Travel~</option>
                                    <option value="Business">~Business~</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3" style="float: left; margin: 0px 35px;">
                            <div class="row">
                                <label for="status">Status</label> <br>
                                <select name="status" id="status" class="form-control">
                                    <option value="">~Select~</option>
                                    <option value="Active">~Active~</option>
                                    <option value="Deactive">~Deactive~</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3" style="float: left; margin: 0px 30px;">
                            <div class="row">
                                <label for="img"> Image <br>
                                    <img style="width: 75px;" src="<?php echo base_url('public/admin/assets/myimg/') ?>letter.gif" alt="">
                                </label> <br>
                                <input name="myimage" type="file" id="img" class="form-control" hidden>
                            </div>  <br>
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-lg-12 col-md-12" style="float: left; ">
                            <div class="row">
                                <button type="submit" class="btn btn-primary form-control">Send</button>
                            </div>
                        </div>

                    </form >








    </div>
    </div>


    </div>





        <?php $this->load->view('admin/includes/scripts') ?>