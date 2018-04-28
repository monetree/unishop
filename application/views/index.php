<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Unishop | Universal E-Commerce</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?php echo base_url().CSS_PATH;?>vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo base_url().CSS_PATH;?>styles.min.css">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="<?php echo base_url().CUSTOMIZER_PATH;?>customizer.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'http://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');
    </script>
    <!-- Modernizr-->
    <script src="<?php echo base_url().JS_PATH;?>modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Template Customizer-->
    <div class="customizer-backdrop"></div>

    <!-- <div class="customizer">
      <div class="customizer-toggle"><i class="icon-cog"></i></div>
      <div class="customizer-body"><a class="btn btn-white btn-rounded btn-block mb-4 mt-0" href="http://themes.rokaux.com/unishop/v2.2/template-2/index.html">Switch To Template 2</a>
        <div class="customizer-title">Choose color</div>
        <div class="customizer-color-switch"><a class="active" href="#" data-color="default" style="background-color: #0da9ef;"></a><a href="#" data-color="2ecc71" style="background-color: #2ecc71;"></a><a href="#" data-color="f39c12" style="background-color: #f39c12;"></a><a href="#" data-color="e74c3c" style="background-color: #e74c3c;"></a></div>
        <div class="customizer-title">Header option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="header-option">
            <option value="sticky">Sticky</option>
            <option value="static">Static</option>
          </select>
        </div>
        <div class="customizer-title">Footer option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="footer-option">
            <option value="dark">Dark</option>
            <option value="light">Light</option>
          </select>
        </div><a class="btn btn-primary btn-rounded btn-block margin-bottom-none" href="https://wrapbootstrap.com/theme/unishop-universal-e-commerce-template-WB0148688/?ref=rokaux">Buy Unishop</a>
      </div>
    </div> -->

    <!-- Off-Canvas Category Menu-->
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="<?php echo base_url().IMG_PATH;?>account/user-ava-md.jpg" alt="Daniel Adams">
        </div>
        <div class="user-info">
          <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div></a>
    </div>
    <!-- Topbar-->

