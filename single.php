<?php
require_once('inc/header.php');
$id=$_GET['prod_id'];
?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Single Product</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index">Home</a>/</li>
          <li><span>Single product</span></li>
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
          <div class="col-md-9 col-sm-8 pb-xs-60">
            <div class="row">
              <?php
              $sql=$conn->query("SELECT * FROM products WHERE id='$id'");
              $r=mysqli_fetch_assoc($sql);
              ?>
              <div class="col-xs-12 mb-60">
                <div class="well well-md">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="images/products/<?php echo $r['image'];?>" alt="Gecko" style="width: 100%; height: 350px;"><br/>
                    </div>
                    <div class="col-md-4">
                      <div>
                        <h5>Product name: <?php echo $r['product_name'];?></h5>
                        <h5>Product price: Ksh. <?php echo $r['price'];?>.00</h5>
                        <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $r['id'];?>"><i class="fa fa-shopping-cart"></i>Add Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog-detail ">
                  <div class="post-info">
                    <ul>
                      <li><span class="post-date">03 jan 2017</span></li>
                      <li><span>By</span><a href="#"> cormon jons</a></li>
                    </ul>
                  </div>
                  <h3>Combined with a handful of model</h3>
                  <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus. uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                  <hr>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3 col-sm-4">
            <div class="sidebar-block">
              <div class="sidebar-box mb-40">
                <form>
                  <div class="search-box">
                    <input type="text" placeholder="Search entire store here..." class="input-text">
                    <button class="search-btn"></button>
                  </div>
                </form>
              </div>
              <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                <div class="sidebar-title">
                  <h3>Categories</h3>
                </div>
                <div class="sidebar-contant">
                  <ul>
                    <li><a>Clothing <span>(21)</span></a></li>
                    <li><a>Shoes <span>(05)</span></a></li>
                    <li><a>Jewellery <span>(10)</span></a></li>
                    <li><a>Home & Furniture <span>(12)</span></a></li>
                    <li><a>Bags <span>(18)</span></a></li>
                    <li><a>Accessories <span>(70)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-box mb-40"> <span class="opener plus"></span>
                <div class="sidebar-title">
                  <h3>Tags</h3>
                </div>
                <div class="sidebar-contant">
                  <ul class="tagcloud">
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Neutral</a></li>
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Tan</a></li>
                    <li><a href="#">Purple</a></li>
                    <li><a href="#">Yellow</a></li>
                    <li><a href="#">White</a></li>
                    <li><a href="#">Metallic</a></li>
                    <li><a href="#">Red</a></li>
                  </ul>
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