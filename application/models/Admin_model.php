<?php

class Admin_model extends CI_Model {
	
   

    public function vnesi($opis, $imeA, $cena, $zaloga, $slika)
	{
        $this->load->database();#povezemo na bazo
        $niz = 'INSERT INTO artikel(`opis`,`ime`,`cena`,`zaloga`,`slika`) VALUES ("'.$imeA.'","'.$opis.'", "'.$cena.'", "'.$zaloga.'","'.$slika.'")';
        echo $niz;
        
        $query=$this->db->query($niz);
       
        
       
        
	}

}