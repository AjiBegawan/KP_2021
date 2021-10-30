<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->Model('ProfileModel');
    }

    public function index()
    {
        $this->load->model('ProfileModel');

        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['test'] = $this->ProfileModel->getAllUser();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/profile/index';
        $config['total_rows'] =  $this->ProfileModel->getCountPortfolioUser();
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioPag($config['per_page'],$data['start']);
       
            $this->load->view("profile/profile", $data);
        } else {
            $this->load->view("Login");
        }
    }

    public function managePortfolio(){
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['test'] = $this->ProfileModel->getAllUser();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/Profile/managePortfolio/';
        $config['total_rows'] =  $this->ProfileModel->getCountPortfolioUser();
        $config['per_page'] = 8;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioPag($config['per_page'],$data['start']);
       
            $this->load->view("profile/managePortfolio", $data);
        } else {
            $this->load->view("Login");
        }
    }

    public function profile_edit()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolio();
            $this->load->view("profile_edit", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function profilePortfolio()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolio();
            $this->load->view("/profile/AddProfilePortfolio", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function EditPortfolio($id)
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioId($id);
            $this->load->view("/profile/editProfilePortfolio", $data);
        } else {
            $this->load->view("Login");
        }
    }
    function editUserData()
    {
        $data = array(
            'twitter' => $this->input->post("twitter"),
            'instagram' => $this->input->post("instagram"),
            'facebook' => $this->input->post("facebook"),
            'nama' => $this->input->post("nama"),
            'email' => $this->input->post("email"),
            'phone' => $this->input->post("phone"),
            'alamat' => $this->input->post("alamat")
        );
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->update('user', $data);
        if ($query) {
            redirect(site_url('profile'));
        }else{
            redirect(site_url('CekPage/gagal'));
        }
    }
    function uploadGambarPortfolio($id)
    {
        $config['upload_path'] = './upload/portfolio';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $new_name = time()."_".$id."_".rand(0,999999999);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) {
            $this->load->view("gagal");
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data = array(
                'dp'      => $file_name
            );
            $this->db->where('username', $id);
            if ($this->db->update('user', $data)) {
                // $this->index();
                redirect(site_url('Profile'));
            } else {
                $this->load->view("gagal");
            }
        }
    }

    function addPortfolio()
    {
        $this->load->library('upload');
        if (!empty($_FILES['gambar']['name'])){

            $config['upload_path'] = './upload/portfolio';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $date = date('Ymd');
            $new_name = $this->session->userdata('username')."_".$date."_".rand(0,999999999);
            $config['file_name'] = $new_name;
    
            $this->upload->initialize($config);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $this->load->view("gagal");
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $data = array(
                    'username'  => $this->session->userdata('username'),
                    'nama'      => $this->session->userdata('nama'),
                    'judul'     => $this->input->post("judul"),
                    'deskripsi' => $this->input->post("deskripsi"),
                    'gambar'    => $file_name
                );
                if ($this->db->insert('portfolio', $data)) {
                    redirect(site_url('Profile/managePortfolio'));
                } else {
                    $this->load->view("gagal");
                }
            }
        }else{
            $this->load->view("gagal");
        }
    }
    function updatePortfolio($id)
    {
        $this->load->library('upload');
        if (!empty($_FILES['gambar']['name'])){

            $config['upload_path'] = './upload/portfolio';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $date = date('Ymd');
            $new_name = $this->session->userdata('username')."_".$date."_".rand(0,999999999);
            $config['file_name'] = $new_name;
    
            $this->upload->initialize($config);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $this->load->view("gagal");
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $data = array(
                    'username'  => $this->session->userdata('username'),
                    'nama'      => $this->session->userdata('nama'),
                    'judul'     => $this->input->post("judul"),
                    'deskripsi' => $this->input->post("deskripsi"),
                    'gambar'    => $file_name
                );
                $this->db->where('id', $id);
                if ($this->db->update('portfolio', $data)) {
                    redirect(site_url('Profile/managePortfolio'));
                } else {
                    $this->load->view("gagal");
                }
            }
        }else{
            $this->load->view("gagal");
        }
    }
    function deletePortfolio($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('portfolio')) {
            redirect(site_url('Profile/managePortfolio'));
        } else {
            $this->load->view("gagal");
        }
    }
}