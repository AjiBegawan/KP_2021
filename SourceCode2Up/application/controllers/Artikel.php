<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ArtikelModel');
    }
    public function index()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['artikel'] = $this->getArtikel();

            $this->load->view("Artikel", $data);
        } else {
            $data['artikel'] = $this->getArtikel();
            $this->load->view("Artikel", $data);
        }
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function getArtikel()
    {
        $query = $this->db->get('artikel');
        return $query;
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function LoadArtikelDetail($id)
    {
        $data['login'] = $this->getUsernameLogin();
        $data['artikel'] = $this->getArtikelDetail($id);
        $this->load->view("PageArtikelDetail", $data);
    }
    function getArtikelDetail($id)
    {
        $this->db->where('Id', $id);
        $query = $this->db->get('artikel')->row();
        return $query;
    }
}
