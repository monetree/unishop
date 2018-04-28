
<div class="topbar">
  <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@unishop.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
  </div>
  <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
    <div class="lang-currency-switcher-wrap">
      <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="<?php echo base_url().IMG_PATH;?>flags/GB.png"></span><span class="currency">$ USD</span></div>
      <div class="dropdown-menu">
        <div class="currency-select">
          <select class="form-control form-control-rounded form-control-sm">
            <option value="usd">$ USD</option>
            <option value="usd">€ EUR</option>
            <option value="usd">£ UKP</option>
            <option value="usd">¥ JPY</option>
          </select>
        </div><a class="dropdown-item" href="#"><img src="<?php echo base_url().IMG_PATH;?>flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="<?php echo base_url().IMG_PATH;?>flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="<?php echo base_url().IMG_PATH;?>flags/IT.png" alt="Italiano">Italiano</a>
      </div>
    </div>
  </div>
</div>
<header class="navbar navbar-sticky" ng-app="myApp" ng-controller="myCtrl">
  <!-- Search-->

  <form class="site-search" method="post">
    <input type="text" name="items" placeholder="Type to search..." ng-keydown="search()" ng-model="test" value="">

    <div class="panel panel-info">
    <div class="panel-body bg-info text-white lead" style="box-shadow:5px 5px 20px silver;">
    <ul style="margin-top:30px;">
      <li ng-repeat="item in items | filter:test" style="list-style-type:none;padding:10px;">{{ item.prod_name }}</li>
    </ul>
  </div>
