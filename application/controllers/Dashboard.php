<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $this->load->model('Metal_model');
  }
  
  public function home()
  {
    if(isset($_SESSION["gold"])){
      $data["gold"] = json_decode($_SESSION["gold"], true);
      $data["silver"] = json_decode($_SESSION["gold"], true);
    }
    else{
      $rates["gold"] = $this->Metal_model->getLivePriceOf("XAU");
      $rates["silver"] = $this->Metal_model->getLivePriceOf("XAG");
      $this->session->set_userdata($rates);
      $data["gold"] = json_decode($_SESSION["gold"], true);
      $data["silver"] = json_decode($_SESSION["silver"], true);
    }

    $this->load->view("dashboard/home", $data);
  }
}
