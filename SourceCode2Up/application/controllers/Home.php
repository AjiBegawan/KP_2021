<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->getUsernameData();
            $data['sosmed'] = $this->getUSosmedIdnft();
            $this->load->view("halamanpelanggan/home", $data);
        } else {
            $data['sosmed'] = $this->getUSosmedIdnft();
            $this->load->view("halamanpelanggan/home", $data);
        }
    }
    public function DeeraView()
    {
        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Deera", $data);
        } else {
            $this->load->view("halamanpelanggan/Deera");
        }
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
    function contact()
    {
        $this->load->model("Auth", "", TRUE);

        $nama = $this->input->post("nama");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $data_contact = array(
            'nama'    => $nama,
            'email'   => $email,
            'subject' => $subject,
            'message' => $message
        );

        if ($this->db->insert('contact', $data_contact)) {
            redirect(site_url('home'));
        } else {
            $this->load->view("gagal");
        }
    }
    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
}
