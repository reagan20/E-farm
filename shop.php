<?php
require_once('inc/header.php');
$prod_cat=$_GET['prod_id'];
?>
  <!-- HEADER END -->

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center" style="background-image: url('images/products/bg.jpg')">
    <section class="banner-detail">
      <h1 class="banner-title">Shop</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.php">Home</a>/</li>
          <li><span>Shop</span></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- BANNER END -->

  <div class="mian-contain">
    <div class="container">  
      
      <!-- CONTAIN START -->
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="row">
          <div class="col-md-3 col-sm-4 mb-xs-30">
            <div class="sidebar-block">
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

              <div class="sidebar-box mb-40 visible-sm visible-md visible-lg"> <a> <img src="images\left-banner.jpg" alt="Gecko"> </a> </div>
              <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
                <div class="sidebar-title">
                  <h3>Best Seller</h3>
                </div>
                <div class="sidebar-contant">
                  <ul>
                    <li>
                      <div class="pro-media"> <a><img alt="T-shirt" src="images\1.jpg"></a> </div>
                      <div class="pro-detail-info"> <a>Black African Print</a>
                        <div class="rating-summary-block">
                          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                        </div>
                        <div class="price-box"> <span class="price">$80.00</span> </div>
                        <div class="cart-link">
                          <form>
                            <button title="Add To Cart">Add To Cart</button>
                          </form>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-media"> <a><img alt="T-shirt" src="images\1.jpg"></a> </div>
                      <div class="pro-detail-info"> <a>Black African Print</a>
                        <div class="rating-summary-block">
                          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                        </div>
                        <div class="price-box"> <span class="price">$80.00</span> </div>
                        <div class="cart-link">
                          <form>
                            <button title="Add To Cart">Add To Cart</button>
                          </form>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-media"> <a><img alt="T-shirt" src="images\1.jpg"></a> </div>
                      <div class="pro-detail-info"> <a>Black African Print</a>
                        <div class="rating-summary-block">
                          <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                        </div>
                        <div class="price-box"> <span class="price">$80.00</span> </div>
                        <div class="cart-link">
                          <form>
                            <button title="Add To Cart">Add To Cart</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- md 9 starts here -->
          <div class="col-md-9 col-sm-8">
            <div class="shorting mb-30">
              <div class="row">
                <div class="col-md-6">
                  <div class="view">
                    <div class="list-types grid active "> <a href="shop.php">
                      <div class="grid-icon list-types-icon"></div>
                      </a> </div>
                    <div class="list-types list"> <a href="shop-list.html">
                      <div class="list-icon list-types-icon"></div>
                      </a> </div>
                  </div>
                  <div class="short-by float-right-sm"> <span>Sort By</span>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="show-item right-side float-left-sm"> <span>Show</span>
                    <div class="select-item">
                      <select>
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select>
                    </div>
                    <span>Per Page</span>
                    <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-listing">
              <div class="row">
                <?php
                $stmt=$conn->query("SELECT * FROM products WHERE category='$prod_cat' ORDER BY product_name ASC");
                while($product=mysqli_fetch_assoc($stmt)){
                  ?>
                  <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="well well-sm">
                      <div class="product-image"> <a href="product-page.html"> <img src="images/products/<?php echo $product['image'];?>" alt="" style="width: 100%; height: 200px;"> </a>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon"><a href="viewCart.php" title="Add To Cart"></a></li>
                              <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                              <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                            </ul>
                          </div>
                          <div class="rating-summary-block right-side"></div>
                        </div>
                      </div>
                      <div class="product-item-details">
                        <div class="product-item-name"> <a href="product-page.html"><?php echo $product['product_name'];?></a> </div>
                        <div class="price-box"> <span class="price">Ksh.<?php echo $product['price'];?>.00</span> <del class="price old-price"></del> </div>
                        <a class="btn btn-success btn-sm" href="cartAction.php?action=addToCart&id=<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>Add Cart</a>
                      </div>
                    </div>
                  </div>
                    <?php
                }
                ?>

              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>

 <?php require_once('inc/footer.php');?>