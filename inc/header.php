<?php
require_once('config/dbconnect.php');
//session_start();

require_once'Cart.php';
$cart=new Cart;

?>

<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>E-Farming System</title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css\jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css\fotorama.css">
    <link rel="stylesheet" type="text/css" href="css\magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css\custom.css">
    <link rel="stylesheet" type="text/css" href="css\responsive.css">
    <link rel="shortcut icon" href="images\favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <style>
        .required, .error{
            color: red;
        }
    </style>
</head>
<body class="homepage">

<div class="main">
    <!-- HEADER START -->
    <header class="navbar navbar-custom" id="header">
        <div class="header-top" style="">
            <div class="container">
                <div class="header-inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-link top-link-left visible-lg visible-md">
                                <fieldset>
                                    <a href="index"><h2 style="margin-top: 20px; color: green;">E-FARMING SYSTEM</h2></a>

                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="navbar-header align-center float-left-sm"> <a class="navbar-brand page-scroll" href="index"> <img  src=""> </a> </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="right-side float-none-sm position-r">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                                <!-- <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-close"></i></button> -->
                                <div class="right-side float-left-xs header-right-link">
                                    <ul>
                                        <li class="main-search">
                                            <div class="header_search_toggle desktop-view">
                                                <form method="post">
                                                    <div class="search-box">
                                                        <select class="input-text" name="search" placeholder="Search acording to category">
                                                            <option>~~Search according to category~~</option>
                                                            <option value="1">Vegetable</option>
                                                        </select>
