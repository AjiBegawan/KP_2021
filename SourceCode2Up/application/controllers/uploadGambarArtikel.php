<?php
class uploadGambarArtikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load Helper for Form
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->load->view('admin');
    }
    public function upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            // $error = array('error' => $this->upload->display_errors());

            $this->index();
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $name = array(
                'gambar'      => $file_name
            );
            if ($this->db->update('artikel', $name)) {
                $this->index();
            } else {
                $this->index();
            }

            // $this->index();
            // $this->load->view('imageupload_success', $data);
        }
    }
}
