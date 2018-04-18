<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    
    public function dodaj()
    {
		$this->load->helper('url');
		$this->load->library('user_agent');
        $info=$this->input->post(); 
        $this->load->model('admin_model'); 
        $this->admin_model->vnesi($info['imeA'], $info['opis'], $info['cena'], $info['zaloga'], $info['link']);
		
		$this->load->view('novArtikel');

		

	}

	public function uredi()
	{
		$this->load->helper('url');
		$this->load->library('user_agent');
        $info=$this->input->post(); 
        $this->load->model('admin_model'); 
		$this->admin_model->edit($info['ime'], $info['opis'], $info['cena'], $info['zaloga'], $info['slika'], $info['id']);
		


		$this->load->view('posodobiArtikel');
	}


	public function izbrisi()
	{
		$this->load->helper('url');
		$this->load->library('user_agent');
        $info=$this->input->post(); 
        $this->load->model('admin_model'); 
		$this->admin_model->delete($info['id']);
		


		$this->load->view('izbrisiArtikel');
	
	}
	
	

}