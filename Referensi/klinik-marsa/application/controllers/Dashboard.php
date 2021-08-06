<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data= array('tittle' =>'Dashboard' );

		$data['total']=$this->klinikmarsaModel->totalPengajuan();
		$data['totaldr']=$this->klinikmarsaModel->totalDokter();
		$this->load->view('template/headerback', $data);
		$this->load->view('template/sidebar_adm');
		$this->load->view('page_admin/index');
	}

	
}
