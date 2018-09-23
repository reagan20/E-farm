<?php require_once('inc/header.php');?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Contact Us</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><span>Contact Us</span></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- BANNER END -->

  <div class="mian-contain">
    <div class="container">  

      <section class="pt-95 pt-sm-60 pt-xs-30 align-center">
        <div class="contact-info well well-lg">
          <div class="row m-0">
            <div class="col-sm-4 p-0">
              <div class="contact-box">
                <div class="contact-icon contact-phone-icon"></div>
                <span><b>Tel</b></span>
                <a href="Tell:0717052892">+254717052892</a>
              </div>
            </div>
            <div class="col-sm-4 p-0">
              <div class="contact-box">
                <div class="contact-icon contact-mail-icon"></div>
                <span><b>Mail:</b></span>
                <a href="Mailto:journalreagan@gmail.com">infoservices@efarm.com </a>
              </div>
            </div>
            <div class="col-sm-4 p-0">
              <div class="contact-box">
                <div class="contact-icon contact-open-icon"></div>
                <span><b>Open</b></span>
                <p>Mon – Sat: 9:00 – 18:00</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part align-center">
              <h2 class="main_title" style="color: green;">Leave a message!</h2>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <form action="" method="POST" name="contactform">
                <?php
                if(isset($_POST['submit'])){
                  $full_name=trim(mysqli_real_escape_string($conn, $_POST['full_name']));
                  $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
                  $phone=trim(mysqli_real_escape_string($conn, $_POST['phone']));
                  $message=trim(mysqli_real_escape_string($conn, $_POST['message']));

                  $stmt=$conn->query("INSERT INTO message(full_name,email,phone,message) VALUES('$full_name','$email','$phone','$message')");
                  if($stmt){
                    echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Thanks for contacting us. We'll get back to you soonest.</div>";
                  }
                  else{
                    echo"<div class='alert alert-warning'><button class='close' data-dismiss='alert'>&times;</button>Failed.! Please try again later.</div>";
                  }
                }
                ?>
                <div class="row">
                  <div class="col-md-4">
                    <input type="text" class="form-control" required="" placeholder="Full Name" name="full_name">
                  </div>
                  <div class="col-md-4">
                    <input type="email" class="form-control" required="" placeholder="Email Address" name="email">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" required="" placeholder="Phone Number" name="phone">
                  </div>
                </div><br/>
                <div class="row">
                  <div class="col-md-5">
                    <textarea required="" class="form-control" placeholder="Type Message" rows="3" cols="30" name="message"></textarea>
                  </div>
                </div><br/>
                <div class="row">
                  <div class="col-md-5">
                      <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-send"></i> Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>
<?php require_once('inc/footer.php');?>