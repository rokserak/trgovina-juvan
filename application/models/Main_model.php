<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

  function getArtikli(){

    // Select user records
    $this->db->select('*');
    $q = $this->db->get('artikel');
    $results = $q->result_array();
    //header('Content-Type: application/json');

    //$this->load->database(); //povezava v bazo
    //$query = $this->db->query('select * from kosarica where ime="'.$ime.'" and geslo="'.$geslo.'"');

    //$this->db->select('artikel_idartikel');
    //$q2 = $this->db->get_where('kosarica', array('uporabniki_iduporabniki' => "1"));
    //$results2 = $q2->result_array();

    //$aa = array();
    //foreach($results2 as $res){
      //$aa.array_push($res->artikel_idartikel);
    //}

    //$vrni = array($results, $aa);


    return $results;
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