<?php
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Auth');
	}
	function index()
	{
		$this->load->view("login/Login");
	}
	public function prosesLoginC()
	{
		$captcha_response = trim($this->input->post('g-recaptcha-response'));

		if ($captcha_response != '') {
			$keySecret = '6LenGQkdAAAAALGVLnAxlYxvqgkCkLoL7O7_U01i';

			$check = array(
				'secret'		=>	$keySecret,
				'response'		=>	$this->input->post('g-recaptcha-response')
			);

			$startProcess = curl_init();
			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
			curl_setopt($startProcess, CURLOPT_POST, true);
			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);
			$finalResponse = json_decode($receiveData, true);

			if ($finalResponse['success']) {
				$username = $this->input->post("username");
				$password = $this->input->post("password");

				if ($this->Auth->login_user($username, $password)) {
					$this->session->set_flashdata('message', 'Anda Berhasil Login ');
					redirect(site_url('home'));
				} else {
					$this->session->set_flashdata('message', 'Username atau Password salah');
					redirect(site_url('login'));
				}
			} else {
				$this->session->set_flashdata('message', 'Username atau Password salah 2');
					redirect(site_url('login'));
			}
		} else {
			$this->session->set_flashdata('message', 'Silahkan selesaikan CAPTCHA terlebih dahulu');
					redirect(site_url('login'));
		}
	}

	public function logout()
	{
		$id = $this->session->userdata('id');
		$user_data = $this->session->userdata();
		foreach ($user_data as $key => $value) {
			if ($key != '__ci_last_regenerate' && $key != '__ci_vars')
				$this->session->unset_userdata($key);
		}
		$this->session->set_flashdata('message', 'Anda Berhasil Logout ');
		redirect(site_url('home'));
	}
}
