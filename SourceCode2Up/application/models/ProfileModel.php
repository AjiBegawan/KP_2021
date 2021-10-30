<?php
class ProfileModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }


    function getUsernamePortfolio()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio');
        return $query;
    }
    function getUsernamePortfolioId($id)
    {
        $this->db->where('id', $id);
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio')->row();
        return $query;
    }
    function getUsernamePortfolioPag($limit, $start)
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio',$limit, $start);
        return $query;
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }

    # Function to show Pagination
    // function getUsernamePortfolio($limit, $start)
    // {
    //     $this->db->where('username', $this->session->userdata('username'));
    //     $query = $this->db->get('portfolio',$limit, $start);
    //     return $query;
    // }
    function getCountPortfolioUser()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio')->num_rows();
        return $query;
    }
    function getAllUser()
    {
        $query = $this->db->get('user');
        return $query;
    }
    

}