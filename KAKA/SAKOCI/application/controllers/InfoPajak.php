<?php

class InfoPajak extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Pajak","",TRUE);
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('info_pajak'); 
        $this->load->view('template/footer');
    }

    public function Caridata() 
    { 
        if($this->Pajak->datapersatu()->num_rows() > 0){ 
            $this->load->model("KendaraanModel","",TRUE);
            $data['pajak'] = $this->Pajak->datapersatu();
            $data['kendaraan']= $this->KendaraanModel->satudata();
            $this->load->view('template/header');
            $this->load->view('tampilpajak',$data); 
            $this->load->view('template/footer');
        }else{
            redirect(site_url("InfoPajak")); 
        }
    } 

    public function KodeBayar()
    {
        $this->load->view('template/header');
        $this->load->view('tampilpembayaran'); 
        $this->load->view('template/footer');
    }
}?>