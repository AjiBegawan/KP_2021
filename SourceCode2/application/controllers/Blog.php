<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog extends CI_Controller{

        public function index(){
            $this->load->view("halamanpelanggan/blogArtikel");
        }

        public function Artikel1(){
            $this->load->view("halamanpelanggan/Artikel1");
        }

    }