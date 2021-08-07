<?php
class Shop extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    function index()
    {
       $this->load->view("shop");
    }
    function getToko()
    {
        $data['barang'] =  $this->db->get("test_product");
        $this->load->view("shop", $data);
    }
    
}
