<?php
class Categories
{
  public function get_categories(){
    $this->CI->load->model('Model');
    $categories['cats'] = $this->Model->get_categories();
    return $categories;
  }
}
 ?>
