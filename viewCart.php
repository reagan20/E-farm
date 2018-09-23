<?php require_once('inc/header.php');?>
  <script>
    function updateCartItem(obj,id){
      $.get("cartAction.php",{action:"updateCartItem",id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
          location.reload();
        }else{
          alert('Cart update failed, please try again.');
        }
      });
    }
  </script>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Cart</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><span>Cart</span></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- BANNER END --> 

  <div class="mian-contain">
    <div class="container"> 
      
      <!-- CONTAIN START ptb-95-->
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading" style="text-align: center; color: black;">PRODUCTS ON YOUR SHOPPING CART</div>
              <form method="post" action="index.php?page=shopping_cart">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover dataTables" id="dataTables-libraryList">
                      <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
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
                            <td>KSH.<?php echo number_format($item["price"],2);?></td>
                            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"];?>" onchange="updateCartItem(this,'<?php echo $item["rowid"];?>')"></td>
                            <td>KSH.<?php echo number_format($item["subtotal"],2) ;?></td>
                            <td><a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"];?>" class="btn btn-danger" onclick="return confirm ('Are you sure?')"><i class="fa fa-remove"></i></a></td>
                          </tr>
                        <?php } }else{ ?>
                      <tr><td colspan="5"><p>Your cart is empty..</p></td>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                      <tr><td><a href="index" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Continue Shopping</a></td>
                        <td colspan="2"> </td>
                        <?php if($cart->total_items()>0){ ?>
                          <td class="text-center"><strong>Total: KSH.<?php echo number_format($cart->total(),2) ;?></strong></td>
                          <td><a href="checkout" class="btn btn-success btn-block">Checkout <i class="fa fa-send"></i></a></td>
                        <?php } ?>

                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>

 <?php require_once('inc/footer.php');?>