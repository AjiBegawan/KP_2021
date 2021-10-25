<?php
class CekPage extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth');
    }
    function index()
    {
        $this->load->helper("url");
        $this->load->view("test");
    }

    function sukses()
    {
        $this->load->helper("url");
        $this->load->view("sukses");
    }
    function gagal()
    {
        $this->load->helper("url");
        $this->load->view("gagal");
    }
    function pagination()
    {
        $this->load->helper("url");
        $this->load->view("cekPagination");
    }
    function template()
    {
        $this->load->helper("url");
        $this->load->model('_tempalatePageModel','tp');
        $data['sosmed'] = $this->tp->getSosmedIdnft();
        $data['login'] = $this->tp->getUsernameData();
        $this->load->view("template\_templatePage.php", $data);
    }


}
