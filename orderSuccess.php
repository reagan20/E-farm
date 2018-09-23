<?php require_once('inc/header.php'); ?>
    <!-- HEADER END -->

    <!-- BANNER STRAT -->
    <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
        <section class="banner-detail">
            <h1 class="banner-title">Order Success</h1>
            <div class="bread-crumb mt-30">
                <ul>
                    <li><a href="index.php">Home</a>/</li>
                    <li><span>Login</span></li>
                </ul>
            </div>
        </section>
    </div>
    <!-- BANNER END -->

    <div class="mian-contain">
        <div class="container">

            <!-- CONTAIN START ptb-95-->
            <section class="checkout-section ptb-95 ptb-sm-60 ptb-xs-30">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                                <div class="panel panel-success">
                                    <div class="panel-body">
                                    <div class="row">
                                    <div class="col-md-12">

                                            <h1 style="color: green;"><i class="fa fa-ok"></i> Thank You!</h1>
                                            <p style="color: #34a853; font-size: 18px;">Your order has been Placed successfully. order ID is: <?php echo $_GET['id']?></p>
                                            <p>We will alert you when your order is delivered. </p>
                                            <p>Thanks for shopping with us.</p>
                                            <a class="btn btn-success" href="index"><i class="fa fa-backward"></i> Go Back</a>

                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CONTAINER END -->
        </div>
    </div>

<?php require_once('inc/footer.php');?>