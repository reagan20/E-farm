<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Vendor Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <a href="view_orders.php">
                <div class="col-lg-3 col-xs-6">
                    <div class="media-box bg-green">
                        <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
                        <div class="media-info">
                            <h5>New Orders</h5>
                            <h3>5324</h3>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box">
                    <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
                    <div class="media-info">
                        <h5>Delivered Orders</h5>
                        <h3>1530</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box bg-blue">
                    <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
                    <div class="media-info">
                        <h5>Pending Orders</h5>
                        <h3>935</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="media-box bg-sea">
                    <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
                    <div class="media-info">
                        <h5>Total Salest</h5>
                        <h3>$8,530</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="chart-box">
                    <h4>Product Sales</h4>
                    <div class="chart">
                        <div id="container"></div>
                        <!--for values check "Product Sales" chart on char-function.js-->
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="chart-box">
                    <h4>Sales Overview</h4>
                    <div class="chart">
                        <div id="container1"></div>
                        <!--for values check "Sales Overview" chart on char-function.js-->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- content -->
</div>
<!-- content-wrapper -->

<?php require_once('include/footer.php');?>