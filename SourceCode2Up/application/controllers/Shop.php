<?php
class Shop extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    function index()
    {
        $data['barang'] =  $this->db->get("test_product");
        $data['user'] = $this->getUsernameData();
        $this->load->view("shop", $data);
    }
    function getToko()
    {
        $data['barang'] =  $this->db->get("test_product");
        $this->load->view("shop", $data);
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
}