<!--header-->
<?php include_once "header.php";?>
<!--header-->

    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
      <!-- Main Slider-->
      <section class="hero-slider" style="background-image: url(<?php echo base_url().IMG_PATH;?>hero-slider/main-bg.jpg);">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="<?php echo base_url().IMG_PATH;?>hero-slider/logo02.png" alt="Puma">
                    <div class="h2 text-body text-normal mb-2 pt-1">Puma Backpacks Collection</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">starting at <span class="text-bold">$37.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">View Offers</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url().IMG_PATH;?>hero-slider/02.png" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="<?php echo base_url().IMG_PATH;?>hero-slider/logo01.png" alt="Converse">
                    <div class="h2 text-body text-normal mb-2 pt-1">Chuck Taylor All Star II</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$59.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url().IMG_PATH;?>hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block mb-4" src="<?php echo base_url().IMG_PATH;?>hero-slider/logo03.png" style="width: 125px;" alt="Motorola">
                    <div class="h2 text-body text-normal mb-2 pt-1">Smart Watch Moto 360 2nd</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$299.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url().IMG_PATH;?>hero-slider/03.png" alt="Moto 360"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Top Categories-->
      <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Top Categories</h3>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/01.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/02.jpg" alt="Category"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/03.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Clothing</h4>
                <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/04.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/05.jpg" alt="Category"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/06.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Shoes</h4>
                <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/07.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/08.jpg" alt="Category"><img src="<?php echo base_url().IMG_PATH;?>shop/categories/09.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Bags</h4>
                <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-categories.html">All Categories</a></div>
      </section>
      <!-- Promo #1-->
      <section class="container-fluid padding-top-3x">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 mb-30">
            <div class="rounded bg-faded position-relative padding-top-3x padding-bottom-3x"><span class="product-badge text-danger" style="top: 24px; left: 24px;">Limited Offer</span>
              <div class="text-center">
                <h3 class="h2 text-normal mb-1">New</h3>
                <h2 class="display-2 text-bold mb-2">Sunglasses</h2>
                <h4 class="h3 text-normal mb-4">collection at discounted price!</h4>
                <div class="countdown mb-3" data-date-time="06/30/2018 12:00:00">
                  <div class="item">
                    <div class="days">00</div><span class="days_ref">Days</span>
                  </div>
                  <div class="item">
                    <div class="hours">00</div><span class="hours_ref">Hours</span>
                  </div>
                  <div class="item">
                    <div class="minutes">00</div><span class="minutes_ref">Mins</span>
                  </div>
                  <div class="item">
                    <div class="seconds">00</div><span class="seconds_ref">Secs</span>
                  </div>
                </div><br><a class="btn btn-primary margin-bottom-none" href="#">View Offers</a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 mb-30" style="min-height: 270px;">
            <div class="img-cover rounded" style="background-image: url(<?php echo base_url().IMG_PATH;?>banners/home01.jpg);"></div>
          </div>
        </div>
      </section>
      <!-- Promo #2-->
      <section class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="fw-section rounded padding-top-4x padding-bottom-4x" style="background-image: url(<?php echo base_url().IMG_PATH;?>banners/home02.jpg);"><span class="overlay rounded" style="opacity: .35;"></span>
              <div class="text-center">
                <h3 class="display-4 text-normal text-white text-shadow mb-1">Old Collection</h3>
                <h2 class="display-2 text-bold text-white text-shadow">HUGE SALE!</h2>
                <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">at our outlet stores</h4><br><a class="btn btn-primary margin-bottom-none" href="contacts.html">Locate Stores</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Products Carousel-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          <!-- Product-->
          <?php
          foreach($featured_products->result() as $fp){
            ?>
<!-- product -->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="<?php echo site_url()?>/Base_controller/single/<?php echo $fp->prod_id;?>"><img src="http://[::1]/unishop/assets/admin/uploads/<?php echo $fp->prod_image;?>" alt="Product" style="height:200px;overflow:hidden;"></a>
              <h3 class="product-title"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $fp->prod_id;?>">
                <?php
                $prod_name =  $fp->prod_name;
                $len=strlen($prod_name);
                if($len > 20){
                  $prod_name = substr($prod_name,0,40);
                  $prod_name = $prod_name."...";
                }
                ?>
                <?php echo $prod_name?>
              </a></h3>
              <h4 class="product-price">
                <del><i class="fa fa-inr"></i><?php echo $fp->prod_mrp;?></del><i class="fa fa-inr"></i><?php echo $fp->prod_sp;?>
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
  <!-- product -->
          <?php
          }
         ?>

        </div>
      </section>
      <!-- Product Widgets-->
      <section class="container padding-bottom-2x">
        <div class="row">
          <div class="col-md-4 col-sm-6">

            <div class="widget widget-featured-products">
              <h3 class="widget-title">Top Sellers</h3>
              <!-- Entry-->
              <?php
              foreach($top_seller->result() as $ts){
               ?>
              <div class="entry">
                <div class="entry-thumb"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $ts->prod_id;?>"><img src="http://[::1]/unishop/assets/admin/uploads/<?php echo $ts->prod_image;?>" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $ts->prod_id;?>"><?php echo $ts->prod_name;?></a></h4><span class="entry-meta"><i class="fa fa-inr"></i><?php echo $ts->prod_sp;?></span>
                </div>
              </div>
              <?php
                }
               ?>
              <!-- Entry-->
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">New Arrivals</h3>
              <!-- Entry-->
              <?php
              foreach($new_arrival->result() as $na){
               ?>
              <div class="entry">
                <div class="entry-thumb"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $na->prod_id;?>"><img src="http://[::1]/unishop/assets/admin/uploads/<?php echo $na->prod_image;?>" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $na->prod_id;?>"><?php echo $na->prod_name;?></a></h4><span class="entry-meta"><i class="fa fa-inr"></i><?php echo $na->prod_sp;?></span>
                </div>
              </div>
              <?php
                }
               ?>
              <!-- Entry-->

            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Best Rated</h3>
              <!-- Entry-->
              <?php
              foreach($best_rated->result() as $br){
               ?>
              <div class="entry">
                <div class="entry-thumb"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $br->prod_id;?>"><img src="http://[::1]/unishop/assets/admin/uploads/<?php echo $br->prod_image;?>" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $br->prod_id;?>"><?php echo $br->prod_name;?></a></h4><span class="entry-meta"><i class="fa fa-inr"></i><?php echo $br->prod_sp;?></span>
                </div>
              </div>
              <?php
                }
               ?>
              <!-- Entry-->

            </div>
          </div>
        </div>
      </section>
      <!-- Popular Brands-->
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url().IMG_PATH;?>brands/07.png" alt="Dior"></div>
        </div>
      </section>
      <!-- Services-->
      <section class="container padding-top-3x padding-bottom-2x">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="<?php echo base_url().IMG_PATH;?>services/01.png" alt="Shipping">
            <h6>Free Worldwide Shipping</h6>
            <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="<?php echo base_url().IMG_PATH;?>services/02.png" alt="Money Back">
            <h6>Money Back Guarantee</h6>
            <p class="text-muted margin-bottom-none">We return money within 30 days</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="<?php echo base_url().IMG_PATH;?>services/03.png" alt="Support">
            <h6>24/7 Customer Support</h6>
            <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
          </div>
          <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="<?php echo base_url().IMG_PATH;?>services/04.png" alt="Payment">
            <h6>Secure Online Payment</h6>
            <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
          </div>
        </div>
      </section>
      <!-- Site Footer-->
<?php include_once "footer.php";?>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="<?php echo base_url().JS_PATH;?>vendor.min.js"></script>
    <script src="<?php echo base_url().JS_PATH;?>scripts.min.js"></script>
    <!-- Customizer scripts-->
    <script src="<?php echo base_url().CUSTOMIZER_PATH;?>customizer.min.js"></script>
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v2.2/template-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Feb 2018 18:13:38 GMT -->
</html>
