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
            <div class="panel-body">
            <h4 class="m-t-0 m-b-30 text-center">Let's Make Some craze On Selling</h4>
            </div>
          </div>
      </div>
</div>


<div class="panel panel-primary">
  <div class="panel-body">
    <?php echo form_open('Base_controller/coupons');?>
<div class="row">

   <div class="col-sm-3">
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Min Purchage Amount" name="min_purchage_amount">
    </div>
    </div>
    <div class="col-sm-3">
         <div class="form-group">
<select class="form-control" name="coupon_type">
<option value="1">Rupees</option>
<option value="2">Percentage</option>
</select>
</div>
     </div>

     <div class="col-sm-3">
     <div class="form-group">
        <input type="text" class="form-control" placeholder="Discount Amount" name="discount_amount">
      </div>
      </div>

     <div class="col-sm-3">
          <div class="form-group">
 <select class="form-control" name="coupon_status">
 <option value="1">Active</option>
 <option value="2">Inactive</option>
 </select>
 </div>
      </div>
</div>

<br>
<div class="row">
   <div class="col-sm-3"></div>
<div class="col-sm-3">

<div class="form-group">
  <div>
    <div class="input-group">
<span class="input-group-addon bg-custom b-0" style="background:#0099ff;">From </span>
  <input type="text" class="form-control" name="coupon_from" id="datepicker" placeholder="mm/dd/yyyy" id="datepicker">
  <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar"></i></span>
</div></div></div>
</div>

<div class="col-sm-3">
  <div class="form-group">
    <div>
      <div class="input-group">
        <span class="input-group-addon bg-custom b-0" style="background:#0099ff;">To </span>
    <input type="text" class="form-control" name="coupon_to" id="datepicker2" placeholder="mm/dd/yyyy" id="datepicker">
    <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar"></i></span>
  </div></div></div>

</div>
 <div class="col-sm-3"></div>
  </div>


<br>
  <div class="row">
     <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="form-group">
       <input type="text" class="form-control" placeholder="Enter Coupon" name="coupon_code">
     </div>
   </div>
        <div class="col-sm-4"></div>
  </div>

<br><br>

<button type="submit" name="share" class="btn btn-lg btn-primary center-block">Share</button>
<?php echo form_close();?>
<?php if(isset($success)){
  ?>
  <p class="text-primary"><?php echo $success;?></p>
<?php
}
 ?>
 <?php if(isset($Failed)){
   ?>
     <p class="text-primary"><?php echo $failed;?></p>
 <?php
 }
  ?>







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
