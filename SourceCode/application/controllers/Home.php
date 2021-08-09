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
}