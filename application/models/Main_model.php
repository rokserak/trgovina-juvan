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

  function dodaj($art, $id){

    $this->load->database();#povezemo na bazo
    $niz = 'INSERT INTO `kosarica`(`artikel_idartikel`, `uporabniki_iduporabniki`) VALUES (' . $art . ', ' . $id .')';
    echo $niz;
    
    $query=$this->db->query($niz);

  }

}