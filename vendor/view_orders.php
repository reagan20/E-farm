<?php require_once('include/header.php')?>
<?php require_once('include/sidebar.php')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Ordered Products</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-envelope-o"></i> Tables</li>
            <li class="active"><i class="fa fa-table"></i> Ordered Products</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <h4>Basic Tables</h4>
                    <div class="table-responsive">
                        <table class="table table-responsive dataTables">
                            <thead>
                            <tr>
                                <th class="sortable">S/N</th>
                                <th class="sortable">Email</th>
                                <th class="sortable">Phone</th>
                                <th class="sortable">Address</th>
                                <th class="sortable">Town</th>
                                <th class="sortable">Category</th>
                                <th class="sortable">Description</th>
                                <th class="sortable">Qty</th>
                                <th class="sortable">Unit Price</th>
                                <th class="sortable">Grand Price</th>
                                <th class="sortable">Order Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tr>
                                <td class="text-truncate">1</td>
                                <td class="text-truncate"><a href="#">madam@gmail.com</a></td>
                                <td class="text-truncate">0711111111</td>
                                <td class="text-truncate">179</td>
                                <td class="text-truncate">Kisumu</td>
                                <td class="text-truncate">Vegetable</td>
                                <td class="text-truncate">2KG</td>
                                <td class="text-truncate">3</td>
                                <td class="text-truncate">150</td>
                                <td class="text-truncate">450</td>
                                <td class="text-truncate">2018/13/06</td>
                                <td class="text-truncate"><span class="lable-tag tag-success">Pending</span></td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</div>

<?php require_once('include/footer.php')?>
