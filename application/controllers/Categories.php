<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct(){
  
       parent::__construct();
  
       // Load model
       $this->load->model('Category_model');
    }
  
    public function all(){
      echo json_encode($this->Category_model->getAll());
    }
  
  }