<?php

class Krisar extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("KrisarModel","",TRUE);
    }   
    public function index()
    {
        $this->load->model("KrisarModel","",TRUE);
        $data['krisar'] = $this->KrisarModel->getKrisar();
        $this->load->view('template/header'); 
        $this->load->view('krisar_tambah',$data);
        $this->load->view('template/footer'); 
    }
    public function tambah() 
    { 
        $this->load->model('KrisarModel'); 
        $data['krisar'] = $this->KrisarModel->getKrisar(); 
        $this->load->view("krisar_tambah",$data); 
    } 
    public function prosesTambah(){
        if($this->KrisarModel->insertKrisar()){
        redirect(site_url("krisar"));
        }else{
        redirect(site_url("krisar/tambah"));
        }
    }
}
?>