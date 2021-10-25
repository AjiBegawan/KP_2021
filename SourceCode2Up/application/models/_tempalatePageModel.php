<?php
class _tempalatePageModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function getSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
}
