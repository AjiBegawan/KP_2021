<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaJadwal extends CI_Controller {
// 	public function __construct(){
// 		parent::__construct();
// 		$this->load->model('klinikmarsaModel');
// 	}
// 	public function index(){
// 		$data_dokter = array(
		
// 		'headerTitle'=>'Data Jadwal',
// 		'data_jadwal'=>$this->klinikmarsaModel->get_all_jadwal('jadwal'),

// 	);
		
	
// }
public function lihat_jadwal(){
		$data['data_jadwal']=$this->klinikmarsaModel->get_all_jadwal('jadwal');
		$data['data3']=$this->klinikmarsaModel->get_all_poli('jadwal');
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/data_jadwal', $data);
		$this->load->view('template/footerback');
}
	public function hapus_jadwal($id){   
		$this->klinikmarsaModel->deleteJadwal($id);
			redirect('KelolaJadwal/lihat_jadwal');
	}
	
	public function tambah_jadwal(){
		$data['data1']=$this->klinikmarsaModel->get_all_dokter();
		$data['data2']=$this->klinikmarsaModel->tampil_waktu();
		$data['data3']=$this->klinikmarsaModel->get_all_poli();
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/tambah_jadwal',$data);
		$this->load->view('template/footerback');
	}
	
	public function proses_tambah(){
		if ($this->klinikmarsaModel->tambah_jadwal()) {
			$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data Berhasil Ditambahkan!
			</div>');
			redirect(site_url("KelolaJadwal/lihat_jadwal"));
		} else{
			redictect(site_url("KelolaJadwal/tambah_jadwal"));
		}
	}
	
	public function form_ubah_jadwal($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_jadwal($id)->row();
		$data['data1']=$this->klinikmarsaModel->get_all_dokter();
		$data['data2']=$this->klinikmarsaModel->tampil_waktu();
		$data['data3']=$this->klinikmarsaModel->get_all_poli();
		$this->load->view('page_admin/form_ubah_jadwal',$data);
		$this->load->view('template/footerback');
	}
	
	public function proses_ubah_jadwal()
	{        
		$data['nama_dokter'] = $this->input->post('dokter');  
		$data['id_waktu'] = $this->input->post('waktu');
		$data['id_poli'] = $this->input->post('poli');
		$data['hari'] = $this->input->post('hari');        
		$kode=$this->input->post('id_jadwal');        
		$this->klinikmarsaModel->update_jadwal($kode, $data);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("lihat_jadwal")</script>';   
	}
	
}