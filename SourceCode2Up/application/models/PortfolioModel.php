<?php
class PortfolioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function getAllUser()
    {
        $query = $this->db->get('user');
        return $query;
    }
    function getLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        if ($query = $this->db->get('user')->row()) {
            return $query;
        } else if ($query = $this->db->get('admin')->row()) {
            return $query;
        }
    }
    function getSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
    function getCountPortfolioAll()
    {
        $query = $this->db->get('portfolio')->num_rows();
        return $query;
    }
    function getAllPortofolio($limit, $start)
    {
        $this->db->order_by('RAND()');
        $query = $this->db->get('portfolio', $limit, $start);
        return $query;
    }
    function getUsernamePortfolio($limit, $start)
    {
        $query = $this->db->get('user', $limit, $start);
        return $query;
    }
}
