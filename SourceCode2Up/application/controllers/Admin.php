<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper("url");
        $this->load->model('Auth');
        $this->load->model('AdminModel');
    }
    function index()
    {
        $this->member();
    }

    function member()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/member';
        $config['total_rows'] =  $this->AdminModel->getCountUserAll();
        $config['per_page'] = 10;

        // var_dump($config['total_rows']);die;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        // var_dump($data['start']);die;
        $data['user'] = $this->AdminModel->getAllUser($config['per_page'], $data['start']);

        $this->load->view("admin\member", $data);
    }
    function contact()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/contact';
        $config['total_rows'] =  $this->AdminModel->getCountContact();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['contact'] = $this->AdminModel->getAllContact($config['per_page'], $data['start']);


        $this->load->helper("url");
        $this->load->view("admin\contact", $data);
    }
    function artikel()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/artikel';
        $config['total_rows'] =  $this->AdminModel->getCountArtikel();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        // var_dump($config['total_rows']);die;

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->AdminModel->getAllArtikel($config['per_page'], $data['start']);


        $this->load->helper("url");
        $this->load->view("admin\artikel", $data);
    }

    function sosmed()
    {

        $this->load->helper("url");
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $data['sosmed'] = $this->AdminModel->getUSosmedIdnft();
        $this->load->view("admin\sosmed", $data);
    }

    function addArtikel()
    {
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $this->load->view("addAdminArtikel", $data);
    }
    

    public function upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('imageupload_form', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $name = array(
                'gambar'      => $file_name
            );
            $this->db->insert('artikel', $name);
            // if ($this->db->update('artikel', $name)) {
            //     $this->index();
            // } else {
            //     $this->load->view("gagal");
            // }

            // $this->index();
            // $this->load->view('imageupload_success', $data);
        }
    }
    function editUser($username)
    {
        $data['user'] = $this->getUserDatabase($username);
        $this->load->view("editAdminUser", $data);
    }
    function getUserDatabase($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user')->row();
        return $query;
    }
    function editContact($username)
    {
        $data['user'] = $this->getUserDatabase($username);
        $this->load->view("editAdminUser", $data);
    }
    function updateUser()
    {
        $username = $this->input->post('username');
        $role = $this->input->post('role');

        $data = array(
            'role'      => $role
        );

        // $this->db->set('role', $data['role']);
        $this->db->where('username', $username);
        if ($this->db->update('user', $data)) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function deleteUser($username)
    {
        $this->db->where('username', $username);
        if ($this->db->delete('user')) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function getUSosmedId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sosmed');
        return $query;
    }
    function editSosmed($id)
    {
        $data['sosmed'] = $this->getUSosmedId($id);
        $this->load->view("editAdminSosmed", $data);
    }
    function updateSosmed()
    {
        $id  = $this->input->post('id');
        $instagram  = $this->input->post('instagram');
        $twitter    = $this->input->post('twitter');
        $discord    = $this->input->post('discord');

        $data = array(
            'instagram'    => $instagram,
            'twitter'      => $twitter,
            'discord'      => $discord
        );
        $this->db->where('id', $id);
        if ($this->db->update('sosmed', $data)) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function deleteSosmed($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('sosmed')) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function editPesan($id)
    {
        $data['contact'] = $this->getPesanId($id);
        $this->load->view("editAdminPesan", $data);
    }
    function getPesanId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contact')->row();
        return $query;
    }
    function updatePesan()
    {
        $id  = $this->input->post('id');
        $status  = $this->input->post('status');

        $data = array(
            'status'    => $status
        );
        $this->db->where('id', $id);
        if ($this->db->update('contact', $data)) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function deletePesan($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('contact')) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function editArtikel($id)
    {
        $data['artikel'] = $this->AdminModel->getArtikelId($id);
        $this->load->view("editAdminArtikel", $data);
    }
    function deleteArtikel($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('artikel')) {
            $this->artikel();
        } else {
            $this->load->view("gagal");
        }
    }
    function updateArtikel()
    {
        $id  = $this->input->post('id');
        $judul  = $this->input->post('judul');
        $paragraf1  = $this->input->post('paragraf1');
        $paragraf2  = $this->input->post('paragraf2');
        $paragraf3  = $this->input->post('paragraf3');
        $paragraf4  = $this->input->post('paragraf4');
        $paragraf5  = $this->input->post('paragraf5');
        $paragraf6  = $this->input->post('paragraf6');
        $paragraf7  = $this->input->post('paragraf7');
        $gambar  = $this->input->post('gambar');

        $data = array(
            'id'    => $id,
            'judul'    => $judul,
            'paragraf1'    => $paragraf1,
            'paragraf2'    => $paragraf2,
            'paragraf3'    => $paragraf3,
            'paragraf4'    => $paragraf4,
            'paragraf5'    => $paragraf5,
            'paragraf6'    => $paragraf6,
            'paragraf7'    => $paragraf7,
            'gambar'    => $gambar
        );
        $this->db->where('id', $id);
        if ($this->db->update('artikel', $data)) {
            $this->artikel();
        } else {
            $this->load->view("gagal");
        }
    }
    function ProsesAddArtikel()
    {
        $this->load->library('upload');
        if (!empty($_FILES['gambar']['name'])) {

            $config['upload_path'] = './upload/artikel';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $date = date('Ymd');
            $new_name = $date . "_" . rand(0, 999999999);
            $config['file_name'] = $new_name;

            $this->upload->initialize($config);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $this->load->view("gagal");
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $data = array(
                    'Id'        => $this->input->post('id'),
                    'Judul'     => $this->input->post('judul'),
                    'Paragraf1' => $this->input->post('paragraf1'),
                    'Paragraf2' => $this->input->post('paragraf2'),
                    'Paragraf3' => $this->input->post('paragraf3'),
                    'Paragraf4' => $this->input->post('paragraf4'),
                    'Paragraf5' => $this->input->post('paragraf5'),
                    'Paragraf6' => $this->input->post('paragraf6'),
                    'Paragraf7' => $this->input->post('paragraf7'),
                    'gambar'    => $file_name
                );
                if ($this->db->insert('artikel', $data)) {
                    $this->artikel();
                } else {
                    $this->load->view("gagal");
                }
            }
        } else {
            $this->load->view("gagal");
        }
    }
    
}
