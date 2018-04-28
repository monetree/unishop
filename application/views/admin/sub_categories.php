<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:49 GMT -->
<head>
  <meta charset="utf-8" /><title>Sub Categories</title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="<?php echo base_url().ADMIN_IMG_PATH;?>/favicon.ico">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>icons.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().ADMIN_CSS_PATH;?>style.css" rel="stylesheet" type="text/css">
</head>
<body class="fixed-left">
  <div id="wrapper">

    <?php
    include_once "header.php";
     ?>

    <div class="left side-menu"><div class="sidebar-inner slimscrollleft">

<?php echo include_once "sidemenu.php";?>

      <div class="clearfix"></div>
    </div></div>
    <div class="content-page">
      <div class="content">
        <div class=""><div class="page-header-title">

        </div></div><div class="page-content-wrapper ">
          <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">

      <div class="panel-body">
        <h4 class="m-b-30 m-t-0" style="float:left;">Sub Category Table</h4>
        <div style="height:2cm;"></div>

<?php echo form_open('Base_controller/sub_categories');?>
<div class="row">
  <div class="col-sm-2">

    <select class="form-control" name="select_cat" id="sel1" style="background:#0099ff;color:white;">
    <option value="">-- Choose Cats --</option>
<?php
foreach($select_box_cats->result() as $sb_cats){
 ?>
<option value="<?php echo $sb_cats->cat_id;?>"><?php echo $sb_cats->cat_name;?></option>
<?php
}
 ?>
    </select>

  </div>
<div class="col-sm-2">
<div class="form-group">
<input type="text" class="form-control" name="cat_field" required placeholder="Search Here .  ."/></div>
</div>
<div class="col-sm-2">
  <select class="form-control" name="status">
    <option value="1">Active</option>
    <option value="2">Inactive</option>
   </select>
</div>
<div class="col-sm-2">
     <button type="submit" class="btn btn-primary" name="search">Search</button>
  </div>
    <div class="col-sm-4">
<a href="<?php echo base_url();?>index.php/Base_controller/sub_categories">
<button type="button" class="btn btn-info">Show All</button>
</a>
</div>

</div>
<?php echo form_close();?>

        <button class="btn btn-primary" style="float:right;">
          <a href="<?php echo base_url();?>index.php/Admin_controller/add_sub_categories" style="color:white;">Add new sub Category</a></button>
        <div class="row">
          <div class="col-xs-12">
            <div class="table-responsive">
              <table class="table">
                <div class="table-responsive" style="border:none;">
                <thead>
                <tr><th>#</th><th>Category Name</th><th>Sub Cat Name</th><th>Added On</th><th>Status</th><th>Action</th></tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  foreach($cats->result() as $category){
                    ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $category->sub_cat_name;?></td>
                  <td><?php echo $category->cat_name;?></td>
                  <td><?php echo $category->sub_cat_added_on;?></td>
                  <td>
                    <?php
                    $status = $category->sub_cat_status;
                    if($status == 1){
                      echo "active";
                    }else{
                      echo "In-Active";
                    }

                    ?>
                  </td>
                  <td><a href="#"><button class="btn btn-danger">delete</button></a>
                      <a href="#"><button class="btn btn-info">update</button></a></td>

                </tr>
                  <?php
                  $i++;
                }
                  ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div></div><footer class="footer"> © 2016 - 2017 Appzia - All Rights Reserved. </footer></div></div> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/bootstrap.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/modernizr.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/detect.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/fastclick.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.slimscroll.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.blockUI.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/waves.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/wow.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.nicescroll.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/jquery.scrollTo.min.js"></script> <script src="<?php echo base_url().ADMIN_JS_PATH;?>/app.js"></script> </body>
<!-- Mirrored from themesdesign.in/appzia/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:49 GMT -->
</html>
