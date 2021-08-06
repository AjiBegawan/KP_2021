<?php

class Home extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Home Side';
        $this->load->view('template/header', $data);
        $this->load->view('value'); 
        $this->load->view('template/footer');
    }

    public function login(){
        $this->load->view('login'); 
    }

    public function daftar(){
        $this->load->view('daftar'); 
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(site_url('Home'));
    }

    public function info(){
        $this->load->model("JadwalModel","",TRUE);
        $data['jadwal'] = $this->JadwalModel->getJadwal();
        $this->load->view('template/header');
        $this->load->view("info_umum",$data); 
        $this->load->view('template/footer');
    }

    function about(){
        $this->load->view('template/header');
        $this->load->view("about_us"); 
        $this->load->view('template/footer');
    }
}