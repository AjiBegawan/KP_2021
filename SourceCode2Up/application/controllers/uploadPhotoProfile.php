<?php
class uploadPhotoProfile extends CI_Controller 
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
        $data['login'] = $this->getUsernameLogin();
        $data['user'] = $this->getUsernameData();
        $data['sosmed'] = $this->getUSosmedIdnft();
        $data['pesan'] = $this->getPesan();
        $data['artikel'] = $this->getArtikel();
        $this->load->view("profile_edit", $data);
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
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
        $config['upload_path'] = './upload/photoProfile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $new_name = time()."_".$id."_".rand(0,999999999);
        $config['file_name'] = $new_name;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            // $this->load->view("Imageupload_failed");
            $this->load->view("gagal");
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data = array(
                'dp'      => $file_name
            );
            $this->db->where('username', $id);
            if ($this->db->update('user', $data)) {
                // redirect(base_url('../Profile'));
                // $this->load->view("Imageupload_success");
                $this->index();
            } else {
                // $this->load->library('../admin');
                // $this->load->view("Imageupload_failed");
                $this->load->view("gagal");
            }
        }
    }
}