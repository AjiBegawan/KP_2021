<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Kendaraan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KendaraanModel', 'kendaraan');
    }
    public function index_get()
    {
       $id = $this->get('id');
        if ($id == '') {
            $kendaraan = $this->db->get('kendaraan')->result();
        } else {
            $this->db->where('id', $id);
            $kendaraan = $this->db->get('kendaraan')->result();
        }
        $this->response($kendaraan, REST_Controller::HTTP_OK);
    }
    function index_post()
    {
        $data = array(
            'id'                => $this->post('id'),
            'no_kendaraan'      => $this->post('no_kendaraan'),
            'merk'              => $this->post('merk'),
            'tahun_pembuatan'   => $this->post('tahun_pembuatan'),
            'tipe'              => $this->post('tipe'),
            'jenis'             => $this->post('jenis'),
            'no_rangka'         => $this->post('no_rangka'),
            'no_mesin'          => $this->post('no_mesin'),
            'warna'             => $this->post('warna'),
            'warna_tnkb'        => $this->post('warna_tnkb'),
            'no_bpkb'           => $this->post('no_bpkb'),
        );
        $insert = $this->db->insert('kendaraan', $data);
        if ($insert) {
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put() {
        $id = $this->put('id');
        $data = array(
            'no_kendaraan'      => $this->put('no_kendaraan'),
            'merk'              => $this->put('merk'),
            'tahun_pembuatan'   => $this->put('tahun_pembuatan'),
            'tipe'              => $this->put('tipe'),
            'jenis'             => $this->put('jenis'),
            'no_rangka'         => $this->put('no_rangka'),
            'no_mesin'          => $this->put('no_mesin'),
            'warna'             => $this->put('warna'),
            'warna_tnkb'        => $this->put('warna_tnkb'),
            'no_bpkb'           => $this->put('no_bpkb'),
        );
        $this->db->where('id', $id);
        $update = $this->db->update('kendaraan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('kendaraan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'failed'), 502);
        }
    }
}