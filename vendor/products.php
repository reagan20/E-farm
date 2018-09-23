<?php require_once('include/header.php');?>
<?php require_once('include/sidebar.php');?>

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
                    <a href="" data-toggle="modal" data-target="#add_product" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> AddProduct</a>
                </div>
            </div><br/>
            <div>
                <?php
                if(isset($msg)){
                    echo $msg;
                }
                ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">test</div>
                        <div class="panel-body">
                        <div class="row">
                            <?php
                            $query=$conn->query("SELECT * FROM products WHERE vendor_id='$vendor_id'");
                            while($q1=mysqli_fetch_assoc($query)){
                                ?>
                                <div class="col-md-3">
                                    <div class="well well-sm">
                                        <img src="../images/products/<?php echo $q1['image'];?>" style="width: 100%; height: 200px;"/>
                                        <h5>Category: <?php echo $q1['category'];?></h5>
                                        <h5>Name: <?php echo $q1['product_name'];?></h5>
                                        <h5>Qty: <?php echo $q1['qty'];?></h5>
                                        <h5>Price: <?php echo $q1['price'];?></h5>
                                        <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#update_product<?php echo $q1['id'];?>">Update</a>
                                        <a class="btn btn-danger btn-sm"><i class="fa fa-remove"></i> Remove</a>
                                    </div>
                                </div>

                                <!--update product modal-->
                                <div id="update_product<?php echo $q1['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                <h4 class="modal-title">Update Product</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="queries.php?id=<?php echo $q1['id'];?>" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Product Name:</label>
                                                            <input class="form-control" name="product_name" type="text" value="<?php echo $q1['product_name'];?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Product Category:</label>
                                                            <select class="form-control" name="category">
                                                                <option value="<?php echo $q1['category']?>"><?php echo $q1['category']?></option>
                                                                <option value="Vegetable">Vegetable</option>
                                                                <option value="Grains">Grains</option>
                                                                <option value="Fruits">Fruits</option>
                                                                <option value="Animal Product">Animal Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Quantity:</label>
                                                            <input class="form-control" name="qty" type="number"  value="<?php echo $q1['qty']?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Unit Price:</label>
                                                            <input class="form-control" name="price" type="number"  value="<?php echo $q1['price']?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="control-label">Image:</label>
                                                            <input class="form-control" name="image" type="file">
                                                            <input class="form-control" name="image2" value="<?php echo $q1['image']?>"  type="hidden">
                                                        </div>
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="control-label">Description:</label>
                                                            <textarea class="form-control" rows="5" name="description"  value="<?php echo $q1['description']?>"><?php echo $q1['description']?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" name="update" class="btn btn-success btn-xs" href=""><i class="fa fa-save"></i> Save</button>
                                                        <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Add product modal-->
            <div id="add_product" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <h4 class="modal-title">Add New Product</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="" enctype="multipart/form-data">
                            <?php require_once('queries.php');?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Product Name:</label>
                                        <input class="form-control" name="product_name" type="text" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Product Category:</label>
                                        <select class="form-control" name="category">
                                            <option value="">~~Select Category~~</option>
                                            <option value="Vegetable">Vegetable</option>
                                            <option value="Grains">Grains</option>
                                            <option value="Fruits">Fruits</option>
                                            <option value="Animal Product">Animal Products</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Product Category:</label>
                                        <select class="form-control" name="sub_category">
                                            <option value="">~~Select Category~~</option>
                                            <option value="Vegetable">Vegetable</option>
                                            <option value="Grains">Grains</option>
                                            <option value="Fruits">Fruits</option>
                                            <option value="Animal Product">Animal Products</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Quantity:</label>
                                        <input class="form-control" name="qty" type="number" required="required">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Unit Price:</label>
                                        <input class="form-control" name="price" type="number" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Image:</label>
                                        <input class="form-control" name="image" type="file" required="required">
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Description:</label>
                                        <textarea class="form-control" rows="5" name="description"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="add_product" class="btn btn-success" href=""><i class="fa fa-save"></i> Save</button>
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