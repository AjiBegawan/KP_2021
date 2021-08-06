<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaDokter extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('klinikmarsaModel');
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		$data_dokter = array(
		
		'headerTitle'=>'Data Dokter',
		'data_dokter'=>$this->klinikmarsaModel->getAllData('dokter'),
		);
			
	}
	
	public function lihat_dokter(){
		$data['data_dokter']=$this->klinikmarsaModel->get_all_dokter('dokter');
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/data_dokter', $data);
		$this->load->view('template/footerback');
	}
	public function hapus_dokter(){
		$id['id_dokter'] = $this->uri->segment(3);
		$this->klinikmarsaModel->deleteDokter('dokter',$id);

		redirect("KelolaDokter/lihat_dokter");
	}
	public function tambah_dokter(){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/tambah_dokter');
		$this->load->view('template/footerback');
	}
	
	public function proses_tambah_dokter()
	{        
		$config['upload_path'] = './upload/';        
		$config['allowed_types'] = 'gif|jpg|png';        
		$config['max_size'] = '5000';       
		$config['max_width'] = '5000';        
		$config['max_height'] = '5000';                
		
		$this->load->library('upload', $config);                
		
		if (!$this->upload->do_upload()){            
			echo 'Gagal input Gambar terlalu besar';        
		}        
		else {
			$img = $this->upload->data();
			$gambar = $img['file_name'];
			$id = $this->input->post('id_dokter');
			$nama = $this->input->post('nama_dokter');
			$no = $this->input->post('no_tlp');
			$status = $this->input->post('status');
			$tempat = $this->input->post('tempat');
			$data['hasil'] = $this->klinikmarsaModel->upload_dokter($id);
			if($data['hasil']->num_rows()>0){
				echo'<script>window.alert("Kode tidak boleh sama")</script>';
				echo'<script>window.location=("tambah_dokter")</script>';
			}else{
					$data = array(
					'id_dokter' => $id ,
					'nama_dokter' => $nama ,
					'no_telepon' => $no ,
					'status_dokter' => $status ,
					'tempat_praktek' => $tempat ,
					'gambar' => $gambar
					);
					
				$this->db->insert('dokter', $data);
				echo'<script>window.alert("Berhasil Tersimpan")</script>';
				echo'<script>window.location=("tambah_dokter")</script>';
			}
		}     
	}
	
	public function ubah_dokter($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_dokter($id)->row();
		$this->load->view('page_admin/form_ubah_dokter', $data);
		$this->load->view('template/footerback');		
	}
	
	
	public function proses_ubah_dokter()
	{        
		$data['nama_dokter'] = $this->input->post('nama_dokter');  
		$data['no_telepon'] = $this->input->post('no_tlp');
		$data['status_dokter'] = $this->input->post('status');
		$data['tempat_praktek'] = $this->input->post('tempat');         
		$kode=$this->input->post('id_dokter');        
		$this->klinikmarsaModel->update_data_dokter($kode, $data);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("lihat_dokter")</script>';  
	}
}