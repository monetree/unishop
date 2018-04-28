<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:41 GMT -->
<head><meta charset="utf-8" />
  <title>Appzia - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="<?php echo base_url().ADMIN_IMG_PATH;?>/favicon.ico">
<?php include_once "css_files.php";?>
</head><body class="fixed-left">
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
      </div></div><div class="page-content-wrapper ">
        <div class="container"><div class="row">
          <div class="col-sm-12">
          <div class="panel panel-primary"><div class="panel-body"><h4 class="m-t-0 m-b-30">Insert Categories</h4>
            <div class="row">
              <div class="col-sm-6">
                <div class="m-t-20">

              <?php echo form_open('Admin_controller/add_sub_categories');?>
                <div class="form-group">

  <select class="form-control" name="cat_id" id="sel1" style="background:#0099ff;color:white;">
    <option value="">-- Choose Categories --</option>
    <?php foreach($cats->result() as $categories){
      ?>
    <option value="<?php echo $categories->cat_id;?>"><?php echo $categories->cat_name;?></option>
    <?php
    }
     ?>
  </select><br>
                   <input type="text" class="form-control" placeholder="Enter Category Name" name="sub_cat_name">
                 </div>
                 <div class="form-group">
                     <div class="row"><div class="col-sm-4">
                        <div class="checkbox checkbox-info checkbox-circle">
                      <input id="checkbox8" type="checkbox" checked="checked" value="1" name="priority">
                      <label for="checkbox8"> 1 </label></div>
                      <div class="checkbox checkbox-info checkbox-circle">
                         <input id="checkbox8" type="checkbox" name="priority" value="2">
                         <label for="checkbox8"> 2 </label></div>
                         <div class="checkbox checkbox-info checkbox-circle">
                            <input id="checkbox8" type="checkbox" name="priority" value="3">
                            <label for="checkbox8"> 3 </label></div>
                            <div class="checkbox checkbox-info checkbox-circle">
                               <input id="checkbox8" type="checkbox" name="priority" value="4">
                               <label for="checkbox8"> 4 </label></div>
                               <div class="checkbox checkbox-info checkbox-circle">
                                  <input id="checkbox8" type="checkbox" name="priority" value="5">
                                  <label for="checkbox8"> 5 </label></div>
                       <p>Choose Priority</p></div>

                       <p>Choose Here</p>
                       <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="1" name="status" checked="checked">
                           <label for="inlineRadio1"> Active </label></div><div class="radio radio-inline">
                              <input type="radio" id="inlineRadio2" value="2" name="status">
                               <label for="inlineRadio2"> In-Active </label>
                             </div>
                             <br>
                             <br>
                             <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="1" name="special" checked="checked">
                                 <label for="inlineRadio1"> High priority </label></div><div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio2" value="2" name="special">
                                     <label for="inlineRadio2"> less priority </label>
                                   </div>

                              <div>
                                <br><br>
          <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit"> Submit </button>
        </div></div>

      </div></div>
      </div>
<div class="col-sm-2"></div>

      <?php echo form_close();?>
      <?php if(isset($inserted)){echo $inserted;}?>
      <?php if(isset($failed)){echo $failed;}?>
      <?php if(!(isset($inserted) && !isset($failed))){
        ?>
        <span class="glyphicon glyphicon-pencil" style="color:#0099ff;font-size:200px;"></span>
        <?php
      }
      ?>


      </div></div></div></div>


    </div></div></div>
    <?php
    include_once "footer.php";
     ?>
      </div></div>
      <?php
      include_once "js_files.php";
       ?>
 </body>
<!-- Mirrored from themesdesign.in/appzia/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:42 GMT -->
</html>
