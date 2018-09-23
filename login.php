<?php require_once('inc/header.php'); ?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Login</h1>
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
                <div class="panel-heading" align="center">User Login</div>
                  <div class="panel-body">
                    <form  method="post" action="" class="main-form full">
                      <?php
                      require_once('queries.php');
                      ?>
<!--                      <div class="row">-->
<!--                        <div class="col-xs-12 mb-20">-->
<!--                          <div class="heading-part heading-bg">-->
<!--                            <h2 class="heading" style="color: green; text-align: center;">Customer Login</h2>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        </div>-->
                        <div class="row">
                        <div class="col-xs-12">
                            <label for="login-email">Username:</label>
                            <input class="form-control" id="email" name="email" type="email" required="" placeholder="Email Address">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-12">
                            <label for="login-pass">Password:</label>
                            <input class="form-control" id="password" name="password" type="password" required="" placeholder="Enter your Password">
                        </div>
                        </div><br/>
                        <div class="row">
                        <div class="col-xs-12">
                          <button name="login" type="submit" class="btn btn-success"><i class="fa fa-lock"></i> Log In</button>
                        </div>
                        </div>
                        <div class="col-xs-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="#">Forgot your password?</a>
                          <hr>
                        </div>
                        <div class="col-xs-12">
                          <div class="new-account align-center mt-20"> <span>Don't have account?</span> <a class="link" title="Register with Gecko" href="register.php">Create New Account</a> </div>
                        </div>
                      </div>
                    </form>
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