
<?php require_once('inc/header.php');?>
<?php
/*include_once 'dbconnect.php';
include_once 'Cart.php';
$cart=new Cart;*/

//redirect to home if cart is empty
if($cart->total_items()<= 0){
  header("Location: index");
}
//set check whether the user is logged in else direct to login.
if(isset($_SESSION['customer'])==""){
  //echo "U need to login to place order";
}

else{
  //get customer details by session customer id
  $query=$conn->query("SELECT * FROM users WHERE user_id=".$_SESSION['customer']);
  $custRow= $query->fetch_assoc();
}


?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Checkout</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><a href="viewCart.php">Cart</a>/</li>
          <li><span>Checkout</span></li>
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
            <div class="checkout-step mb-40">
              <ul>
                <li class="active"> <a href="checkout.php">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> </a> </li>
                <li> <a href="order-overview.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> </a> </li>
                <li> <a href="payment.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> </a> </li>
                <li> <a href="order-complete.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> </a> </li>
                <li>
                  <div class="step">
                    <div class="line"></div>
                  </div>
                </li>
              </ul>
              <hr>
            </div>
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="col-main">
                  <div class="cart">
                    <div class="panel panel-success">
                      <div class="panel-heading" style="text-align: center; color: black;">ORDER PREVIEW</div>
                      <form method="post" action="index.php?page=shopping_cart">
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hover dataTables">
                              <thead>
                              <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              if($cart->total_items()> 0){
                                //gets cart items from session
                                $cartItems= $cart->contents();
                                foreach($cartItems as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $item["product_name"];?></td>
                                    <td>KSH.<?php echo number_format($item["price"],2) ;?></td>
                                    <td><?php echo $item["qty"];?></td>
                                    <td>KSH.<?php echo number_format($item["subtotal"],2) ;?></td>
                                  </tr>

                                <?php }
                                ?>
                                <tr>
                                  <?php if($cart->total_items()>0){ ?>
                                    <td class="text-center"><strong>GRAND TOTAL: KSH.<?php echo number_format($cart->total(),2) ;?></strong></td>
                                  <?php } ?>

                                </tr>

                                <?php

                              }

                              else{ ?>
                              <tr>
                                <td colspan="4"><p>No items in the cart..</p></td>
                                <?php } ?>
                              </tr>

                              </tbody>


                            </table>

                            <div class="row">
                              <div class="col-md-6">
                                <h4>SHIPPING DETAILS</h4>
                                <!--<p><?php //echo $custRow['fname'];?> <?php //echo $custRow['lname'];?></p>-->
                                <?php
                                //set check whether the user is logged in else direct to login.
                                if(isset($_SESSION['customer'])==""){
                                  //echo "U need to login to place order. Click here to login <a href='login.php'>Login Here</a>";
                                }
                                else{
                                  ?>
                                  <p><?php echo $custRow['email'];?></p>
                                  <p><?php echo $custRow['mobile'];?></p>
                                  <p><?php echo $custRow['address'];?> ,<?php echo $custRow['town'];?></p>
                                  <?php
                                }
                                ?>

                              </div>

                            </div>
                            <div class="row">
                              <div class="col-md-8">
                                <a href="index.php" class="btn btn-warning"><i class="fa fa-backward"></i>Continue Shopping</a>
                                <?php
                                //set check whether the user is logged in else direct to login.
                                if(isset($_SESSION['customer'])==""){
                                  ?>
                                  <a href="login_check_out.php" class="btn btn-info"><i class="fa fa-signin"></i> Kindly Login</a>
                                  <?php
                                }
                                else{
                                  ?>
                                  <a href="cartAction.php?action=placeOrder" class="btn btn-success">Place Order<i class="fa fa-send"></i></a>
                                <?php
                               }
                               ?>

                              </div>
                            </div>

                          </div>
                        </div></form>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>

 <?php require_once('inc/footer.php');?>