<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kosarica extends CI_Controller {

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
  public function dodajKosarica(){
    // get data

    $postdata = file_get_contents("php://input");
    $vsiPodatki = json_decode($postdata);
    $this->Main_model->dodaj($vsiPodatki->art, $vsiPodatki->id);
    

  }

}