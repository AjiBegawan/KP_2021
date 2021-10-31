<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{

    public function __construct()       
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PortfolioModel');
    }
    public function index()
    {
        $this->load->model('PortfolioModel');

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/portfolio/index';
        $config['total_rows'] =  $this->PortfolioModel->getCountPortfolioAll();
        $config['per_page'] = 8;

        // var_dump($config['total_rows']);die;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['portfolio'] = $this->PortfolioModel->getAllPortofolio($config['per_page'],$data['start']);

        // var_dump($data['portfolio']);die;

        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->PortfolioModel->getLogin();
            $data['sosmed'] = $this->PortfolioModel->getSosmedIdnft();
            $data['user'] = $this->PortfolioModel->getAllUser();
            $this->load->view("portfolio/portfolio", $data);
        } else {
            $data['sosmed'] = $this->PortfolioModel->getSosmedIdnft();
            $data['user'] = $this->PortfolioModel->getAllUser();
            $this->load->view("portfolio/portfolio", $data);
        }
    }

}