</div>


    <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
  </form>
  <div class="site-branding">
    <div class="inner">
      <!-- Off-Canvas Toggle (#shop-categories)-->
      <a class="offcanvas-toggle cats-toggle"></a>
      <!-- Off-Canvas Toggle (#mobile-menu)-->
      <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
      <!-- Site Logo--><a class="site-logo" href="<?php echo base_url()?>index.php/Base_controller/index"><img src="<?php echo base_url().IMG_PATH;?>logo/logo.png" alt="Unishop"></a>
    </div>
  </div>
  <!-- Main Navigation-->
  <nav class="site-menu">
    <ul>
      <li class="has-megamenu active"><a href="<?php echo base_url()?>index.php/Base_controller/index"><span>Home</span></a>
      </li>
      <li><a href="shop-grid-ls.html"><span>Shop</span></a>
        <ul class="sub-menu">
            <li><a href="shop-categories.html">Shop Categories</a></li>

          <li class="has-children"><a href="shop-grid-ls.html"><span>categories</span></a>
            <ul class="sub-menu" id="display_sub_cat">
                <li><a href="shop-grid-ls.html">sub_category</a></li>

            </ul>
          </li>


        </ul>
      </li>
      <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">Top Categories</span>
            <ul class="sub-menu">
              <?php
              foreach($cats->result() as $categories){
               ?>
              <li><a href="#"><?php echo $categories->cat_name;?></a></li>
              <?php
              }
               ?>
            </ul>
          </li>
          <li><span class="mega-menu-title">Specialty Shops</span>
            <ul class="sub-menu">
              <?php
              foreach($special_shop->result() as $spl_shop){
               ?>
              <li><a href="#"><?php echo ucfirst($spl_shop->spl_shop_name);?></a></li>
              <?php
              }
               ?>
            </ul>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(<?php echo base_url().IMG_PATH;?>banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(<?php echo base_url().IMG_PATH;?>banners/03.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
              </div>
            </section>
          </li>
        </ul>
      </li>
      <li><a href="account-orders.html"><span>Account</span></a>
        <ul class="sub-menu">
            <li><a href="account-login.html">Login / Register</a></li>
            <li><a href="account-password-recovery.html">Password Recovery</a></li>
            <li><a href="account-orders.html">Orders List</a></li>
            <li><a href="account-wishlist.html">Wishlist</a></li>
            <li><a href="account-profile.html">Profile Page</a></li>
            <li><a href="account-address.html">Contact / Shipping Address</a></li>
            <li><a href="account-tickets.html">My Tickets</a></li>
            <li><a href="account-single-ticket.html">Single Ticket</a></li>
        </ul>
      </li>
      <li><a href="blog-rs.html"><span>About Us</span></a>

      </li>
      <li><a href="#"><span>Pages</span></a>
        <ul class="sub-menu">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="faq.html">Help / FAQ</a></li>
            <li><a href="order-tracking.html">Order Tracking</a></li>
            <li><a href="search-results.html">Search Results</a></li>
            <li><a href="404.html">404 Not Found</a></li>
            <li><a href="coming-soon.html">Coming Soon</a></li>
          <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
        </ul>
      </li>
      <li class="has-megamenu"><a href="components/accordion.html"><span>Components</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">A - F</span>
              <ul class="sub-menu">
                <li><a href="components/accordion.html">Accordion</a></li>
                <li><a href="components/alerts.html">Alerts</a></li>
                <li><a href="components/buttons.html">Buttons</a></li>
                <li><a href="components/cards.html">Cards</a></li>
                <li><a href="components/carousel.html">Carousel</a></li>
                <li><a href="components/countdown.html">Countdown</a></li>
                <li><a href="components/forms.html">Forms</a></li>
              </ul>
          </li>
          <li><span class="mega-menu-title">G - M</span>
              <ul class="sub-menu">
                <li><a href="components/gallery.html">Gallery</a></li>
                <li><a href="components/google-maps.html">Google Maps</a></li>
                <li><a href="components/images.html">Images &amp; Figures</a></li>
                <li><a href="components/list-group.html">List Group</a></li>
                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                <li><a href="components/media.html">Media Object</a></li>
                <li><a href="components/modal.html">Modal</a></li>
              </ul>
          </li>
          <li><span class="mega-menu-title">P - T</span>
              <ul class="sub-menu">
                <li><a href="components/pagination.html">Pagination</a></li>
                <li><a href="components/pills.html">Pills</a></li>
                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                <li><a href="components/shop-items.html">Shop Items</a></li>
                <li><a href="components/steps.html">Steps</a></li>
                <li><a href="components/tables.html">Tables</a></li>
                <li><a href="components/tabs.html">Tabs</a></li>
              </ul>
          </li>
          <li><span class="mega-menu-title">T - W</span>
              <ul class="sub-menu">
                <li><a href="components/team.html">Team</a></li>
                <li><a href="components/toasts.html">Toast Notifications</a></li>
                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a href="components/typography.html">Typography</a></li>
                <li><a href="components/video-player.html">Video Player</a></li>
                <li><a href="components/widgets.html">Widgets</a></li>
              </ul>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- Toolbar-->
  <div class="toolbar">
    <div class="inner">
      <div class="tools">
        <div class="search"><i class="icon-search"></i></div>
        <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
          <ul class="toolbar-dropdown">
            <li class="sub-menu-user">
              <div class="user-ava"><img src="<?php echo base_url().IMG_PATH;?>account/user-ava-sm.jpg" alt="Daniel Adams">
              </div>
              <div class="user-info">
                <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
              </div>
            </li>
              <li><a href="account-profile.html">My Profile</a></li>
              <li><a href="account-orders.html">Orders List</a></li>
              <li><a href="account-wishlist.html">Wishlist</a></li>
            <li class="sub-menu-separator"></li>
            <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
          </ul>
        </div>
        <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
          <div class="toolbar-dropdown">
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="<?php echo base_url().IMG_PATH;?>cart-dropdown/01.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="<?php echo base_url().IMG_PATH;?>cart-dropdown/02.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="<?php echo base_url().IMG_PATH;?>cart-dropdown/03.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><span class="text-lg">Total:</span></div>
              <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--Angular code-->
<script src="<?php echo base_url().JS_PATH;?>angular.min.js"></script>
<script type="text/javascript">
angular.module('myApp',[]).controller('myCtrl',function($scope,$http){
  $scope.search=function(){
    $http.get("http://localhost/unishop/index.php/Base_controller/search",{'item_id':$scope.test})
    .then(function(response){
     $scope.items = response.data.items;
   });
  }
});
</script>
