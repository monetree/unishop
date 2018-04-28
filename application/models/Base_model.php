<?php
class Base_model extends CI_model{
  // common crud start here
  //insert
  public function common_insert($data,$table){
    $insert = $this->db->insert($table,$data);
    if($insert)
        return 1;
      else
        return 2;
  }


  //select
  public function common_select($table,$order_by,$asc_dsc,$cond,$filter_data,$before_after,$table2){
    if(!empty($cond)){
    $this->db->where($cond);
  }
  if(!empty($filter_data) && !empty($before_after)){
    $this->db->like($filter_data,$before_after);
  }
  if(!empty($filter_data) && !empty($before_after) && !empty($table2)){
    $this->db->like($filter_data,$before_after);
  }
    $this->db->order_by($order_by,$asc_dsc);
    $this->db->from($table);
    if(!empty($table2)){
      $this->db->join('uni_categories_tbl','uni_categories_tbl.cat_id=uni_sub_category_tbl.cat_id','inner');
    }
    $categories = $this->db->get();
    return $categories;
  }







  //update
  public function common_update($table,$cond){
    $this->db->where($cond);
    $update = $this->db->update($table);
    return $update;
  }
  //delete
  public function common_delete($table,$cond){
    $this->db->where($cond);
    $delete = $this->db->delete($table);
    return $delete;
  }

  public function common_join($table1,$table2,$table3,$table4){
    $this->db->from($table1);
      $this->db->join('uni_categories_tbl','uni_products_tbl.cat_id=uni_categories_tbl.cat_id','inner');
      $this->db->join('uni_sub_category_tbl','uni_products_tbl.sub_cat_id=uni_sub_category_tbl.sub_cat_id','inner');
      $this->db->join('uni_list_sub_category_tbl','uni_products_tbl.list_sub_cat_id=uni_list_sub_category_tbl.list_sub_cat_id','inner');
      $products = $this->db->get();
      return $products;
  }

  public function prod_with_img($table1,$table2,$cond,$table_on_cond,$join_type){
    $this->db->from($table1);
      $this->db->where($cond);
      $this->db->join($table2,$table_on_cond,$join_type);
      $products = $this->db->get();
      return $products;
  }

  public function search_items($table1,$table2,$table3,$table4){
    $items = $this->common_join($table1,$table2,$table3,$table4);
    return $items;
  }



  // common crud ends here

  public function login($table,$data){
    $this->db->where($data);
    $this->db->select('admin_id,admin_email');
    $rs = $this->db->get($table);
    $count = $rs->num_rows();
    if($count == 1)
      {
        return $rs;
      }
  }

  public function angular_select($table,$json_data){
    $data = "select * from $table where cat_id='".$json_data->cat_id."'";
    $data=$this->db->query($data);
    return $data;
  }
  public function angular_select_list($table,$json_data){
    $data = "select * from $table where sub_cat_id='".$json_data->cat_id."'";
    $data=$this->db->query($data);
    return $data;
  }


}
?>
