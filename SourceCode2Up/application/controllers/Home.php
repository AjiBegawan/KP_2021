<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['sosmed'] = $this->getUSosmedIdnft();
            $this->load->view("halamanpelanggan/home", $data);
        } else {
            $data['sosmed'] = $this->getUSosmedIdnft();
            $this->load->view("halamanpelanggan/home", $data);
        }
    }
    public function BlogView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/blogArtikel", $data);
        } else {
            $this->load->view("halamanpelanggan/blogArtikel");
        }

    }
    public function ShopView1()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Shop1", $data);
        } else {
            $this->load->view("halamanpelanggan/Shop1");
        }

        
    }
    public function ShopView2()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Shop2", $data);
        } else {
            $this->load->view("halamanpelanggan/Shop2");
        }

        $this->load->view("halamanpelanggan/Shop2");
    }
    public function AboutView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/About", $data);
        } else {
            $this->load->view("halamanpelanggan/About");
        }

        
    }
    public function ContactView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Contact", $data);
        } else {
            $this->load->view("halamanpelanggan/Contact");
        }
  
    }
    public function DeeraView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Deera", $data);
        } else {
            $this->load->view("halamanpelanggan/Deera");
        }

    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }

    function contact()
    {
        $this->load->model("Auth", "", TRUE);

        $nama = $this->input->post("nama");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $data_contact = array(
            'nama'    => $nama,
            'email'   => $email,
            'subject' => $subject,
            'message' => $message
        );

        if($this->db->insert('contact', $data_contact)){
            redirect(site_url('home'));
        }else{
            $this->load->view("gagal");
        }
    }

    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
}
