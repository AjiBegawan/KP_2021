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
        $config['per_page'] = 3;

        // var_dump($config['total_rows']);die;

        // styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"> <ul class="pagination">';
        $config['full_tag_close'] = '</ul> </nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = '&laquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = ' </a></li>';

        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        // $data['portfolioUser'] = $this->PortfolioModel->getUsernamePortfolio($config['per_page'],$data['start']);
        $data['portfolio'] = $this->PortfolioModel->getAllPortofolio($config['per_page'],$data['start']);
        // $data['portfolio'] = $this->PortfolioModel->getAllPortofolio();

        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->PortfolioModel->getLogin();
            $data['sosmed'] = $this->PortfolioModel->getSosmedIdnft();
            $data['user'] = $this->PortfolioModel->getAllUser();
            $this->load->view("portfolio", $data);
        } else {
            $data['sosmed'] = $this->PortfolioModel->getSosmedIdnft();
            $data['user'] = $this->PortfolioModel->getAllUser();
            $this->load->view("portfolio", $data);
        }
    }

}