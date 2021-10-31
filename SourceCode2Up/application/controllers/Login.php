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
			$this->session->set_flashdata('error','Username & Password salah');
			redirect(site_url('login/Login'));
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
        $this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-success">
              <div class="info-box-icon">
              <i class="fa fa-check-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">SUKSES</b><br>Log Out Berhasil</div>
              </div>
              </p>
			');
			redirect(site_url('home'));
    }
    
}
