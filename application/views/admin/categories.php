<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:49 GMT -->
<head>
  <meta charset="utf-8" /><title>Appzia - Responsive Admin Dashboard Template</title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="<?php echo base_url().ADMIN_IMG_PATH;?>/favicon.ico">
<?php include_once "css_files.php";?>
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
        <h4 class="m-b-30 m-t-0" style="float:left;">Category Table</h4>
    <div style="height:2cm;"></div>
        <?php echo form_open('Base_controller/categories');?>
        <div class="row">
        <div class="col-sm-4">
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
        <a href="<?php echo base_url();?>index.php/Base_controller/categories">
        <button type="button" class="btn btn-info">Show All</button>
        </a>
        </div>
        </div>
        <?php echo form_close();?>


        <button class="btn btn-primary" style="float:right;">
          <a href="<?php echo base_url();?>index.php/Admin_controller/add_categories" style="color:white;">Add new Category</a></button>
        <div class="row">
          <div class="col-xs-12">
            <div class="table-responsive" style="border:none;">
              <table class="table">
                <thead>
                <tr><th>#</th><th>Category Name</th><th>Added On</th><th>Status</th><th>Action</th></tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  foreach($cats->result() as $category){
                    ?>
                <tr><td><?php echo $i;?></td><td><?php echo $category->cat_name;?></td><td><?php echo $category->cat_added_on;?></td>
                  <td>
                    <?php
                    $status = $category->cat_status;
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

</div></div>
<?php
    include_once "footer.php";
     ?>
   </div></div>
<?php include_once "js_files.php";?>
 </body>
<!-- Mirrored from themesdesign.in/appzia/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:49 GMT -->
</html>
