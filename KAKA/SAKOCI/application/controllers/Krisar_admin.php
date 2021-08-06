<?php
class Krisar_admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("KrisarModel","",TRUE);
    } 
    
    public function index(){ 
        $data['krisar'] = $this->KrisarModel->getKrisar(); 
        $this->load->view('template/header-admin');
        $this->load->view("krisaradmin",$data); 
        $this->load->view('template/footer');
    } 

    public function tambah() 
    { 
        $this->load->view("krisar_tambah"); 
    } 

    public function prosesTambah(){ 
        if($this->KrisarModel->insertKrisar()){ 
            redirect(site_url("Krisar")); 
        }else{
            redirect(site_url("Krisar/tambah")); 
        }
    } 
  
    public function hapus($code){ 
        $this->KrisarModel->deleteKrisar($code); 
        redirect(site_url("krisar_admin")); 
    }
} 
?>    