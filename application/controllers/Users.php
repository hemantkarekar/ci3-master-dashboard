<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    // Load model
    $this->load->model('User_model');
  }

  public function all()
  {
    echo json_encode($this->User_model->getAll());
  }
}
