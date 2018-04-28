<?php
class Base_controller extends CI_controller{
public function __construct(){
  parent::__construct();
  $this->load->model('Base_model','bm');
  $this->load->helper(array('form'));
}

public function header(){
  $categories['cats'] = $this->cats();
  $cond = array(
    'spl_shop_type' => 1
  );
  $categories['special_shop'] = $this->bm->common_select('uni_special_shop','spl_shop_priority','ASC',$cond,'','','');
  return $categories;
}
public function index(){
  $categories = $this->header();
  $cond2 = array(
    'prod_type' => 7
  );
  $cond_top_seller = array(
    'prod_type' => 1
  );
  $cond_new_arrival = array(
    'prod_type' => 2
  );
  $cond_best_rated = array(
    'prod_type' => 3
  );
  $categories['top_seller'] = $this->bm->common_select('uni_products_tbl','','ASC',$cond_top_seller,'','','');
  $categories['new_arrival'] = $this->bm->common_select('uni_products_tbl','','ASC',$cond_new_arrival,'','','');
  $categories['best_rated'] = $this->bm->common_select('uni_products_tbl','','ASC',$cond_best_rated,'','','');
  $categories['featured_products'] = $this->bm->common_select('uni_products_tbl','','ASC',$cond2,'','','');
  $this->load->view('index',$categories);
}

public function single(){
  $categories = $this->header();
  $prod_id = $this->uri->segment(3);
  $cond = array(
    'uni_products_tbl.prod_id' => $prod_id,
  );
  $categories['single_product'] = $this->bm->prod_with_img('uni_products_tbl','prod_img_tbl',$cond,'uni_products_tbl.prod_id=prod_img_tbl.prod_id','inner');
  $this->load->view('single',$categories);

}

public function cats(){
  $categories['cats'] = $this->bm->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
  return $categories['cats'];
}
public function sub_cats(){
  $categories['cats'] = $this->bm->common_select('uni_sub_category_tbl','sub_cat_priority','ASC','','','','uni_categories_tbl');
  return $categories['cats'];
}
public function list_sub_cats(){
  $categories['cats'] = $this->bm->common_select('uni_list_sub_category_tbl','list_sub_cat_priority','ASC','','','','');
  return $categories['cats'];
}
public function products(){
  $categories['cats'] = $this->bm->common_join('uni_products_tbl','uni_categories_tbl','uni_sub_category_tbl','uni_list_sub_category_tbl');
  return $categories['cats'];
}


public function categories(){
  extract($_POST);
if(isset($search)){
  if(!empty($cat_field)){
    $filter_data = array(
      'cat_name'=>$cat_field,
      'cat_status' => $status
    );
    $resp = $this->bm->common_select('uni_categories_tbl','cat_name','ASC','',$filter_data,'after','');
    $sub_cats = array(
      'cats' => $resp
    );
    $this->load->view('admin/categories',$sub_cats);
  }
}else{
  $name['cats'] = $this->cats();
  $this->load->view('admin/categories',$name);
}
}

public function sub_categories(){
  extract($_POST);
if(isset($search)){
if(!empty($cat_field) && empty($select_cat)){
  $filter_data = array(
    'sub_cat_name'=>$cat_field,
    'sub_cat_status' => $status,
    'cat_name' => $select_cat

  );
    $resp = $this->bm->common_select('uni_sub_category_tbl','sub_cat_name','ASC','',$filter_data,'after','uni_categories_tbl');
    $sub_cats = array(
      'cats' => $resp,
      'select_box_cats' => $this->cats()
    );
    $this->load->view('admin/sub_categories',$sub_cats);
  }

  if(!empty($select_cat)){
    $filter_data = array(
      'sub_cat_name'=>$cat_field,
      'sub_cat_status' => $status,
      'cat_name' => $select_cat

    );
      $resp = $this->bm->common_select('uni_sub_category_tbl','sub_cat_name','ASC','',$filter_data,'after','uni_categories_tbl');
      $sub_cats = array(
        'cats' => $resp,
        'select_box_cats' => $this->cats()
      );
      $this->load->view('admin/sub_categories',$sub_cats);
    }



}else{
  $name['cats'] = $this->sub_cats();
  $name['select_box_cats'] = $this->cats();
  $this->load->view('admin/sub_categories',$name);
  }
}

public function list_sub_categories(){
if(isset($search) && !empty($cat_field)){
  extract($_POST);
  $filter_data = array(
    'list_sub_cat_name'=>$cat_field,
    'list_sub_cat_status' => $status
  );
    $resp = $this->bm->common_select('uni_list_sub_category_tbl','list_sub_cat_name','ASC','',$filter_data,'after','');
    $sub_cats = array(
      'cats' => $resp
    );
    $this->load->view('admin/list_sub_categories',$sub_cats);
}else{
  $name['cats'] = $this->list_sub_cats();
  $name['select_box_cats'] = $this->cats();
  $name['select_box_sub_cats'] = $this->sub_cats();
  $this->load->view('admin/list_sub_categories',$name);
}
}


public function manage_products(){
    $output = array();
$name['select_box_cats'] = $this->cats();
$name['cats'] = $this->products();
$this->load->view('admin/manageproducts',$name);
}


public function angular_sub_category(){
  $output = array();
  $json_data = json_decode(file_get_contents("php://input"));
  $resp = $this->bm->angular_select('uni_sub_category_tbl',$json_data);
  foreach($resp->result() as $row){
    $output[] = $row;
  }
  $o['sub_category']=$output;
  echo json_encode($o);
}

public function angular_list_sub_category(){
  $output = array();
  $json_data = json_decode(file_get_contents("php://input"));
  $resp = $this->bm->angular_select_list('uni_list_sub_category_tbl',$json_data);
  foreach($resp->result() as $row){
    $output[] = $row;
  }
  $o['list_sub_category']=$output;
  echo json_encode($o);
}

public function search(){

  $resp = $this->bm->search_items('uni_products_tbl','uni_categories_tbl','uni_sub_category_tbl','uni_list_sub_category_tbl');
  foreach($resp->result() as $row){
    $output[] = $row;
  }
  $o['items'] = $output;
  echo json_encode($o);
}
public function products_grids(){
$items=$this->header();
$items['products']=$this->products();
$this->load->view('products',$items);
}
public function cart(){
  
}


public function coupons(){
    extract($_POST);
    if(isset($share)){
    $coupon_data = array(
      'coupon_code' => $coupon_code,
      'coupon_from' => $coupon_from ,
      'coupon_to' => $coupon_to,
      'discount_amount' => $discount_amount,
      'coupon_type' => $coupon_type,
      'coupon_status' => $coupon_status,
      'min_purchage_amount' => $min_purchage_amount
    );
    $resp = $this->bm->common_insert($coupon_data,'uni_coupons_tbl');
    if($resp==1)
    $msg['success'] = "Coupon Inserted Successfully";
    else {
      $msg['failed'] = "Failed To Insert Coupon";
    }
$this->load->view('admin/add_coupons',$msg);
  }else{
      $this->load->view('admin/add_coupons');
  }
}

public function manage_coupons(){
$coupon['coupons'] = $this->bm->common_select('uni_coupons_tbl','','','','','','');
$this->load->view('admin/manage_coupons',$coupon);
}

public function view_404(){
  $this->load->view('404');
}
//debug

public function check(){
  $count=count($cname);
  echo $count;
}

//debug

}

?>
