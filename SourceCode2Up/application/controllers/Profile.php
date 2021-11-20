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
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioPag($config['per_page'], $data['start']);

            $this->load->view("profile/profile", $data);
        } else {
            $this->load->view("Login");
        }
    }

    public function Profile($username)
    {
        $this->load->model('ProfileModel');

        if ($this->session->userdata('is_login')) {
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['otheruser'] = $this->ProfileModel->getUsernameProfileId($username);

            // Pagination
            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/Profile/Profile/' . $username;
            $config['total_rows'] =  $this->ProfileModel->getCountPortfolioOtherUser($username);
            $config['per_page'] = 3;

            $this->pagination->initialize($config);

            $data['start'] = $this->uri->segment(4);
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioById($config['per_page'], $data['start'], $username);

            $this->load->view("profile/otherProfile", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function ProfileNonLogin($username)
    {
        $this->load->model('ProfileModel');

        $data['login'] = $this->ProfileModel->getUsernameLogin();
        $data['otheruser'] = $this->ProfileModel->getUsernameProfileId($username);

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/Profile/Profile/' . $username;
        $config['total_rows'] =  $this->ProfileModel->getCountPortfolioOtherUser($username);
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioById($config['per_page'], $data['start'], $username);

        $this->load->view("profile/otherProfile", $data);
    }

    public function managePortfolio()
    {
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
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolioPag($config['per_page'], $data['start']);

            $this->load->view("profile/managePortfolio", $data);
        } else {
            $this->load->view("Login");
        }
    }

    public function editProfile()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->ProfileModel->getUsernameData();
            $data['login'] = $this->ProfileModel->getUsernameLogin();
            $data['portfolio'] = $this->ProfileModel->getUsernamePortfolio();
            $this->load->view("profile/editProfile", $data);
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
    function editUserData($username)
    {
        $data = array(
            'twitter' => $this->input->post("twitter"),
            'instagram' => $this->input->post("instagram"),
            'facebook' => $this->input->post("facebook"),
            'nama' => $this->input->post("nama"),
            'email' => $this->input->post("email"),
            'phone' => $this->input->post("phone"),
            'alamat' => $this->input->post("alamat"),
            'aliran_seni' => $this->input->post("aliran_seni")
        );
        $this->db->where('username', $username);
        $query = $this->db->update('user', $data);
        if ($query) {
            $this->session->set_flashdata('message', 'Profile berhasil diperbaharui');
            redirect(site_url('profile'));
        } else {
            $this->session->set_flashdata('error', 'Profile gagal diperbaharui');
            redirect(site_url('profile'));
        }
    }
    // function uploadGambarPortfolio($id)
    // {
    //     $config['upload_path'] = './upload/portfolio';
    //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //     $config['max_size'] = 2000;
    //     $new_name = time() . "_" . $id . "_" . rand(0, 999999999);
    //     $config['file_name'] = $new_name;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('profile_pic')) {
    //         $this->load->view("gagal");
    //     } else {
    //         $upload_data = $this->upload->data();
    //         $file_name = $upload_data['file_name'];
    //         $data = array(
    //             'dp'      => $file_name
    //         );
    //         $this->db->where('username', $id);
    //         if ($this->db->update('user', $data)) {
    //             redirect(site_url('Profile'));
    //         } else {
    //             $this->load->view("gagal");
    //         }
    //     }
    // }

    function uploadDisplayPicture($id)
    {
        $config['upload_path'] = './upload/photoProfile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $new_name = time() . "_" . $id . "_" . rand(0, 999999999);
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->load->view("gagal");
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data = array(
                'dp'      => $file_name
            );
            $this->db->where('username', $id);
            if ($this->db->update('user', $data)) {
                redirect(site_url('Profile'));
            } else {
                $this->load->view("gagal");
                redirect(site_url('Profile'));
            }
        }
    }

    function addPortfolio()
    {
        $this->load->library('upload');
        $judul     = $this->input->post("judul");
        $deskripsi = $this->input->post("deskripsi");
        if (!empty($_FILES['gambar']['name']) and !empty($judul) and !empty($deskripsi) ) {

            $config['upload_path'] = './upload/portfolio';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $date = date('Ymd');
            $new_name = $this->session->userdata('username') . "_" . $date . "_" . rand(0, 999999999);
            $config['file_name'] = $new_name;

            $this->upload->initialize($config);

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('message', 'Project gagal ditambahkan');
                redirect(site_url('Profile/managePortfolio'));
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
                    $this->session->set_flashdata('message', 'Project baru telah ditambahkan');
                    redirect(site_url('Profile/managePortfolio'));
                } else {
                    $this->session->set_flashdata('message', 'Project gagal ditambahkan');
                    redirect(site_url('Profile/managePortfolio'));
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Silakan isi seluruh field');
            redirect(site_url('Profile/managePortfolio'));
        }
    }
    function updatePortfolio($id)
    {
        $this->load->library('upload');

        $this->form_validation->set_rules('judul', 'judul', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {

            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './upload/portfolio';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2000;
                $date = date('Ymd');
                $new_name = $this->session->userdata('username') . "_" . $date . "_" . rand(0, 999999999);
                $config['file_name'] = $new_name;

                $this->upload->initialize($config);

                $this->load->library('upload', $config);
                $this->upload->do_upload('gambar');

                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $data = array(
                    'username'  => $this->session->userdata('username'),
                    'nama'      => $this->session->userdata('nama'),
                    'judul'     => $this->input->post("judul"),
                    'deskripsi' => $this->input->post("deskripsi"),
                    'gambar'    => $file_name
                );
            } else {
                $data = array(
                    'username'  => $this->session->userdata('username'),
                    'nama'      => $this->session->userdata('nama'),
                    'judul'     => $this->input->post("judul"),
                    'deskripsi' => $this->input->post("deskripsi"),
                );
            }
            $this->db->where('id', $id);
            if ($this->db->update('portfolio', $data)) {
                $this->session->set_flashdata('message', 'Project telah diperbaharui');
                redirect(site_url('Profile/managePortfolio'));
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbaharui project');
                redirect(site_url('Profile/managePortfolio'));
            }
        } else {
            $this->session->set_flashdata('error', 'Silakan isi semua field');
            redirect(site_url('Profile/managePortfolio'));
        }
    }
    function deletePortfolio()
    {
        $id  = $this->input->post('id');
        $this->db->where('id', $id);
        if ($this->db->delete('portfolio')) {
            $this->session->set_flashdata('message', 'Project telah dihapus');
            redirect(site_url('Profile/managePortfolio'));
        } else {
            $this->session->set_flashdata('error', 'Project gagal dihapus');
            redirect(site_url('Profile/managePortfolio'));
        }
    }
}
