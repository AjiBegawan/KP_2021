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


}
