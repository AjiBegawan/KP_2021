<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanBooking extends CI_Controller {
		public function __construct(){
		parent::__construct();
		if($this->session->userdata('login') != TRUE){
			redirect(base_url("index.php/Login"));
		}
    }

		public function index(){
		$data['data_jadwal']=$this->klinikmarsaModel->get_all_jadwal('jadwal');
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_pasien');
		$this->load->view('template/topbar');
		$this->load->view('page_pasien/index', $data);
		$this->load->view('template/footerback');

		}
		public function buatPengajuan(){
		$data['data']=$this->klinikmarsaModel->get_all_waktu();
		
		$data['data2']=$this->klinikmarsaModel->tampil_waktu();
		$data['data3']=$this->klinikmarsaModel->get_all_poli();
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_pasien');
		$this->load->view('template/topbar');
		$this->load->view('page_pasien/pengajuan',$data);
		$this->load->view('template/footerback');
		}

		public function get_waktu(){
			$data = $this->klinikmarsaModel->tampil_waktu();
			echo json_encode($data);
		}
		function get_jam()
    	{
        $id_waktu=$this->input->post('id_waktu');
        $data=$this->klinikmarsaModel->Get_jam($id_waktu);
        echo json_encode($data);
   		}
   		//public function get_poli(){
//			$data = $this->klinikmarsaModel->get_all_poli();
			//echo json_encode($data);
		//}

		public function tambahBooking(){
			$jam = $this->input->post('jam');
			//$poli = $this->input->post('nama_poli');
			$tgl = $this->input->post('tgl');
			$format_tgl = date('Y-m-d', strtotime($tgl));
			$sql = $this->db->query("SELECT id_jamlayanan FROM pengajuan_booking Where id_jamlayanan='$jam'");
			$sql2 = $this->db->query("SELECT tanggal FROM pengajuan_booking Where tanggal='$format_tgl'");
			$cekJam = $sql->num_rows();
			$cekTGL = $sql2->num_rows();
			if($cekTGL AND $cekJam > 0){
				echo'<script>window.alert("Jam Sudah terbooking Silahkan Pilih di jam yang lain")</script>';
			echo'<script>window.location=("buatPengajuan")</script>';
			}else{
			$id_pengguna = $this->input->post('id_pengguna');
			$nama = $this->input->post('nama');
			$no_tlp = $this->input->post('no_tlp');
			
			$no_in = $this->input->post('no_in');
			$tgl = $this->input->post('tgl');
			$format_tgl = date('Y-m-d', strtotime($tgl));
			$alamat = $this->input->post('alamat');
			$waktu = $this->input->post('waktu');
		
			$data = array ('id_pengguna' =>$id_pengguna, 'nama_calon_pasien' => $nama, 'no_telepon' => $no_tlp, 'noRekmed_noId' => $no_in, 'tanggal' => $format_tgl,  'id_waktu' => $waktu,'id_jamlayanan' => $jam, 'alamat' => $alamat, 'persetujuan' => "proses");
			$insert = $this->klinikmarsaModel->insert_booking($data);
		
		if($insert > 0 ){
			echo'<script>window.alert("Berhasil Tersimpan")</script>';
			echo'<script>window.location=("buatPengajuan")</script>';
		}else{
			echo"gagal input";
		}
		}
		}
		
		public function lihatPengajuanBooking(){
		//$data['data']=$this->klinikmarsaModel->get_all_waktu();
		$id_pengguna = $this->session->userdata('id_pengguna'); // ambil data berdasarkan id_pengguna yang login 
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_pasien');
		$this->load->view('template/topbar');
		$this->data['booking'] = $this->klinikmarsaModel->tampil_data_booking($id_pengguna)->result();
		$this->load->view('page_pasien/lihat_pengajuan_booking', $this->data);
		$this->load->view('template/footerback');
		}


	public function batalkanPengajuan($id){
		$this->klinikmarsaModel->batalPengajuan($id);
		redirect('PengajuanBooking/lihatPengajuanBooking');
	}
	public function lihatAgenda(){
		//$data['data']=$this->klinikmarsaModel->get_all_waktu();
		$id_pengguna = $this->session->userdata('id_pengguna');
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_pasien');
		$this->load->view('template/topbar');
		$this->data['booking'] = $this->klinikmarsaModel->tampil_data_setujui($id_pengguna)->result();
		$this->load->view('page_pasien/lihat_agenda', $this->data);
		$this->load->view('template/footerback');
		}
	
		
	
}