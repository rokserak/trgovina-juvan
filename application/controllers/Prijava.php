<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prijava extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		
    }
    
    public function vstop()
    {
		$this->load->helper('url');
		$this->load->library('user_agent');
        $vsiPodatki=$this->input->post(); #vse iz obrazca gre v to spremenljivko
		$this->load->model('model_prijava'); //"Model_prijava.php"
		echo "naloz model";
		$rezultat = $this->model_prijava->vstop($vsiPodatki['uporabnik'], $vsiPodatki['geslo']); #poklicemo metodo preveri
		echo "izvede model";
		if($rezultat == 1){
			$this->session->set_userdata('uporabnik',$vsiPodatki['uporabnik']);
			$this->load->database(); //povezava v bazo
			$query = $this->db->query('select iduporabniki from uporabniki where ime="'.$vsiPodatki['uporabnik'].'" and geslo="'.$vsiPodatki['geslo'].'"');
			$this->session->set_userdata('id', $query->row()->iduporabniki);    
			$this->load->view('notar'); 
		}if($rezultat == 2){
			$this->session->set_userdata('uporabnik',$vsiPodatki['uporabnik']);
			$this->load->view('admin');
		}

		

	}
	
	public function registracija(){

		$this->load->helper('url');
		$this->load->library('user_agent');
        $vsiPodatki=$this->input->post(); #vse iz obrazca gre v to spremenljivko
        $this->load->model('model_prijava'); //"Model_prijava.php"
		$this->model_prijava->vnesi($vsiPodatki['uporabnikR'], $vsiPodatki['gesloR']);
		redirect($this->agent->referrer());
	}

	

}