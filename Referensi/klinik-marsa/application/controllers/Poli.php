<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {
//menmapilkan data poli yang tersedia
	public function lihat_poli(){
		$data['data_poli']=$this->klinikmarsaModel->get_all_poli('poli');

		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/data_poli', $data);
		$this->load->view('template/footerback');
}
//tambah poli
	public function tambah_poli(){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->load->view('page_admin/tambah_poli');
		$this->load->view('template/footerback');
	}
	public function proses_tambah_poli()
	{      
		$nama_poli = $this->input->post('nama_poli');
		$keterangan = $this->input->post('keterangan');
			$data = array ('nama_poli' => $nama_poli, 'keterangan' => $keterangan);
			$insert = $this->klinikmarsaModel->tambah_poli($data);
		if($insert > 0){
			echo'<script>window.alert("Berhasil Tersimpan")</script>';
			echo'<script>window.location=("lihat_poli")</script>';
		}else{
			echo "gagal input";
		}
	}

//hapus data poli
	public function hapus_poli(){
		$id['id_poli'] = $this->uri->segment(3);
		$this->klinikmarsaModel->deletePoli('poli',$id);

		redirect("Poli/lihat_poli");
	}
	public function ubah_poli($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data'] = $this->klinikmarsaModel->ambil_data_poli($id)->row();
		$this->load->view('page_admin/form_ubah_poli', $data);
		$this->load->view('template/footerback');		
	}
//menampilkan halaman tambah poli
public function proses_ubah_poli()
	{        
		$datas = [
			'nama_poli' => $this->input->post('nama_poli'),
			'keterangan' => $this->input->post('keterangan'),
			'id_poli' => $this->input->post('id_poli')
		];        
		$kode=$this->input->post('id_poli');        
		$this->klinikmarsaModel->update_poli($kode, $datas);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("lihat_poli")</script>';  
	}

}