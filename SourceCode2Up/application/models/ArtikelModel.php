<?php
class ArtikelModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        if ($query = $this->db->get('user')->row()) {
            return $query;
        } else if ($query = $this->db->get('admin')->row()) {
            return $query;
        }
    }
    function getArtikel()
    {
        $query = $this->db->get('artikel');
        return $query;
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function getArtikelDetail($id)
    {
        $this->db->where('Id', $id);
        $query = $this->db->get('artikel')->row();
        return $query;
    }
    function getCountArtikelAll()
    {
        $query = $this->db->get('artikel')->num_rows();
        return $query;
    }
    function getAllArtikel($limit, $start)
    {
        $this->db->order_by('RAND()');
        $query = $this->db->get('artikel',$limit, $start);
        return $query;
    }
}
