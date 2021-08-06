<?php

class Login extends CI_Controller{
    public function __construct(){ 
        parent::__construct();
        $this->load->model("AdminModel","",TRUE);
    }

    public function index(){
        if($this->session->userdata('logins')){
            $data['judul'] = 'Admin Side';
            redirect(site_url("Kendaraanserver"));
        }else{
            $this->load->view("login");
        }
    }

    function prosesLogin(){
        $this->load->model("AdminModel");
        if($this->AdminModel->login()->num_rows() > 0){
            $session_data = array(
                "logins" => true,
                "username" => $this->input->post("username") 
            );        
            $this->session->set_userdata($session_data); 
            redirect(site_url("Kendaraanserver"));
            //echo $this->AdminModel->login()->num_rows();
        }else{
            $this->session->set_flashdata("error","Username atau Password Salah");
            redirect(site_url("Home/login"));
        }
    }

    function prosesDaftar(){       
        $this->load->model("AdminModel","",TRUE);
        $admin = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("confirm_pass")
        );

        if($this->AdminModel->insertAdmin($admin)){
            redirect(site_url("Login"));
        }else{
            redirect(site_url("Home/daftar"));
        }
    }

    
}
?>