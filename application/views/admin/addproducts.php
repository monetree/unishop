<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Appzia - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Admin Dashboard" name="description" />
  <meta content="ThemeDesign" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/admin/images/favicon.ico">
  <?php echo include_once "css_files.php";?>
</head>
<body class="fixed-left"><div id="wrapper">
  <?php
   include_once "header.php";
    ?>
  <div class="left side-menu"><div class="sidebar-inner slimscrollleft">

    <?php
           include_once "sidemenu.php";
            ?>
</div></div>

<div class="content-page" ng-app="myApp" ng-controller="myCtrl">
      <div class="content">

        <div class=""><div class="page-header-title">
      </div></div><div class="page-content-wrapper ">
        <div class="container">

          <div class="panel panel-primary">
            <div class="panel-body">

            <?php
            //success message
            if(isset($success)){
            echo $success;
          }elseif(isset($failed)){
            echo $failed;
          }else{
            ?>
            <h4 class="m-t-0 m-b-30">Add Products</h4>
            <?php
            }
            ?>

          <?php echo form_open_multipart('Admin_controller/add_products');?>
            <div class="row">
              <div class="col-sm-4">

        <div class="form-group"> <div class="col-sm-10">
          <select class="form-control" ng-model="cat" ng-change="showSubCat()" name="cat_id">
            <option value="">Categories</option>
                <?php foreach($cats->result() as $categories){
              ?>
            <option value="<?php echo $categories->cat_id;?>"><?php echo $categories->cat_name;?></option>
            <?php
          }
             ?>
          </select>
      </div></div>

      </div>

      <div class="col-sm-4">


<div class="form-group">
  <div class="col-sm-10">
  <select class="form-control" ng-model="sub_cat" name="sub_cat_id" ng-change="showListSubCat()">
    <option value="">Sub Categories</option>
    <option ng-repeat="sub_cat in sub_category" value="{{sub_cat.sub_cat_id}}">{{ sub_cat.sub_cat_name }}</option>
  </select>

</div></div>
</div>

<div class="col-sm-4">

<div class="form-group"> <div class="col-sm-10">

 <select class="form-control" name="list_sub_cat_id">
   <option value="">List Sub Categories</option>
   <option ng-repeat="list_sub_cat in list_sub_category" value="{{list_sub_cat.list_sub_cat_id}}">{{ list_sub_cat.list_sub_cat_name }}</option>
 </select>

</div></div>
</div>


      </div>

      <div class="col-md-12">
        <div class="panel panel-primary"><div class="panel-body"><h4 class="m-t-0 m-b-30">Inline Form</h4>
          <div class="form-inline" role="form">
          <div class="form-group"> <input type="text" name="prod_name" class="form-control" id="exampleInputEmail2" placeholder="Products Name"></div>
          <div class="form-group m-l-10"> <input type="text" name="prod_available_quantity" class="form-control" id="exampleInputPassword2" placeholder="Available Quantity"></div>
          <div class="form-group m-l-10"><input type="text" name="prod_mrp" class="form-control" id="exampleInputPassword2" placeholder=" Product MRP"></div>
          <div class="form-group m-l-10"><input type="text" name="prod_sp" class="form-control" id="exampleInputPassword2" placeholder="Selling Price"></div>
      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-sm-12">
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio1" value="1" name="prod_type" checked="checked"> <label for="inlineRadio1"> special product</label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="2" name="prod_type"> <label for="inlineRadio2"> latest prod </label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="3" name="prod_type"> <label for="inlineRadio2"> featured prod </label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="4" name="prod_type"> <label for="inlineRadio2"> latest + featured </label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="5" name="prod_type"> <label for="inlineRadio2"> latest + spl </label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="6" name="prod_type"> <label for="inlineRadio2"> spl + featured </label></div>
<div class="radio radio-info radio-inline"> <input type="radio" id="inlineRadio2" value="7" name="prod_type"> <label for="inlineRadio2"> spl + featured + latest </label></div>

    </div>

  </div>
<div style="height:0.8cm;"></div>
  <div class="row">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-5">
Choose from here As per your requirement
    </div>
    <div class="col-sm-3">
    </div>
  </div>

<div style="height:0.8cm;"></div>
  <div class="row">
    <div class="col-sm-5">

    </div>
    <div class="col-sm-2">
      <div class="form-group">
          <select class="form-control" name="prod_status">
            <option style="background:#0099ff;padding:50px;" value="1">Active</option>
            <option style="background:red;" value="2">Inactive</option>
          </select>
    </div>
  </div>
    <div class="col-sm-5">
    </div>
  </div>



        </div><div class="text-center m-t-15">

                <div class="row">
                  <div class="col-sm-4"> </div>
                  <div class="col-sm-4"><label style="border:2px solid #0099ff;padding:5px;border-radius:12px/25px;cursor:pointer;">Product Display Picture<input type="file" style="display:none;" name="prod_dp"></lebel></div>
                      <div class="col-sm-4"> </div>
                  </div><br>
      <div class="row">
          <div class="col-sm-2"></div>
  <div class="col-sm-2">        <label style="border:2px solid #0099ff;padding:5px;border-radius:12px/25px;cursor:pointer;">Img 1<input type="file" style="display:none;" name="prod_img[]"  multiple="multiple"></lebel></div>
  <div class="col-sm-2">        <label style="border:2px solid #0099ff;padding:5px;border-radius:12px/25px;cursor:pointer;">Img 2<input type="file" style="display:none;" name="prod_img[]"></lebel></div>
  <div class="col-sm-2">        <label style="border:2px solid #0099ff;padding:5px;border-radius:12px/25px;cursor:pointer;">Img 3<input type="file" style="display:none;" name="prod_img[]"></lebel></div>
  <div class="col-sm-2">        <label style="border:2px solid #0099ff;padding:5px;border-radius:12px/25px;cursor:pointer;">Img 4<input type="file" style="display:none;" name="prod_img[]"></lebel></div>
      </div>
      <br>
          </div>
          <div class="row">
                <div class="col-sm-2"></div>
            <div class="col-sm-8">
        <textarea class="form-control" name="prod_desc"></textarea>
            </div>
                <div class="col-sm-2"></div>
          </div>
          <br>
          <p style="text-align:center;">
            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light center-block">Submit</button></p>
<br>


</form>
        </div></div></div></div></div></div></div></div>
      </div>

















      <?php
      include_once "footer.php";
       ?>
        </div></div>

          <script type="text/javascript" src="<?php echo base_url().ADMIN_PLUG_PATH;?>/parsleyjs/parsley.min.js"></script>
          <script src="<?php echo base_url().ADMIN_JS_PATH;?>dropzone.js"></script>
          <script type="text/javascript">$(document).ready(function(){$('form').parsley();});</script>

          <?php
          include_once "js_files.php";
           ?>

<script>
var app= angular.module("myApp",[]);
app.controller("myCtrl",function($scope, $http){
 $scope.showSubCat = function(){
    $http.post("http://localhost/unishop/index.php/Base_controller/angular_sub_category", {'cat_id':$scope.cat})
    .then(function(response){
         $scope.sub_category = response.data.sub_category;
    });
}
$scope.showListSubCat = function(){
   $http.post("http://localhost/unishop/index.php/Base_controller/angular_list_sub_category", {'cat_id':$scope.sub_cat})
   .then(function(response){
        $scope.list_sub_category = response.data.list_sub_category;
   });
}

});
</script>
     </body>
<!-- Mirrored from themesdesign.in/appzia/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 04:23:49 GMT -->
</html>
