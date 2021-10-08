<?php
class contoh extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    function index()
    {
        // $data['user'] = $this->getUsernameData();
        $this->load->view("contoh");
    }
    function getUsernameData()
    {
        // $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user');
        return $query;
    }
}
