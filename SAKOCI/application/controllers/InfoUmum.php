<?php
class InfoUmum extends CI_Controller{
    public function __construct(){ 
        parent::__construct();
        $this->load->model("JadwalModel","",TRUE);
    }
    public function index(){
        $data['jadwal'] = $this->JadwalModel->getJadwal();
        $this->load->view('template/header-admin');
        $this->load->view("info_umum_admin",$data);
        $this->load->view('template/footer');
    }

    public function update($id){
        $data['jadwal'] = $this->JadwalModel->getJadwalById($id)->row();
        $this->load->view('template/header-admin');
        $this->load->view("info_umum_admin",$data);
        $this->load->view('template/footer');
    } 

    public function prosesUpdate($id){
        if($this->JadwalModel->updateJadwal($id)){
            redirect(site_url("InfoUmum"));
        }else{
            redirect(site_url("InfoUmum/update/$id")); 
        }        
    }
    public function hapus($id){
        $this->JadwalModel->deleteJadwal($id);
        redirect(site_url("InfoUmum"));
    } 
}
?>