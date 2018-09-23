<?php require_once('inc/header.php');?>
<!-- BANNER STRAT -->
<div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
  <section class="banner-detail">
    <h1 class="banner-title">Eazy Shop for Farm products</h1>
    <div class="bread-crumb mt-30">
      <ul>
        <li><a href="index.php">Get best products</a>/</li>
        <li><a href="register"><span>Register</span></a></li>
      </ul>
    </div>
  </section>
</div>
<!-- BANNER END -->

<div class="mian-contain">
  <div class="">
      
      <!--  Our Products Block Start  -->
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="container">
          <div class="product-slider">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="main_title" style="color: green;">Farm Products</h2>
                  <div id="tabs" class="category-bar mb-20">
                    <ul class="nav nav-pills">
<!--                      tab-stap-->
                      <li><a class="tab-step1 selected" title="step1">Vegetables</a></li>
                      <li>|</li>
                      <li><a class="tab-step2" title="step2">Animal Products</a></li>
                      <li>|</li>
                      <li><a class="tab-step3" title="step3">Fruits</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="">
                <div class="items">
                  <div class="tab_content pro_cat">
                    <ul>
                      <!--Vegetables starts here-->
                      <li>
                        <div id="data-step1" class="items-step1 selected product-slider-main position-r" data-temp="tabdata">
                          <?php
                          $query=$conn->query("SELECT * FROM products WHERE category='Vegetable'");
                          while($q1=mysqli_fetch_assoc($query)){
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                              <div class="well well-sm">
                                <div class="sale-label"><span>Best Sales</span></div>
                                <div class="product-image">
                                  <a href="product-page.html"> <img src="images/products/<?php echo $q1['image'];?>" alt="" style="width: 100%; height: 200px;"> </a>
                                  <div class="product-detail-inner">
                                    <div class="detail-inner-left">
                                      <ul>
                                        <li class="pro-cart-icon"><a href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>" title="Add To Cart"></a></li>
                                        <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                      </ul>
                                    </div>
                                    <div class="rating-summary-block right-side"></div>
                                  </div>
                                </div>
                                <div class="product-item-details">
                                  <div class="product-item-name"> <a href="product-page.html"><?php echo $q1['product_name'];?></a> </div>
                                  <div class="price-box"> <span class="price">KSH. <?php echo $q1['price'];?>.00</span> <del class="price old-price"></del> </div>
                                  <a class="btn btn-success btn-sm" href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                                </div>
                              </div>
                            </div>

                          <?php
                          }
                          ?>
                        </div>
                      </li>
                      <!--Vegetables ends here-->

                      <!--Animal products starts here-->
                      <li>
                        <div id="data-step2" class="items-step2 product-slider-main position-r" data-temp="tabdata" style="display:none">

                          <?php
                          $query=$conn->query("SELECT * FROM products WHERE category='Animal Products'");
                          while($q1=mysqli_fetch_assoc($query)){
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                              <div class="well well-sm">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="product-image">
                                  <a href="product-page.html"> <img src="images/products/<?php echo $q1['image'];?>" alt="" style="height: 300px; width: 700px;"> </a>
                                  <div class="product-detail-inner">
                                    <div class="detail-inner-left">
                                      <ul>
                                        <li class="pro-cart-icon"><a href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>" title="Add To Cart"></a></li>
                                        <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                      </ul>
                                    </div>
                                    <div class="rating-summary-block right-side"></div>
                                  </div>
                                </div>
                                <div class="product-item-details">
                                  <div class="product-item-name"> <a href="product-page.html"><?php echo $q1['product_name'];?></a> </div>
                                  <div class="price-box"> <span class="price">KSH. <?php echo $q1['price'];?>.00</span> <del class="price old-price"></del> </div>
                                  <a class="btn btn-success btn-sm" href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                                </div>
                              </div>
                            </div>

                            <?php
                          }
                          ?>
                      <!--Animal products ends here-->

                          <!--fruits starts here-->
                      <li>
                        <div id="data-step3" class="items-step3 product-slider-main position-r" data-temp="tabdata" style="display:none">

                          <?php
                          $query=$conn->query("SELECT * FROM products WHERE category='Fruits'");
                          while($q1=mysqli_fetch_assoc($query)){
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                              <div class="well well-sm">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="product-image">
                                  <a href="product-page.html"> <img src="images/products/<?php echo $q1['image'];?>" alt="" style="height: 200px; width: 100%;"> </a>
                                  <div class="product-detail-inner">
                                    <div class="detail-inner-left">
                                      <ul>
                                        <li class="pro-cart-icon"><a href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>" title="Add To Cart"></a></li>
                                        <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                        <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                      </ul>
                                    </div>
                                    <div class="rating-summary-block right-side"></div>
                                  </div>
                                </div>
                                <div class="product-item-details">
                                  <div class="product-item-name"> <a href="product-page.html"><?php echo $q1['product_name'];?></a> </div>
                                  <div class="price-box"> <span class="price">KSH. <?php echo $q1['price'];?>.00</span> <del class="price old-price"></del> </div>
                                  <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $q1['id'];?>">Add to Cart<i class="fa fa-shopping-cart"></i></a>
                                </div>
                              </div>
                            </div>

                            <?php
                          }
                          ?>
                        </div>
                      </li>
                          <!--fruits ends here-->

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  Our Products Block End  -->

        <div class="container">
          <div class="well well-sm">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="main_title" style="color: green;">Testimonials</h2>
                </div>
              </div>
            </div>
            <div class="client-main align-center">
              <div class="client-inner">
                <div id="client" class="owl-carousel">
                  <div class="item client-detail">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="client-img"> <img src="images\testimonial_img1.jpg" alt="Tizzy"> </div>
                        <h4 class="client-title">Wed Censtoriya</h4>
                      </div>
                      <div class="col-md-8">
                        <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
                        <h4 class="sub-title">- joseph deboungawer -Maneger</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<!--        <div class="container">-->
<!--          <div class="row">-->
<!--            <div class="col-xs-12">-->
<!--              <div class="heading-part align-center mb-30">-->
<!--                <h2 class="main_title" style="color: green;">Latest Adverts</h2>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="row mlr_-20">-->
<!--            <div class="col-sm-4 plr-20">-->
<!--              <div class="blog-item">-->
<!--                <div class="blog-media"> <img src="images\blog_img1.jpg" alt="Gecko"> <a href="single.php" title="Click For Read More" class="read">&nbsp;</a> </div>-->
<!--                <div class="blog-detail">-->
<!--                  <div class="blog-detail-inner">-->
<!--                    <div class="blog-contant">-->
<!--                      <span>01 jan 2018</span>-->
<!--                      <h4 class="blog-title"><a href="single.php">This is paper spring Summer 2015 Linen</a></h4>-->
<!--                      <div class="post-info">-->
<!--                        <ul>-->
<!--                          <li><a href="single.php">Read more...</a></li>-->
<!--                        </ul>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
      
      <!-- Brand logo block Start  -->
<?php require_once('inc/footer.php');?>
