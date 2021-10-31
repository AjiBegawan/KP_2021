<?php
class Login extends CI_Controller
{

    public function __construct(){
        parent::__construct();
    }
    function index()
    {
        $this->load->view("login/Login");
    }
    public function prosesLogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($this->Auth->login_user($username,$password))
		{
            $this->session->set_flashdata('message','Anda Berhasil Login ');
			redirect(site_url('home'));
		}
		else
		{
			$this->session->set_flashdata('message','Username atau Password salah');
			redirect(site_url('login'));
		}
	}

	public function logout()
    {
        $id = $this->session->userdata('id');
		$user_data = $this->session->userdata();
		foreach ($user_data as $key => $value) {
			if ($key!='__ci_last_regenerate' && $key != '__ci_vars')
			$this->session->unset_userdata($key);
		}
        $this->session->set_flashdata('message','Anda Berhasil Logout ');
			redirect(site_url('home'));
    }
    
}
