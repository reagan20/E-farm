<?php require_once('include/header.php');?>
<?php require_once('include/leftsidebar.php');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="media-box">
                    <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
                    <div class="media-info">
                        <h5>Total Leads</h5>
                        <h3>1530</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box bg-sea">
                    <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
                    <div class="media-info">
                        <h5>Total Payment</h5>
                        <h3>$8,530</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box bg-blue">
                    <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
                    <div class="media-info">
                        <h5>Total Sales</h5>
                        <h3>935</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box bg-green">
                    <div class="media-icon pull-left"><i class="icon-layers"></i> </div>
                    <div class="media-info">
                        <h5>New Orders</h5>
                        <h3>5324</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-primary" data-toggle="modal" data-target="#test">Test modal</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">test</div>
                    <div class="panel-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Test</label>
                                    <input type="text" name="" required="required" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="test" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Add New Product</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-12">
                                    <p></p>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <a class="btn btn-success" href=""><i class="fa fa-plus-square"></i>Subscribe Here</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</div>
<!-- content-wrapper -->
<?php require_once('include/footer.php');?>
