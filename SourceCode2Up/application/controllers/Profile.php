<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("profile", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function profile_edit()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['login'] = $this->getUsernameLogin();
            $this->load->view("profile_edit", $data);
        } else {
            $this->load->view("Login");
        }
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

    function editUserData()
    {
        $data = array(
            'twitter' => $this->input->post("twitter"),
            'instagram' => $this->input->post("instagram"),
            'facebook' => $this->input->post("facebook"),
            'nama' => $this->input->post("nama"),
            'email' => $this->input->post("email"),
            'phone' => $this->input->post("phone"),
            'alamat' => $this->input->post("alamat")
        );
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->update('user', $data);
        if ($query) {
            redirect(site_url('profile'));
        }else{
            redirect(site_url('CekPage/gagal'));
        }
    }
}
