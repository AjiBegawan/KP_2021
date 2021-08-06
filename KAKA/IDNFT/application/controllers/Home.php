<?php

class Home extends CI_Controller{

    public function index()
    {
        $data['judul'] = 'Home Side';
        $this->load->view('header',$data);
    }




}