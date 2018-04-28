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
      <!-- Page Title-->
<br><br>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                <div class="shop-sorting">
                  <label for="sorting">Sort by:</label>
                  <select class="form-control" id="sorting">
                    <option>Popularity</option>
                    <option>Low - High Price</option>
                    <option>High - Low Price</option>
                    <option>Avarage Rating</option>
                    <option>A - Z Order</option>
                    <option>Z - A Order</option>
                  </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
                </div>
              </div>
              <div class="column">
                <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div>
              </div>
            </div>
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <!-- Product-->
              <?php
              foreach($products->result() as $prod){
                ?>
             <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="<?php echo site_url()?>/Base_controller/single/<?php echo $prod->prod_id;?>"><img src="<?php echo base_url();?>assets/admin/uploads/<?php echo $prod->prod_image;?>" alt="Product"></a>
                  <h3 class="product-title"><a href="<?php echo site_url()?>/Base_controller/single/<?php echo $prod->prod_id;?>">
                    <?php
                    $prod_name =  $prod->prod_name;
                    $len=strlen($prod_name);
                    if($len > 20){
                      $prod_name = substr($prod_name,0,40);
                      $prod_name = $prod_name."...";
                    }
                    ?>
                    <?php echo $prod_name;?>
                  </a></h3>
                  <h4 class="product-price">
                    <del><i class="fa fa-inr"></i><?php echo $prod->prod_mrp;?></del><i class="fa fa-inr"></i><?php echo $prod->prod_sp;?>

                  </h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                  </div>
                </div>
              </div>
            <?php
            }
             ?>

            </div>
            <!-- Pagination-->
            <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">12</a></li>
                </ul>
              </div>
              <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
            </nav>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 order-lg-1">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopFilters"><i class="icon-layout"></i></button>
            <aside class="sidebar sidebar-offcanvas">
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                <h3 class="widget-title">Shop Categories</h3>
                <ul>
                  <li class="has-children expanded"><a href="#">Shoes</a><span>(1138)</span>
                    <ul>
                      <li><a href="#">Women's</a><span>(508)</span>
                        <ul>
                          <li><a href="#">Sneakers</a></li>
                          <li><a href="#">Heels</a></li>
                          <li><a href="#">Loafers</a></li>
                          <li><a href="#">Sandals</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Men's</a><span>(423)</span>
                        <ul>
                          <li><a href="#">Boots</a></li>
                          <li><a href="#">Oxfords</a></li>
                          <li><a href="#">Loafers</a></li>
                          <li><a href="#">Sandals</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Boy's Shoes</a><span>(97)</span></li>
                      <li><a href="#">Girl's Shoes</a><span>(110)</span></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Clothing</a><span>(2356)</span>
                    <ul>
                      <li><a href="#">Women's</a><span>(1032)</span>
                        <ul>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shirts &amp; Tops</a></li>
                          <li><a href="#">Swimwear</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Men's</a><span>(937)</span>
                        <ul>
                          <li><a href="#">Shirts &amp; Tops</a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Swimwear</a></li>
                          <li><a href="#">Pants</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Kid's Clothing</a><span>(386)</span></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Bags</a><span>(420)</span>
                    <ul>
                      <li><a href="#">Handbags</a><span>(180)</span></li>
                      <li><a href="#">Backpacks</a><span>(132)</span></li>
                      <li><a href="#">Wallets &amp; Accessories</a><span>(47)</span></li>
                      <li><a href="#">Luggage</a><span>(61)</span></li>
                    </ul>
                  </li>
                  <li class="has-children"><a href="#">Accessories</a><span>(874)</span>
                    <ul>
                      <li><a href="#">Sunglasses</a><span>(211)</span></li>
                      <li><a href="#">Hats</a><span>(195)</span></li>
                      <li><a href="#">Watches</a><span>(159)</span></li>
                      <li><a href="#">Jewelry</a><span>(203)</span></li>
                      <li><a href="#">Belts</a><span>(106)</span></li>
                    </ul>
                  </li>
                </ul>
              </section>
              <!-- Widget Price Range-->
              <section class="widget widget-categories">
                <h3 class="widget-title">Price Range</h3>
                <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                  <div class="ui-range-slider"></div>
                  <footer class="ui-range-slider-footer">
                    <div class="column">
                      <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                    </div>
                    <div class="column">
                      <div class="ui-range-values">
                        <div class="ui-range-value-min">$<span></span>
                          <input type="hidden">
                        </div>&nbsp;-&nbsp;
                        <div class="ui-range-value-max">$<span></span>
                          <input type="hidden">
                        </div>
                      </div>
                    </div>
                  </footer>
                </form>
              </section>
              <!-- Widget Brand Filter-->
              <section class="widget">
                <h3 class="widget-title">Filter by Brand</h3>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="adidas">
                  <label class="custom-control-label" for="adidas">Adidas&nbsp;<span class="text-muted">(254)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="bilabong">
                  <label class="custom-control-label" for="bilabong">Bilabong&nbsp;<span class="text-muted">(39)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="klein">
                  <label class="custom-control-label" for="klein">Calvin Klein&nbsp;<span class="text-muted">(128)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="nike">
                  <label class="custom-control-label" for="nike">Nike&nbsp;<span class="text-muted">(310)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="bahama">
                  <label class="custom-control-label" for="bahama">Tommy Bahama&nbsp;<span class="text-muted">(42)</span></label>
                </div>
              </section>
              <!-- Widget Size Filter-->
              <section class="widget">
                <h3 class="widget-title">Filter by Size</h3>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="xl">
                  <label class="custom-control-label" for="xl">XL&nbsp;<span class="text-muted">(208)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="l">
                  <label class="custom-control-label" for="l">L&nbsp;<span class="text-muted">(311)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="m">
                  <label class="custom-control-label" for="m">M&nbsp;<span class="text-muted">(485)</span></label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="s">
                  <label class="custom-control-label" for="s">S&nbsp;<span class="text-muted">(213)</span></label>
                </div>
              </section>
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(<?php echo base_url().IMG_PATH;?>banners/02.jpg);">
                <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglassess</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                </div>
              </section>
            </aside>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: 00 33 169 7720</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Unishop</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <div class="row">
            <div class="col-md-7 padding-bottom-1x">
              <!-- Payment Methods-->
              <div class="margin-bottom-1x" style="max-width: 615px;"><img src="<?php echo base_url().IMG_PATH;?>payment_methods.png" alt="Payment Methods">
              </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
              <div class="margin-top-1x hidden-md-up"></div>
              <!--Subscription-->
              <form class="subscribe-form" action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="clearfix">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
              </form>
            </div>
          </div>
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
        </div>
      </footer>
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

<!-- Mirrored from themes.rokaux.com/unishop/v2.2/template-1/shop-grid-ls.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Feb 2018 18:16:59 GMT -->
</html>
