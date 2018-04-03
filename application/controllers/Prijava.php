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
		
		$this->load->view('prijava'); #na pogled pozdravljeni posljemo polje data
    }
    
    public function vstop()
    {
        echo "vstop dela!";
        $vsiPodatki=$this->input->post(); #vse iz obrazca gre v to spremenljivko
        $this->load->model('model_prijava'); //"Model_prijava.php"
		$rezultat = $this->model_prijava->vstop($vsiPodatki['uporabnik'], $vsiPodatki['geslo']); #poklicemo metodo preveri
		if($rezultat){
			$this->session->set_userdata('uporabnik',$vsiPodatki['uporabnik']);
			$this->load->view('welcome_message');
		}else{
			echo 'napaka';
			$this->load->view('welcome_message');
		}

		

    }

	

}