<!--                                                        <input class="input-text" type="text" placeholder="Search entire store here...">-->
<!--                                                        <button class="search-btn"></button>-->
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li class="cart-icon">
                                            <a href="#">
                                                <span>
                                                    <small class="cart-notification"><?php echo $cart->total_items(); ?></small>
                                                </span>
                                            </a>
                                            <div class="cart-dropdown header-link-dropdown" style="background-color: green;">
                                                <ul class="cart-list link-dropdown-list">
                                                    <li>
                                                        <?php
                                                        if($cart->total_items()>0){
                                                            $cartItems=$cart->contents();
                                                            foreach($cartItems as $item){
                                                             ?>
                                                                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"];?>" class="close-cart" title="Remove from cart">
                                                                    <i class="fa fa-times-circle"></i>
                                                                </a>
                                                                <div class="media"> <a class="pull-left"> <img alt="Onlineshop" src="images\1.jpg"></a>
                                                                    <div class="media-body"> <span><a><?php echo $item["product_name"];?></a></span>
                                                                        <p class="cart-price"><?php echo 'KSH.' .$item["price"].'.00';?></p>
                                                                        <div class="product-qty">
                                                                            <label>Qty:</label>
                                                                            <div class="custom-qty">
                                                                                <input type="number" name="qty" value="<?php echo $item["qty"]?>" title="Qty" class="input-text qty">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        else{
                                                            ?>
                                                            Your cart is currently empty
                                                        <?php

                                                        }
                                                        ?>

                                                    </li>
                                                </ul>
                                                <p class="cart-sub-totle">
                                                    <span class="pull-left">Cart Subtotal:</span>
                                                    <span class="pull-right"><strong class="price-box"><?php echo 'KSH.' .$cart->total().'.00';?></strong></span>
                                                </p>
                                                <div class="clearfix"></div>
                                                <div class="mt-20">
                                                    <a href="viewCart" class="btn btn-success">View Cart</a>
                                                    <a href="checkout" class="btn btn-warning right-side">Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_search_toggle mobile-view">
                        <form>
                            <div class="search-box">
                                <input class="input-text" type="text" placeholder="Search entire store here...">
                                <button class="search-btn"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom" style="background-color: lightgreen">
            <div class="container">
                <div id="menu" class="navbar-collapse collapse align-center">
                    <ul class="nav navbar-nav navbar-left">
                        <?php
                        $stmt1=$conn->query("SELECT * FROM products WHERE category='Vegetable'");
                        $row1=mysqli_fetch_assoc($stmt1);
                        $cat1=$row1['category'];
                        ?>
                        <li class="level"><a href="index" class="page-scroll"><i class="fa fa-home"></i> Home </a></li>
                        <li class="level"> <span class="opener plus"></span> <a href="shop?prod_id=<?php echo $cat1; ?>" class="page-scroll">Vegetables</a>
                            <div class="megamenu full mobile-sub-menu" style="background-color: green;">
                                <div class="megamenu-inner-top">
                                    <ul class="sub-menu-level1">
                                        <li class="level2"> <a><span>Leaves</span></a>
                                            <ul class="sub-menu-level2">
                                                <?php
                                                $sql=$conn->query("SELECT * FROM products WHERE category='Vegetable' AND sub_category='Leaves' ORDER BY product_name ASC");
                                                while($r=mysqli_fetch_assoc($sql)){
                                                    ?>
                                                    <li class="level3"><img src="images/products/<?php echo $r['image']?>" style="width: 50px; height: 50px;"><a href="single?prod_id=<?php echo $r['id'];?>"><?php echo $r['product_name']; ?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li class="level2"> <a><span>Fruits</span></a>
                                            <ul class="sub-menu-level2 ">
                                                <?php
                                                $sql=$conn->query("SELECT * FROM products WHERE category='Vegetable' AND sub_category='Fruits' ORDER BY product_name ASC");
                                                while($r=mysqli_fetch_assoc($sql)){
                                                    ?>
                                                    <li class="level3"><img src="images/products/<?php echo $r['image']?>" style="width: 50px; height: 50px;"><a href="single?prod_id=<?php echo $r['id'];?>"><?php echo $r['product_name']; ?></a></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li class="level2"> <a><span>Roots</span></a>
                                            <ul class="sub-menu-level2 ">
                                                <?php
                                                $sql=$conn->query("SELECT * FROM products WHERE category='Vegetable' AND sub_category='Roots' ORDER BY product_name ASC");
                                                while($r=mysqli_fetch_assoc($sql)){
                                                    ?>
                                                    <li class="level3"><img src="images/products/<?php echo $r['image']?>" style="width: 50px; height: 50px;"><a href="single?prod_id=<?php echo $r['id'];?>"><?php echo $r['product_name']; ?></a></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <?php
                        $stmt=$conn->query("SELECT * FROM products WHERE category='Fruits'");
                        $row=mysqli_fetch_assoc($stmt);
                        $cat=$row['category'];
                        ?>
                        <li class="level"> <span class="opener plus"></span> <a href="shop?prod_id=<?php echo $cat; ?>" class="page-scroll">Fruits</a>
                            <div class="megamenu full mobile-sub-menu" style="background-color: green;">
                                <div class="megamenu-inner">
                                    <div class="megamenu-inner-top">
                                        <div class="row">
                                            <div class="col-md-3 level2"> <a><span>Men Fashion</span></a>
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="shop?prod_id=<?php ?>"><span>?</span>Blazer & Coat</a></li>
                                                    <li class="level3"><a href="shop.html"><span>?</span>Sport Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 level2"> <a><span>Juniors kid</span></a>
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="shop.html"><span>?</span>Blazer & Coat</a></li>
                                                    <li class="level3"><a href="shop.html"><span>?</span>Sport Shoes</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 level2"> <a><span>Men Clothings</span></a>
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="shop.html"><span>?</span>Blazer & Coat</a></li>
                                                    <li class="level3"><a href="shop.html"><span>?</span>Chinos & Trousers</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 level2 visible-lg visible-md"> <a href=""> <img src="images\products\index.jpg" alt="Onlineshop"> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="level"> <span class="opener plus"></span> <a class="page-scroll">Grains</a>
                            <div class="megamenu mobile-sub-menu" style="background-color: green;">
                                <div class="megamenu-inner-top">
                                    <ul class="sub-menu-level2 ">
                                        <li class="level3"><a href="shop.html">Blazer & Coat</a></li>
                                        <li class="level3"><a href="shop.html">Sport Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="level"> <span class="opener plus"></span> <a class="page-scroll">Accounts</a>
                            <div class="megamenu mobile-sub-menu" style="background-color: green;">
                                <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="register"><i class="fa fa-users"></i> Customer Account</a></li>
                                    <li class="level3"><a href="register"><i class="fa fa-users"></i> Vendor Account</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="level"><a href="contact" class="page-scroll">Contact <div class="menu-label" style="color: red;"></div></a></li>
                        <?php
                        if(isset($_SESSION['customer'])==""){
                            ?>
                            <li class="level"><a href="login" class="page-scroll">Sign In <div class="menu-label"></div></a></li>
                        <?php
                        }
                        else{
                            ?>
                            <li class="level"><a href="logout" class="page-scroll">Sign Out <div class="menu-label"></div></a></li>
                            <li class="level" style="background-color:lightgreen "> <span class="opener plus"></span> <a href="" class="page-scroll">My Dashboard</a>
                                <div class="megamenu mobile-sub-menu">
                                    <div class="megamenu-inner-top">
                                        <ul class="sub-menu-level1">
                                            <li class="level2"> <a href=""><span></span></a>
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="account"><span><i class="fa fa-user"></i></span> Account</a></li>
                                                    <li class="level3"><a href="orders"><span><i class="fa fa-shopping-cart"></i></span>My Orders</a></li>
                                                    <li class="level3"><a href="delivered_orders"><span><i class="fa fa-shopping-cart"></i></span>Delivered Orders</a></li>
                                                    <li class="level3"><a href="pending_orders"><span><i class="fa fa-shopping-cart"></i></span>Pending Orders</a></li>
                                                    <li class="level3"><a href="logout"><span><i class=""></i></span> Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

