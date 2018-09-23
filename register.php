<?php require_once('inc/header.php');?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Register</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><span>Register</span></li>
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
              <div class="col-md-12">
                <p><strong>NOTE:</strong> All field marked <span class="required">*</span> must be filled.</p>
                <div class="panel panel-success">
                  <div class="panel-heading" align="center">Users' Account Creation</div>
<!--                  <div class="col-xs-12 mb-20">-->
<!--                    <div class="heading-part heading-bg">-->
<!--                      <h2 class="heading" style="color: green; text-align: center;">Customer/Farmer Account Creation</h2>-->
<!--                    </div>-->
<!--                  </div>-->
                  <div class="panel-body">
                    <form id="register" method="post" action="" class="main-form full">
                      <?php require_once('queries.php');?>
                      <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">Frist Name:</label> <span class="required">*</span>
                          <input type="text" class="form-control" name="fname" id="fname" required="">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Middle Name:</label>
                          <input type="text" class="form-control" name="mname" id="mname">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Last Name:</label> <span class="required">*</span>
                          <input type="text" class="form-control" name="lname" id="lname" required="">
                        </div>
                      </div><br/>
                      <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">National ID:</label> <span class="required">*</span>
                          <input type="text" class="form-control" name="national_id" required="">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Mobile No:</label> <span class="required">*</span>
                          <input type="text" class="form-control" name="mobile" required="">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Email:</label> <span class="required">*</span>
                          <input type="email" class="form-control" name="email" required="">
                        </div>
                      </div><br/>

                      <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">Account Type:</label> <span class="required">*</span>
                          <select class="form-control" name="account_type">
                            <option value="">~~Select Account Type~~</option>
                            <option value="2">Vendor</option>
                            <option value="3">Customer</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">City/Town:</label> <span class="required">*</span>
                          <select class="form-control selectPicker" onchange="setAddress(this)" data-live-search="true" name="town" id="town" required="required">
                          <option value="">~~Select Town~~</option>
                            <option value="1">Kisumu</option>
                            <option value="2">Mbale</option>
                            <option value="3">Chavakali</option>
                            <option value="4">Kakamega</option>
                            <option value="5">Mumias</option>
                            <option value="6">Bongoma</option>
                          </select>
                          <!--<input type="text" class="form-control" name="town" required="">-->
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Address:</label> <span class="required">*</span>
                          <input type="text" class="form-control" name="address" id="address" readonly>
                        </div>

                      </div><br/>

                      <div class="row">
                        <div class="col-md-4">
                          <label class="control-label">Password:</label> <span class="required">*</span>
                          <input type="password" class="form-control" name="password" id="password" required="">
                        </div>
                        <div class="col-md-4">
                          <label class="control-label">Confirm Password:</label> <span class="required">*</span>
                          <input type="password" class="form-control" name="password2" id="password2" required="">
                        </div>
                      </div><br/>
                      <div class="row">
                        <div class="col-md-5">
                          <button class="btb btn-success" name="submit" type="submit"><i class="fa fa-save"></i> Register</button>
                          <a class="btn btn-info btn-sm" href="login.php"><i class="fa fa-lock"></i>Click to Login</a>
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

  <script type="text/javascript">
    function setAddress(e){
      var address = e.value;
      //alert(address);
      document.getElementById('address').value=address;
    }
  </script>

  <?php require_once('inc/footer.php');?>