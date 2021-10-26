<?php
class AdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }

// All Get Data For Admin
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

    // Function Get for Member Page
    function getCountUserAll()
    {
        $query = $this->db->get('user')->num_rows();
        return $query;
    }
    function getAllUser($limit, $start)
    {
        $query = $this->db->get('user',$limit, $start);
        return $query;
    }
    function getUserDatabase($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user')->row();
        return $query;
    }

    // Function Get for Contact Page
    function getCountContact()
    {
        $query = $this->db->get('contact')->num_rows();
        return $query;
    }
    function getAllContact($limit, $start)
    {
        $query = $this->db->get('contact',$limit, $start);
        return $query;
    }
    function getPesanId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contact')->row();
        return $query;
    }

    // Function Get for Artikel Page
    function getCountArtikel()
    {
        $query = $this->db->get('artikel')->num_rows();
        return $query;
    }
    function getAllArtikel($limit, $start)
    {
        $query = $this->db->get('artikel',$limit, $start);
        return $query;
    }
    function getArtikelId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('artikel')->row();
        return $query;
    }

    // Function Get for Sosmed Page
    function getUSosmedId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sosmed');
        return $query;
    }



    
}
