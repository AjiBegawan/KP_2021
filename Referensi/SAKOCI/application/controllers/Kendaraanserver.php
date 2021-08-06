<?php
Class Kendaraanserver extends CI_Controller{
    
    var $api ="";
    function __construct() {
        parent::__construct();
        $this->api="http://localhost/SAKOCI/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data kontak
    function index(){
        $data['data_kendaraan'] = json_decode($this->curl->simple_get($this->api.'/kendaraan'));
        $this->load->view('template/header-admin');
        $this->load->view('kendaraan/list',$data);
        $this->load->view('template/footer');
    }
    
    // insert data kontak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'                => $this->input->post('id'),
                'no_kendaraan'      => $this->input->post('no_kendaraan'),
                'merk'              => $this->input->post('merk'),
                'tahun_pembuatan'   => $this->input->post('tahun_pembuatan'),
                'tipe'              => $this->input->post('tipe'),
                'jenis'             => $this->input->post('jenis'),
                'no_rangka'         => $this->input->post('no_rangka'),
                'no_mesin'          => $this->input->post('no_mesin'),
                'warna'             => $this->input->post('warna'),
                'warna_tnkb'        => $this->input->post('warna_tnkb'),
                'no_bpkb'           => $this->input->post('no_bpkb'));
            $insert =  $this->curl->simple_post($this->api.'/kendaraan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('kendaraanserver');
        }else{
            $this->load->view('template/header-admin'); 
            $this->load->view('kendaraan/create'); 
            $this->load->view('template/footer');
        }
    }
    
    // edit data kontak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'                => $this->input->post('id'),
                'no_kendaraan'      => $this->input->post('no_kendaraan'),
                'merk'              => $this->input->post('merk'),
                'tahun_pembuatan'   => $this->input->post('tahun_pembuatan'),
                'tipe'              => $this->input->post('tipe'),
                'jenis'             => $this->input->post('jenis'),
                'no_rangka'         => $this->input->post('no_rangka'),
                'no_mesin'          => $this->input->post('no_mesin'),
                'warna'             => $this->input->post('warna'),
                'warna_tnkb'        => $this->input->post('warna_tnkb'),
                'no_bpkb'           => $this->input->post('no_bpkb'));
            $update =  $this->curl->simple_put($this->api.'/kendaraan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('kendaraanserver');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['data_kendaraan'] = json_decode($this->curl->simple_get($this->api.'/kendaraan',$params));
			$this->load->view('template/header-admin'); 
            $this->load->view('kendaraan/edit',$data); 
            $this->load->view('template/footer');
        }
    }
    
    // delete data kontak
    function delete($id){
        if(empty($id)){
            redirect('kendaraanserver');
        }else{
            $delete =  $this->curl->simple_delete($this->api.'/kendaraan', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('kendaraanserver');
        }
    }
}