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

        //Ambil Data Keyword
        if ($this->input->post('submit')) {
            // var_dump($this->input->post('keyword'));die;
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/portfolio/index';
        // $config['total_rows'] =  $this->PortfolioModel->getCountPortfolioAll();
        $this->db->like('username', $data['keyword']);
        $this->db->from('portfolio');

        $config['total_rows'] =   $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;


        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['portfolio'] = $this->PortfolioModel->getAllPortofolio($config['per_page'], $data['start'], $data['keyword']);


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
