<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/blogArtikel", $data);
        } else {
            $this->load->view("halamanpelanggan/blogArtikel");
        }
    }
    public function Artikel1()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Artikel1", $data);
        } else {
            $this->load->view("halamanpelanggan/Artikel1");
        }
    }
    public function Artikel2()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Artikel2", $data);
        } else {
            $this->load->view("halamanpelanggan/Artikel2");
        }
    }
    public function Artikel3()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Artikel3", $data);
        } else {
            $this->load->view("halamanpelanggan/Artikel3");
        }
    }
    public function Artikel4()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Artikel4", $data);
        } else {
            $this->load->view("halamanpelanggan/Artikel4");
        }
    }
    public function Artikel5()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Artikel5", $data);
        } else {
            $this->load->view("halamanpelanggan/Artikel5");
        }
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
}
