<?php

class Admin_model extends CI_Model {
	
   

    public function vnesi($opis, $imeA, $cena, $zaloga, $slika)
	{
        $this->load->database();#povezemo na bazo
        $niz = 'INSERT INTO artikel(`opis`,`ime`,`cena`,`zaloga`,`slika`) VALUES ("'.$imeA.'","'.$opis.'", "'.$cena.'", "'.$zaloga.'","'.$slika.'")';
        echo $niz;
        
        $query=$this->db->query($niz);
       
        
       
        
    }
    
    public function edit($ime, $opis, $cena, $zaloga, $slika, $id)
    {
        $this->load->database();#povezemo na bazo
        

        $niz = 'UPDATE artikel
                SET opis = "' . $opis . '", 
                ime = "' . $ime . '", 
                cena = ' . $cena . ', 
                zaloga = ' . $zaloga . ', 
                slika = "' . $slika . '" 
                WHERE idartikel = ' . $id;
        
        $query=$this->db->query($niz);

    }

}


?>