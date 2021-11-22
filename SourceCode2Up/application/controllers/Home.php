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
    public function AboutView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/About", $data);
        } else {
            $this->load->view("halamanpelanggan/About");
        }
    }
    public function ContactView()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/Contact", $data);
        } else {
            $this->load->view("halamanpelanggan/Contact");
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

        $captcha_response = trim($this->input->post('g-recaptcha-response'));

        if ($captcha_response != '') {
            $keySecret = '6LenGQkdAAAAALGVLnAxlYxvqgkCkLoL7O7_U01i';

            $check = array(
                'secret'        =>    $keySecret,
                'response'        =>    $this->input->post('g-recaptcha-response')
            );

            $startProcess = curl_init();
            curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($startProcess, CURLOPT_POST, true);
            curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
            curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

            $receiveData = curl_exec($startProcess);
            $finalResponse = json_decode($receiveData, true);

            if ($finalResponse['success']) {
                $nama = $this->input->post("nama");
                $email = $this->input->post("email");
                $subject = $this->input->post("subject");
                $message = $this->input->post("message");

                $data_contact = array(
                    'nama'    => $nama,
                    'email'   => $email,
                    'subject' => $subject,
                    'message' => $message,
                    'status'  => "Belum Dibalas"
                );

                if ($this->db->insert('contact', $data_contact)) {
                    $this->session->set_flashdata('message', 'Pesan berhasil dikirim');
                    redirect(site_url('home'));
                } else {
                    $this->session->set_flashdata('error', 'Maaf, pesan anda gagal terkirim');
                    redirect(site_url('home'));
                }
            } else {
                $this->session->set_flashdata('error', 'Silahkan selesaikan CAPTCHA terlebih dahulu');
                redirect(site_url('home'));
            }
        } else {
            $this->session->set_flashdata('error', 'Silahkan selesaikan CAPTCHA terlebih dahulu');
            redirect(site_url('home'));
        }
    }
    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
}
