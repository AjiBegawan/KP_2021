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
            $this->load->view("halamanpelanggan/home", $data);
        } else {
            $this->load->view("halamanpelanggan/home");
        }
    }
    public function BlogView()
    {
        $this->load->view("halamanpelanggan/blogArtikel");
    }
    public function ShopView1()
    {
        $this->load->view("halamanpelanggan/Shop1");
    }
    public function ShopView2()
    {
        $this->load->view("halamanpelanggan/Shop2");
    }
    public function AboutView()
    {
        $this->load->view("halamanpelanggan/About");
    }
    public function ContactView()
    {
        $this->load->view("halamanpelanggan/Contact");
    }
    public function DeeraView()
    {
        $this->load->view("halamanpelanggan/Deera");
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

        // $this->db->insert('contact', $data_contact);

        if($this->db->insert('contact', $data_contact)){
            redirect(site_url('home'));
        }else{
            $this->load->view("gagal");
        }

    }
}
