<!DOCTYPE html><html>
<?php
$this->load->library('session');
print_r($_SESSION);
 ?>
<!-- Mirrored from themesdesign.in/appzia/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:24:22 GMT -->
<head><meta charset="utf-8" /><title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="<?php echo base_url().ADMIN_IMG_PATH;?>/favicon.ico">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>icons.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="accountbg">
  </div><div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages"><div class="panel-body">
      <h3 class="text-center m-t-0 m-b-15"> <img src="<?php echo base_url().IMG_PATH;?>logo/logo.png" style="margin-left:3.5cm;"></a></h3>

      <form class="form-horizontal m-t-20" action="<?php echo site_url();?>/Admin_controller/index" method="post">
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="email" placeholder="Enter Email">
       </div></div><div class="form-group"><div class="col-xs-12">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div></div><div class="form-group">
</div><div class="form-group text-center m-t-40">
  <div class="col-xs-12">
    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit" name="submit">Log In</button>
  </div></div><div class="form-group m-t-30 m-b-0">
    <div class="col-sm-7"> <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a></div>
</div>
<?php echo form_close();?>

</div></div></div> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/bootstrap.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/modernizr.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/detect.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/fastclick.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.slimscroll.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.blockUI.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/waves.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/wow.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.nicescroll.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.scrollTo.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/app.js"></script> </body>
</html>

<?php if(isset($error_msg)){ echo $error_msg;}?>
