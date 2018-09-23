<?php require_once('inc/head.php');?>
  <!-- HEADER END -->
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Account </h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><span>Account</span></li>
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
          <div class="col-md-3 col-sm-4">
            <div class="account-sidebar account-tab mb-xs-30">
              <div class="dark-bg tab-title-bg">
                <div class="heading-part">
                  <div class="sub-title"><span></span> My Account</div>
                </div>
              </div>
              <div class="account-tab-inner">
                <ul class="account-tab-stap">
                  <li id="step1" class="active"> <a href="javascript:void(0)">My Dashboard<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step2"> <a href="javascript:void(0)">Account Details<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step3"> <a href="javascript:void(0)">My Order List<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step4"> <a href="javascript:void(0)">Change Password<i class="fa fa-angle-right"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div id="data-step1" class="account-content" data-temp="tabdata">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0" style="color: green;"><i class="fa fa-clock-o" aria-hidden="true"></i>Customer Dashboard</h2>
                  </div>
                </div>
              </div>
              <div class="mb-30">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="heading-part">
                      <h3 class="sub-heading">Welcome Back <?php echo $fname.' '.$lname?></h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus nibh at mattis pretium. Aenean vestibulum, leo in tincidunt malesuada, augue turpis maximus magna, ac sollicitudin erat tortor eu nulla.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <?php
                    $order=$conn->query("SELECT * from orders WHERE customer_id='$user_id'");
                    $count1=mysqli_num_rows($order);
                    ?>
                    <div class="well well-sm bg-success" style="">
                      <div class="align-center">
                        <span class="fa fa-shopping-cart" style="font-size:30px;color: #3F90C6;"></span>
                        <a href="Customer_Dashboard.php"><h4>Total Orders</h4></a>
                        <small class="badge badge-primary" style="background-color: #3F90C6;"><?php echo $count1; ?></small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <?php
                    $order2=$conn->query("SELECT * from orders WHERE customer_id='$user_id' AND status='Delivered'");
                    $count2=mysqli_num_rows($order2);
                    ?>
                    <div class="well well-sm bg-success" style="">
                      <div class="align-center">
                        <a><span class="fa fa-shopping-cart" style="font-size:30px;color: green;"></span></a>
                        <a href=""><h4>Delidered Orders</h4></a>
                        <small class="badge badge-primary" style="background-color: green;"><?php echo $count2; ?></small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <?php
                    $order3=$conn->query("SELECT * from orders WHERE customer_id='$user_id' AND status='Pending'");
                    $count3=mysqli_num_rows($order3);
                    ?>
                    <div class="well well-sm bg-success" style="">
                      <div class="align-center">
                        <a><span class="fa fa-shopping-cart" style="font-size:30px;color: orange;"></span></a>
                        <a href=""><h4>Pending Orders</h4></a>
                        <small class="badge badge-primary" style="background-color: orange;"><?php echo $count3; ?></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-0">
                <div class="row">
                  <div class="col-xs-12 mb-20 btn-success">
                    <div class="heading-part">
                      <h3 class="sub-heading">Account Information</h3>
                    </div>
                    <hr>
                  </div>
                  <div class="col-sm-6">
                    <div class="cart-total-table address-box commun-table">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Shipping Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><ul>
                                  <li class="inner-heading"> <b><?php echo $fullname; ?></b> </li>
                                  <li>
                                    <p><?php echo $email; ?></p>
                                  </li>
                                  <li>
                                    <p><?php echo $address.' '.$town; ?></p>
                                  </li>
                                  <li>
                                    <p>Kenya</p>
                                  </li>
                                </ul></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Account details goes here-->
            <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0" style="color: green;"><i class="fa fa-clock-o" aria-hidden="true"></i>Account Details</h2>
                  </div>
                </div>
              </div>
              <div class="m-0">
                <form method="post" class="main-form full">
                <!--Form queries-->
                  <?php require_once('queries.php'); ?>

                  <div class="mb-20">
                    <div class="row">
                      <div class="col-xs-12 mb-20">
                        <div class="heading-part">
                          <h3 class="sub-heading">Shipping Address</h3>
                        </div>
                        <hr>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">First Name:</label>
                          <input name="fname" class="form-control" value="<?php echo $fname; ?>">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Middle Name:</label>
                          <input name="mname" class="form-control" value="<?php echo $mname; ?>">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Last Name:</label>
                          <input name="lname" class="form-control" value="<?php echo $lname; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">ID:</label>
                          <input name="national_id" class="form-control" value="<?php echo $national_id; ?>">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Phone No:</label>
                          <input name="mobile" class="form-control" value="<?php echo $mobile; ?>">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Email:</label>
                          <input name="email" class="form-control" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label class="control-label">Address:</label>
                        <input name="address" class="form-control" value="<?php echo $address; ?>">
                      </div>
                      <div class="col-md-4">
                        <label class="control-label">Town:</label>
                        <input name="town" class="form-control" value="<?php echo $town; ?>">
                      </div>
                    </div><br/>
                    <div class="row">
                      <div class="col-md-4">
                        <button name="update_account" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <!--Order list starts here-->
            <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
             <div id="form-print" class="admission-form-wrapper">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="heading-part heading-bg mb-30">
                      <h2 class="heading m-0"><i class="fa fa-clock-o" aria-hidden="true"></i>My Orders</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 mb-xs-30">
                    <div class="panel panel-success">
                      <div class="panel-heading"></div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-responsive dataTables">
                            <thead>
                            <tr>
                              <th>SN</th>
                              <th>OrderID</th>
                              <th>Total</th>
                              <th>Created Date</th>
                              <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql=$conn->query("SELECT * FROM orders WHERE customer_id='$user_id'");
                            $count=1;
                            while($row=mysqli_fetch_assoc($sql)){
//                              $order_id=$row['id'];
//                              $sql1=$conn->query("SELECT * from order_items WHERE order_id='$order_id'");
//                              $sql2=$conn->query("SELECT * FROM products WHERE id='$sql1[product_id]'");
                              ?>
                              <tr>
                                <td><?php echo $count; ?>.</td>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['total_price']; ?>.00</td>
                                <td><?php echo $row['created']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                              </tr>
                                <?php
                              $count++;
                            }
                            ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div id="data-step4" class="account-content" data-temp="tabdata" style="display:none">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0" style="color: green;"><i class="fa fa-clock-o" aria-hidden="true"></i>Change Password</h2>
                  </div>
                </div>
              </div>
              <form class="main-form full" method="post">
                <?php
                if(isset($_POST['change_pass'])){
                  $password=trim(mysqli_real_escape_string($conn, $_POST['password']));
                  $sql=$conn->query("UPDATE users SET password='$password' WHERE user_id='$_SESSION[customer]'");
                  if($sql){
                    echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Password successfully updated.</div>";
                  }
                  else{
                    echo"<div class='alert alert-warning'><button class='close' data-dismiss='alert'>&times;</button>Failed.!</div>";
                  }
                }
                ?>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input name="password" type="password" placeholder="Enter your Password" required="" id="login-pass">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <label for="re-enter-pass">Re-enter Password</label>
                      <input name="password2" type="password" placeholder="Re-enter your Password" required="" id="re-enter-pass">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button class="btn btn-success" type="submit" name="change_pass">Change Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>

 <?php require_once('inc/footer.php');?>