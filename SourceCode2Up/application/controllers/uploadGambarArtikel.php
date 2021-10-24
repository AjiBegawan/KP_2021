<?php
class uploadGambarArtikel extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form');
        $this->load->library('form_validation','admin');
    }
    function index()
    {
        $this->load->helper("url");
        $data['user'] = $this->getUsernameData();
        $data['sosmed'] = $this->getUSosmedIdnft();
        $data['pesan'] = $this->getPesan();
        $data['artikel'] = $this->getArtikel();
        $this->load->view("admin", $data);
    }
    function getUsernameData()
    {
        $query = $this->db->get('user');
        return $query;
    }

    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed');
        return $query;
    }
    function getPesan()
    {
        $query = $this->db->get('contact');
        return $query;
    }
    function getArtikel()
    {
        $query = $this->db->get('artikel');
        return $query;
    }
    public function upload($id)
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            $this->load->view("Imageupload_failed");
        } else {
            // $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $name = array(

                'gambar'      => $file_name
            );
            $this->db->where('Id', $id);
            if ($this->db->update('artikel', $name)) {
                $this->load->view("Imageupload_success");
            } else {
                // $this->load->library('../admin');
                $this->load->view("Imageupload_failed");
            }
        }
    }
}