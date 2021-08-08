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
            $this->load->view("profile");
        }else{
            $this->load->view("Login");
        }
        // $this->load->view("profile");
    }
    public function profile_edit()
    {
        $this->load->view("profile_edit");
    }
}
