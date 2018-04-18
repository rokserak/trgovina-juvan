<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

  function getArtikli(){

    // Select user records
    $this->db->select('*');
    $q1 = $this->db->get('artikel');
    $results1 = $q1->result_array();

    $q2 = $this->db->query('SELECT * FROM kosarica WHERE uporabniki_iduporabniki = ' . $_SESSION['id']);
    
    $results2 = $q2->result_array();
    
    return [$results1, $results2];
  }

  

  function dodaj($art, $id){

    $this->load->database();#povezemo na bazo
    $niz = 'INSERT INTO `kosarica`(`artikel_idartikel`, `uporabniki_iduporabniki`) VALUES (' . $art . ', ' . $id .')';
    echo $niz;
    
    $query=$this->db->query($niz);

  }

  function admin(){
    $this->load->database();
    $query = $this->db->query("SELECT * FROM uporabniki WHERE admin <> TRUE");
    $query1 = $query->result_array();
    $art = array();
    foreach ($query1 as $u) {
      $a = $this->db->query('select * from kosarica join artikel on kosarica.artikel_idartikel = artikel.idartikel where uporabniki_iduporabniki = ' . $u['iduporabniki']);
      $a = $a->result_array();
      array_push($art, $a);
    }
    return array($query1, $art);
  }

}