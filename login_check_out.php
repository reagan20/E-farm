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
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <form  method="post" action="" class="main-form full">
                                            <?php
                                            if(isset($_POST['login'])){
                                            $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
                                              $password=trim(mysqli_real_escape_string($conn, $_POST['password']));

                                              $stmt=$conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

                                              $row=$stmt->fetch_array();
                                              $count=$stmt->num_rows;

                                                if($count==1){
                                                    $_SESSION['customer']= $row['user_id'];
                                                    $_SESSION['role_session']= $row['role'];
                                                    //header("Location: index.php");
                                                    echo " <script> window.location.href='checkout.php';  </script>";
                                                }
                                              else{
                                                echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Sorry!! No such account exist.</div>";
                                              }
                                            }
                                            ?>
                                            <div class="row">
                                                <div class="col-xs-12 mb-20">
                                                    <div class="heading-part heading-bg">
                                                        <h2 class="heading"><i class="fa fa-clock-o" aria-hidden="true"></i>Customer Login</h2>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-box">
                                                        <label for="login-email">Username:</label>
                                                        <input id="email" name="email" type="email" required="" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-box">
                                                        <label for="login-pass">Password:</label>
                                                        <input id="password" name="password" type="password" required="" placeholder="Enter your Password">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="check-box left-side"> <span>
                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                        </span>
                                                        <label for="remember_me">Remember Me</label>
                                                    </div>
                                                    <button name="login" type="submit" class="btn-color right-side"><i class="fa fa-lock"></i> Log In</button>
                                                    <a href="vendor/dash.php">test</a>
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