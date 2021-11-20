<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelolaArtikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ArtikelModel');
    }
    public function index()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/KelolaArtikel/index';
        $config['total_rows'] =  $this->ArtikelModel->getCountArtikelAll();
        $config['per_page'] = 10;

        // var_dump($config['total_rows']);die;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->ArtikelModel->getAllArtikel($config['per_page'], $data['start']);

        // var_dump($data['portfolio']);die;


        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->ArtikelModel->getUsernameData();

            $this->load->view("blog/Artikel", $data);
        } else {
            $this->load->view("blog/artikel", $data);
        }
    }
    function LoadArtikelDetail($id)
    {
        $data['login'] = $this->ArtikelModel->getUsernameData();
        $data['artikel'] = $this->ArtikelModel->getArtikelDetail($id);
        $this->load->view("blog/artikelDetail", $data);
    }
}
