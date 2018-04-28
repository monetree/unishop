<?php
class User_controller extends CI_controller{
  function __construct(){
    parent::__construct();
    $this->load->controller('Base_controller');
  }
  public function check(){
    $this->load->controller('Base_controller');
    $this->Base_controller->test();
  }
}


?>
