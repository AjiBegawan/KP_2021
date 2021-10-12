<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth');
    }
    function index()
    {
        $this->load->helper("url");
        $data['user'] = $this->getUsernameData();
        $data['sosmed'] = $this->getUSosmedIdnft();
        $data['pesan'] = $this->getPesan();
        $data['artikel'] = $this->getArtikel();
        $this->load->view("admin", $data);
    }

    function getUsernameData()
    {
        $query = $this->db->get('user');
        return $query;
    }

    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed');
        return $query;
    }
    function getPesan()
    {
        $query = $this->db->get('contact');
        return $query;
    }
    function getArtikel()
    {
        $query = $this->db->get('artikel');
        return $query;
    }
    function editUser($username)
    {
        $data['user'] = $this->getUserDatabase($username);
        $this->load->view("editAdminUser", $data);
    }
    function getUserDatabase($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user')->row();
        return $query;
    }
    function editContact($username)
    {
        $data['user'] = $this->getUserDatabase($username);
        $this->load->view("editAdminUser", $data);
    }
    function updateUser()
    {
        $username = $this->input->post('username');
        $role = $this->input->post('role');

        $data = array(
            'role'      => $role
        );

        // $this->db->set('role', $data['role']);
        $this->db->where('username', $username);
        if($this->db->update('user', $data)){
            $this->index();
        }else{
            $this->load->view("gagal");
        }
    }
}
