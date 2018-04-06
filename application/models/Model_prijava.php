<?php

class Model_prijava extends CI_Model {
	
    public function vstop($ime, $geslo)
    {
        $this->load->database(); //povezava v bazo
        $query = $this->db->query('select * from uporabniki where ime="'.$ime.'" and geslo="'.$geslo.'"');
        echo '<br>';
       # echo "stevilo uporabnikov v bazi je: " . $query->num_rows(); //dobimo st vrstic
        if($query->num_rows()!=0){
             return TRUE;
        }
        return FALSE;
        //$this->db->close();
    }

    public function vnesi($ime, $geslo)
	{
        $this->load->database();#povezemo na bazo
        $niz = 'INSERT INTO UPORABNIKI(`ime`,`geslo`) VALUES ("'.$ime.'","'.$geslo.'")';
        echo $niz;
        
        $query=$this->db->query($niz);
       
        
       
        
	}

}