<?php
class Admin_controller extends CI_controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Base_model','am');
    $this->load->library('session');
  }

  public function index(){
    extract($_POST);
    if(isset($submit)){
      $login_data = array(
      'admin_email' => $email,
      'admin_password' => $password
      );
    $resp = $this->am->login('uni_admin_tbl',$login_data);
    if($resp){
      $admin_id = $resp->row()->admin_id;
      $admin_email = $resp->row()->admin_email;
      $set_session = array(
          'admin_id' => $admin_id,
          'admin_email' => $admin_email
      );
      $this->session->set_userdata($set_session);
      redirect('Admin_controller/dashboard');
    }else{
      $login_failed = array(
        'error_msg' => 'Invalid Username or Passsword'
      );
      $this->load->view('admin/index',$login_failed);
    }
    }else{
    $admin_email = $this->session->userdata('admin_id');
    if(!empty($admin_email)){
      redirect('Admin_controller/dashboard');
    }
    $this->load->view('admin/index');
  }
  }

  public function dashboard(){
    $admin_email = $this->session->userdata('admin_id');
    if(empty($admin_email)){
      redirect('Admin_controller/index');
    }else{
    $this->load->view('admin/dashboard');
  }
  }
  public function add_categories(){
    extract($_POST);
    if(isset($submit)){
      $data = array(
        'cat_name' => $cat_name,
        'cat_priority' => $priority,
        'cat_status' => $status,
        'cat_added_on' => date('Y-m-d H-i-s')
      );

      $resp = $this->am->common_insert($data,'uni_categories_tbl','');
      if($resp == 1){
        $success = array(
          'inserted' => "Category Inserted Successfully"
        );
        $this->load->view('admin/addcategories',$success);
      }else{
        $failed = array(
          'failed' => "Failed To Insert Category"
        );
        $this->load->view('admin/addcategories',$failed);
      }
    }else{
      $this->load->view('admin/addcategories');
    }
  }
    public function add_sub_categories(){
      extract($_POST);
      if(isset($submit)){
        $data = array(
          'cat_id' => $cat_id,
          'sub_cat_name' => $sub_cat_name,
          'sub_cat_priority' => $priority,
          'sub_cat_status' => $status,
          'special_sub_cat' => $special,
          'sub_cat_added_on' => date('Y-m-d H-i-s')
        );
        $resp = $this->am->common_insert($data,'uni_sub_category_tbl','');
        if($resp == 1){
          $success = array(
            'inserted' => "Sub category Inseted Successfully"
          );
          $success['cats'] = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
          $this->load->view('admin/addsubcategories',$success);
        }else{
          $failed = array(
            'failed' => "Failed To Insert Sub Category"
          );
          $failed['cats'] = $this->Model->get_categories();
          $this->load->view('admin/addsubcategories',$failed);
        }

      }else{
        $categories['cats'] = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
        $this->load->view('admin/addsubcategories',$categories);
      }
  }

  public function add_list_sub_categories(){
    extract($_POST);
    if(isset($submit)){
      $data = array(
        'cat_id' => $cat_id,
        'sub_cat_id' => $sub_cat_id,
        'list_sub_cat_name' => $list_sub_cat_name,
        'list_sub_cat_priority' => $priority,
        'list_sub_cat_status' => $status,
        'list_sub_cat_added_on' => date('Y-m-d H-i-s')
      );
      $resp = $this->am->common_insert($data,'uni_list_sub_category_tbl','');
      if($resp){
        $success = array(
          'inserted' => "List Sub category Inseted Successfully"
        );
        $success['cats'] = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
        // $categories['sub_cats'] = $this->am->common_select('uni_sub_category_tbl','sub_cat_priority','ASC','','','','');
        $this->load->view('admin/addlistsubcategories',$success);
        }else{
          $failed = array(
            'failed' => "Failed To Insert List Sub Category"
          );
          $failed['cats'] = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
          // $failed['sub_cats'] = $this->am->common_select('uni_sub_category_tbl','sub_cat_priority','ASC','','','','');
          $this->load->view('admin/addsubcategories',$failed);
      }

  }else{
    $categories['cats'] = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
    // $categories['sub_cats'] = $this->am->common_select('uni_sub_category_tbl','sub_cat_priority','ASC','','','','');
    $this->load->view('admin/addlistsubcategories',$categories);
  }
}


  public function add_products(){
  extract($_POST);
    if(isset($submit)){
      $config['upload_path'] = "assets/admin/uploads/";
      $config['allowed_types'] = "jpg|bmp|png|gif|jpeg";
      $config['file_name'] = rand(10000,90000);
      $this->load->library('upload',$config);
      $this->upload->do_upload('prod_dp');

      $data = array(
        'cat_id' => $cat_id,
        'sub_cat_id' => $sub_cat_id,
        'list_sub_cat_id' => $list_sub_cat_id,
        'prod_name' => $prod_name,
        'prod_available_quantity' => $prod_available_quantity,
        'prod_mrp' => $prod_mrp,
        'prod_sp' => $prod_sp,
        'prod_desc' => $prod_desc,
        'prod_status' => $prod_status,
        'prod_added_on' => date('Y-m-d H-i-s'),
        'prod_type' => $prod_type,
        'prod_image' => $this->upload->data('file_name')
      );
      $resp = $this->am->common_insert($data,'uni_products_tbl');
      if($resp){//if resp starts here

      $last_id = $this->db->insert_id();
      $count_img = count($_FILES['prod_img']['name']);


      for($i=0;$i<$count_img;$i++){//for loop starts here
        $temp_file = $_FILES['prod_img']['tmp_name'][$i];
        $file_name = $_FILES['prod_img']['name'][$i];
        $file_size = $_FILES['prod_img']['size'][$i];
        $exp = (explode('.', $file_name));
        $extensions = end($exp);
        $allowed_extensions = array('jpg', 'jpeg', 'bmp', 'png','gif');

        if(!in_array($extensions, $allowed_extensions))
      		{
      						$errors['invalid_file'] = "invalid file extensions";
      		}
      	 if($file_size > 2097152)
      	  {
      						$errors['invalid_size'] = "file size should be less than 2-MB";
      		}

          if(empty($errors))
           {
                   $name = rand(1000,9999);
                   $rand_name = $name.".".$extensions;
                   $data = array(
                     'prod_id' => $last_id,
                     'prod_img' => $rand_name
                   );
                   move_uploaded_file($temp_file,"assets/admin/uploads/".$name.'.'.$extensions);
                   $resp = $this->am->common_insert($data,'prod_img_tbl');
                  if($resp){

                    $categories = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
                    $cats = array(
                      'cats' => $categories,
                      'success' => 'Product Added Successfully'
                    );
                    //problem
                    // $this->load->view('admin/addproducts',$cats);

                  }
           }else{
             $categories = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
             $cats = array(
               'cats' => $categories,
               'failed' => 'failed to add product'
             );
             // $this->load->view('admin/addproducts',$cats);
           }


}//for loop ends here
   $this->load->view('admin/addproducts',$cats);
      }  //if resp end
    }else{
    $categories = $this->am->common_select('uni_categories_tbl','cat_priority','ASC','','','','');
    // $sub_categories = $this->am->common_select('uni_sub_category_tbl','sub_cat_priority','ASC','','','','');
    // $list_sub_categories = $this->am->common_select('uni_list_sub_category_tbl','list_sub_cat_priority','ASC','','','','');
    $cats = array(
      'cats' => $categories,
      // 'sub_cats' => $sub_categories,
      // 'list_sub_cats' => $list_sub_categories
    );
    $this->load->view('admin/addproducts',$cats);
  }
}



  public function view_404(){
    $this->load->view('404');
  }
  public function debug(){
    print_r($_POST);
  }

}

?>
