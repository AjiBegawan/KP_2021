<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->helper("url");
		$this->load->view('login/header', $data);
		$this->load->view('login/login');
		$this->load->view('login/footer');
	}
	public function prosesLogin(){
		//if ($this->session->userdata('level') == "administrasi"){redirect('Dashboard');}
        //if ($this->session->userdata('level') == "pasien"){redirect('PengajuanBooking');}
        //if ($this->session->userdata('level') == "superadmin"){redirect('KelolaPengguna');}
        //if ($this->session->userdata('level') == "minisment"){redirect('Laporan');}
		
		$this->load->model("KlinikmarsaModel");

		$username = $this->input->post('username');
		
		$pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();

		if($this->KlinikmarsaModel->login()->num_rows()>0){
			$session_data = array(
				"login" => TRUE ,
				"username" => $this->KlinikmarsaModel->login($this->input->post("username"))->row("username"),
				"id_pengguna" => $this->KlinikmarsaModel->login($this->input->post("id_pengguna"))->row("id_pengguna"),
			);
			$this->session->set_userdata($session_data);
			if ($pengguna['level'] == "administrasi") {
				redirect('Dashboard');
			 }elseif ($pengguna['level'] == "pasien") {
			 	redirect('PengajuanBooking');
			 }elseif ($pengguna['level'] == "superadmin") {
			 	redirect('KelolaPengguna');
			 }elseif ($pengguna['level'] == "minisment") {
			 	redirect('Laporan');
			 }

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password tidak sesuai!</div>');
			redirect(site_url("Login"));
		}
	}

	
	public function registrasi ()
	{
		$data['title'] = 'Registrasi';
		$this->load->view('login/header', $data);
		$this->load->view('login/registrasi');
		$this->load->view('login/footer');
		
	}
	public function prosesInsert(){
		
		$this->form_validation->set_rules('username','Username', 'required|trim','');

		$this->load->model("KlinikmarsaModel","",TRUE);
		if ($this->form_validation->run() == false) {
			$this->load->view('login/registrasi');
		}else{
			$pengguna = array(
				"nama" => $this->input->post("nama"),
				"username" => $this->input->post("username"),
				"password" => $this->input->post("password"),
			"level" => "pasien"
			);
			if ($this->KlinikmarsaModel->insertPengguna($pengguna)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Dibuat. Silahkan Login!</div>');
				redirect(site_url("Login"));
			}else{
				redirect(site_url("login/registrasi"));
			}
		}

	}
	function logout(){
	 $this->session->sess_destroy();
		
		redirect('Home');
	}

}