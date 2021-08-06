<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaBerita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('klinikmarsaModel');
		$this->load->helper(array('form', 'url'));
	}

	public function tambah_berita(){

			$this->load->view('template/headerback');
			$this->load->view('template/sidebar_adm');
			$this->load->view('template/topbar');
			$this->load->view('page_admin/tambah_berita');
			$this->load->view('template/footerback');
	}

	public function ubah_berkas($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_berita($id)->row();
		$this->load->view('page_admin/form_ubah_berita', $data);
		$this->load->view('template/footerback');		
	}

	public function lihat_berita(){
		$data['data_berita']=$this->klinikmarsaModel->get_all_berita('berita');

		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/data_berita', $data);
		$this->load->view('template/footerback');
		}

	public function proses_tambah_berita()
	{        
		$config['upload_path'] = './upload/';        
		$config['allowed_types'] = 'gif|jpg|png';        
		$config['max_size'] = '5000';       
		$config['max_width'] = '5000';        
		$config['max_height'] = '5000';                
		
		$this->load->library('upload', $config);                
		
		if (!$this->upload->do_upload()){            
			echo 'gagal input';        
		}        
		else {
			$img = $this->upload->data();
			$gambar = $img['file_name'];
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$tanggal = $this->input->post('tanggal');
			$berita = $this->input->post('isi');
			$data['hasil'] = $this->klinikmarsaModel->upload_berita($id);
			if($data['hasil']->num_rows()>0){
				echo'<script>window.alert("Kode tidak boleh sama")</script>';
				echo'<script>window.location=("tambah_berita")</script>';
			}else{
					$data = array(
					
					'judul_berita' => $judul ,
					'tanggal_berita' => $tanggal ,
					'isi_berita' => $berita ,
					'gambar' => $gambar
					);
					
				$this->db->insert('berita', $data);
				echo'<script>window.alert("Berhasil Tersimpan")</script>';
				echo'<script>window.location=("tambah_berita")</script>';
			}
		}     
	}
	public function ubah_berita($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_berita($id)->row();
		$this->load->view('page_admin/form_ubah_berita', $data);
		$this->load->view('template/footerback');		
	}
	
	
	public function proses_ubah_berita()
	{        
		$datas = [
			'judul_berita' => $this->input->post('judul_berita'),
			'isi_berita' => $this->input->post('isi_berita'),
			'tanggal_berita' => $this->input->post('tanggal_berita')

		];
		        
		$kode=$this->input->post('id_berita');        
		$this->klinikmarsaModel->update_data_berita($kode, $datas);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("lihat_berita")</script>';  
	}
	public function hapus_berita(){
		$id['id_berita'] = $this->uri->segment(3);
		$this->klinikmarsaModel->deleteBerita('berita',$id);

		redirect("KelolaBerita/lihat_berita");
	}
}