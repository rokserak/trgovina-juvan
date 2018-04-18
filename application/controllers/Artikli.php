<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikli extends CI_Controller {

  public function __construct(){

    parent::__construct();

    // load base_url
    $this->load->helper('url');

    // Load Model
    $this->load->model('Main_model');
  }

  public function index(){

    $this->load->view('welcome_message');
 
  }

  // Call this method from AngularJS $http request
  public function getArtikli(){
    // get data
    $data = $this->Main_model->getArtikli();
    
    echo json_encode($data);
  }

  public function getArtikli1(){
    // get data
    $data = $this->Main_model->getArtikli1();
    
    echo json_encode($data);
  }
  


  public function admin(){
    // get data
    $data = $this->Main_model->admin();
    
    echo json_encode($data);
  }

}