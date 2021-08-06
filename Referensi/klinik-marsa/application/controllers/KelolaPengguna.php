<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaPengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('klinikmarsaModel');
	}
	public function index(){
		 
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_superadmin');
		$this->load->view('template/topbar');
		$this->data['data_pengguna'] = $this->klinikmarsaModel->tampil_data_pengguna();
		$this->load->view('page_super/index', $this->data);
		$this->load->view('template/footerback');
		
	}

	public function tambah_pengguna(){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_superadmin');
		$this->load->view('template/topbar');
		$this->load->view('page_super/tambah_pengguna');
		$this->load->view('template/footerback');
	}
	
	public function proses_tambah_pengguna()
	{      
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
			$data = array ('username' => $username, 'password' => $password, 'nama' => $nama, 'level' => $level);
			$insert = $this->klinikmarsaModel->insert_pengguna($data);
		if($insert > 0){
			echo'<script>window.alert("Berhasil Tersimpan")</script>';
			echo'<script>window.location=("index")</script>';
		}else{
			echo "gagal input";
		}
	}
	
	public function form_ubah_pengguna($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_superadmin');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_pengguna($id)->row();
		$this->load->view('page_super/form_ubah_pengguna', $data);
		$this->load->view('template/footerback');		
	}
	
	public function proses_ubah_pengguna()
	{        
		$data['username'] = $this->input->post('username');  
		$data['password'] = $this->input->post('password');
		$data['nama'] = $this->input->post('nama');
		$data['level'] = $this->input->post('level');         
		$kode=$this->input->post('id_pengguna');        
		$this->klinikmarsaModel->update_pengguna($kode, $data);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("index")</script>';   
	}

	public function hapus_pengguna(){
		$id['id_pengguna'] = $this->uri->segment(3);
		$this->klinikmarsaModel->deleteData('pengguna',$id);

		redirect("KelolaPengguna");
	}

	
	
	
}