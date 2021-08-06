<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('frontend/home');
		$this->load->view('template/footer');
				
	}
	
	public function tampil_info(){
		$this->load->view('template/header');
		$this->load->view('frontend/informasi_booking');
		$this->load->view('template/footer');
	}
	public function tampil_visi(){
		$this->load->view('template/header');
		$this->load->view('frontend/visi');
		$this->load->view('template/footer');
	}
	public function tampil_sejarah(){
		$this->load->view('template/header');
		$this->load->view('frontend/sejarah');
		$this->load->view('template/footer');
	}
	public function tampil_organisasi(){
		$this->load->view('template/header');
		$this->load->view('frontend/struktur_organisasi');
		$this->load->view('template/footer');
	}
	public function tampil_contact(){
		$this->load->view('template/header');
		$this->load->view('frontend/contact');
		$this->load->view('template/footer');
	}
	
	public function tampil_tdokter(){
		$this->load->view('template/header');
		$this->load->view('frontend/team_klinik_marsa');
		$this->load->view('template/footer');
	}
}
