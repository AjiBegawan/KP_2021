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

        $this->load->view("halamanpelanggan/home");
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
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }

}
