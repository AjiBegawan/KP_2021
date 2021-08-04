<?php
class Login extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth');
    }
    function index()
    {
        $this->load->view("Login");
    }

    public function prosesLogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($this->Auth->login_user($username,$password))
		{
            $this->session->set_flashdata('message','Anda Berhasil Login ');
			redirect(site_url('CekPage/sukses'));
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect(site_url('CekPage/gagal'));
		}
	}
}
