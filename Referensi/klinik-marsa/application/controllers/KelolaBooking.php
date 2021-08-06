<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaBooking extends CI_Controller {
	//tampil data booking yang akan diproses persetujuan
	public function data_persetujuan()
	{
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->data['booking'] = $this->klinikmarsaModel->tampil_data_belumProses()->result();
		$this->load->view('page_admin/persetujuan', $this->data);
		$this->load->view('template/footerback');
	}
	//fungsi tampil detail data booking yang akan diproses persetujuan
	function konfirmasi_persetujuan($kode){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$where = array('id_booking' => $kode);
		$data['hasil'] = $this->klinikmarsaModel->edit_persetujuan($where,'pengajuan_booking')->result();
		$this->load->view('page_admin/pemeriksaan_persetujuan',$data);
		$this->load->view('template/footerback');
	}
	//fungsi update status persetujuan
	function update_persetujuan(){
	$kode = $this->input->post('kode');
	$persetujuan = $this->input->post('persetujuan');
 
	$data = array(
		'persetujuan' => $persetujuan
	);
 
	$where = array(
		'id_booking' => $kode
	);
 
	$this->klinikmarsaModel->update_data_persetujuan($where,$data,'pengajuan_booking');
	redirect('KelolaBooking/data_persetujuan');
	}
	//fungsi menampilkan data yang telah di proses dgn status setuju
	public function lihat_data_disetujui()
	{	
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->data['hasil'] = $this->klinikmarsaModel->tampil_hasil_setujui()->result();
		$this->load->view('page_admin/lihat_data_disetujui', $this->data);
		$this->load->view('template/footerback');
	}
	//fungsi menampilkan data yang telah di proses dgn status tidak setuju
	public function lihat_data_ditolak()
	{
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$this->data['hasil'] = $this->klinikmarsaModel->tampil_data_ditolak()->result();
		$this->load->view('page_admin/lihat_data_ditolak', $this->data);
		$this->load->view('template/footerback');
	}
	
	public function hapus_booking($id){   
		$this->klinikmarsaModel->deleteBooking($id);
			redirect('KelolaBooking/lihat_data_disetujui');
	}

	public function hapus_booking_tolak($id){   
		$this->klinikmarsaModel->deleteBooking($id);
			redirect('KelolaBooking/lihat_data_ditolak');
	}

	public function form_ubah_booking($id){
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_adm');
		$this->load->view('template/topbar');
		$data['data1']=$this->klinikmarsaModel->get_all_waktu();
		$data['data'] = $this->klinikmarsaModel->ambil_data_booking($id)->row();
		$this->load->view('page_admin/form_ubah_booking', $data);
		$this->load->view('template/footerback');		
	}

	public function proses_ubah_booking()
	{        
		$data['nama_calon_pasien'] = $this->input->post('nama');  
		$data['no_telepon'] = $this->input->post('no_tlp');
		$data['noRekmed_noId'] = $this->input->post('no_in');
		$data['tanggal'] = $this->input->post('tgl');
		$data['id_waktu'] = $this->input->post('waktu');
		$data['id_jamlayanan'] = $this->input->post('jam');
		$data['alamat'] = $this->input->post('alamat');  
		$kode=$this->input->post('id_booking');        
		$this->klinikmarsaModel->update_booking($kode, $data);        
			echo'<script>window.alert("Berhasil Terubah")</script>';
			echo'<script>window.location=("data_persetujuan")</script>';   
	}
}