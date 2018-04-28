<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:41 GMT -->
<head><meta charset="utf-8" />
  <title>Appzia - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="<?php echo base_url().ADMIN_IMG_PATH;?>/favicon.ico">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php include_once "css_files.php";?>
</head>
<body class="fixed-left" onload="alert_popup()">
  <div id="wrapper">

          <?php
           include_once "header.php";
            ?>


    <div class="left side-menu"><div class="sidebar-inner slimscrollleft">

      <?php
             include_once "sidemenu.php";
              ?>
    <div class="clearfix"></div></div></div><div class="content-page">
      <div class="content"><div class=""><div class="page-header-title">
      </div></div>
      <div class="page-content-wrapper ">
        <div class="container">
          <div class="row">
          <div class="col-sm-12">
          <div class="panel panel-primary">

            <h4 class="m-t-0 m-b-30 text-center" style="padding:10px;">Manage Coupons</h4>

          </div>
      </div>
</div>



<div class="container">
  <div class="row">
    <?php
foreach($coupons->result() as $coupon){
     ?>
    <div class="col-lg-4">
      <?php $coupon_type=$coupon->coupon_type;?>
      <?php if($coupon_type==1){
        ?>
      <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title"><?php echo $coupon->coupon_code;?>  <?php echo $coupon->discount_amount;?><i class="fa">&#xf156;</i> Of Discount <span style="float:right;">77</span><i class="fa" style="float:right;">&#xf046;</i></h3></div><div class="panel-body">
        <?php
      }else{
        ?>
        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title"><?php echo $coupon->coupon_code;?>  <?php echo $coupon->discount_amount;?>% Of Discount <span style="float:right;">57</span><i class="fa" style="float:right;">&#xf046;</i></h3></div><div class="panel-body">
          <?php
          }
          ?>
        <p>Min pur amount is <?php echo $coupon->min_purchage_amount;?></p>
        <p><?php echo $coupon->coupon_from;?> - to - <?php echo $coupon->coupon_to;?></p>
        <p><button style="cursor:pointer;float:right;background:none;border:none;" class="btn btn-primary"><span class="glyphicon glyphicon-off" style="float:right;"></span></button></p>


    </div>
  </div>
</div>
<?php
}
 ?>

</div>

</div>

    </div></div></div>
    <?php
    include_once "footer.php";
     ?>
      </div></div>
        <?php
        include_once "js_files.php";
         ?>
         </body>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
<script>
$( function() {
  $( "#datepicker2" ).datepicker();
} );
</script>
<!-- Mirrored from themesdesign.in/appzia/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:42 GMT -->
</html>
