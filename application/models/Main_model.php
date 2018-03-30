<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

  function getArtikli(){

    // Select user records
    $this->db->select('*');
    $q = $this->db->get('artikel');
    $results = $q->result_array();
    //header('Content-Type: application/json');

    return $results;
  }

}