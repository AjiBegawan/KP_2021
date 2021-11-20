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
    // All function to call page and manage pagination
    function member()
    {
        // Pagination
        $this->load->library('pagination');

        //Ambil Data
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
            // $data['keyword'] = null;
        }

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/member';
        // $config['total_rows'] =  $this->AdminModel->getCountUserAll();
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->or_like('username', $data['keyword']);
        $this->db->from('user');
        $config['total_rows'] =  $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->AdminModel->getAllUser($config['per_page'], $data['start'], $data['keyword']);

        $data['login'] = $this->AdminModel->getUsernameLogin();
        if ($this->session->userdata('is_admin')) {
            $this->load->view("admin\member", $data);
        } else {
            $this->session->set_flashdata('error', 'Maaf Anda bukan Admin');
            redirect(site_url('home'));
        }
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

        $data['login'] = $this->AdminModel->getUsernameLogin();

        $this->load->helper("url");
        if ($this->session->userdata('is_admin')) {
            $this->load->view("admin\contact", $data);
        } else {
            $this->session->set_flashdata('error', 'Maaf Anda bukan Admin');
            redirect(site_url('home'));
        }
    }
    function artikel()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/artikel';
        $config['total_rows'] =  $this->AdminModel->getCountArtikel();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->AdminModel->getAllArtikel($config['per_page'], $data['start']);

        $data['login'] = $this->AdminModel->getUsernameLogin();

        $this->load->helper("url");

        if ($this->session->userdata('is_admin')) {
            $this->load->view("admin\artikel", $data);
        } else {
            $this->session->set_flashdata('error', 'Maaf Anda bukan Admin');
            redirect(site_url('home'));
        }
    }

    function sosmed()
    {
        $this->load->helper("url");
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $data['sosmed'] = $this->AdminModel->getUSosmedIdnft();

        if ($this->session->userdata('is_admin')) {
            $this->load->view("admin\sosmed", $data);
        } else {
            $this->session->set_flashdata('error', 'Maaf Anda bukan Admin');
            redirect(site_url('home'));
        }
    }

    // All Function Admin
    function manageAdmin()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/admin/manageAdmin';
        $config['total_rows'] =  $this->AdminModel->getCountAdminAll();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->AdminModel->getAllUser($config['per_page'], $data['start']);

        $data['login'] = $this->AdminModel->getUsernameLogin();
        $data['sosmed'] = $this->AdminModel->getUSosmedIdnft();
        $data['admin'] = $this->AdminModel->getAdminData();

        $this->load->view("admin\manageAdmin", $data);
    }
    function addAdmin()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {
            $nama = $this->input->post("name");
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $email = $this->input->post("email");

            $query = ("SELECT * FROM admin WHERE username = '$username'");
            $result = $this->db->query($query)->row();
            var_dump($result);

            if ($result == NULL) {
                $this->AdminModel->registerAdmin($nama, $username, $password, $email);
                $this->session->set_flashdata('message', 'Proses Pendaftaran Admin Berhasil');
                redirect(site_url('admin/manageAdmin'));
            } else {
                $this->session->set_flashdata('error', 'Username telah terdaftar');
                redirect(site_url('admin/manageAdmin'));
            }
        } else {
            $this->session->set_flashdata('error', 'Data yang anda masukan salah');
            redirect(site_url('admin/manageAdmin'));
        }
    }
    function updateAdmin()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post("id");
            $nama = $this->input->post("name");
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $email = $this->input->post("email");

            // var_dump($id);die;
            if ($this->db->where('id', $id)) {
                $this->AdminModel->updateAdmin($nama, $username, $password, $email);
                $this->session->set_flashdata('message', 'Data Admin telah diperbarui');
                redirect(site_url('admin/manageAdmin'));
            } else {
                $this->session->set_flashdata('error', 'Data anda sudah terdaftar');
                redirect(site_url('admin/manageAdmin'));
            }
        } else {
            $this->session->set_flashdata('error', 'Data yang and masukan salah / kurang');
            redirect(site_url('admin/manageAdmin'));
        }
    }
    function deleteAdmin()
    {
        $id = $this->input->post("id");

        $this->db->where('id', $id);
        if ($this->db->delete('admin')) {
            $this->session->set_flashdata('message', 'Anda telah berhasil menghapus Admin');
            redirect(site_url('admin/manageAdmin'));
        } else {
            $this->session->set_flashdata('error', 'Anda gagal menghapus admin');
            redirect(site_url('admin/manageAdmin'));
        }
    }
    // All Function User / Member
    // function editUser($username)
    // {
    //     $data['login'] = $this->AdminModel->getUsernameLogin();
    //     $data['user'] = $this->AdminModel->getUserDatabase($username);
    //     $this->session->set_flashdata('message', 'Memunculkan Data');
    //     $this->load->view("admin/editAdminUser", $data);
    // }
    // function updateUser()
    // {
    //     $username = $this->input->post('username');
    //     $role = $this->input->post('role');

    //     $data = array(
    //         'role'      => $role
    //     );
    //     $this->db->where('username', $username);
    //     if ($this->db->update('user', $data)) {
    //         $this->index();
    //     } else {
    //         $this->load->view("gagal");
    //     }
    // }
    // function deleteUser($username)
    // {
    //     $this->db->where('username', $username);
    //     if ($this->db->delete('user')) {
    //         $this->index();
    //     } else {
    //         $this->load->view("gagal");
    //     }
    // }
    // All Function Sosmed
    function editSosmed($id)
    {
        $data['sosmed'] = $this->AdminModel->getUSosmedId($id);
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $this->load->view("admin/editAdminSosmed", $data);
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
            $this->session->set_flashdata('message', 'Berhasil diperbaharui');
            redirect(site_url('admin/sosmed'));
        } else {
            $this->session->set_flashdata('message', 'Gagal diperbaharui');
            redirect(site_url('admin/sosmed'));
            // $this->load->view("gagal");
        }
    }
    // All Function Pesan / Contact
    function editPesan($id)
    {
        $data['contact'] = $this->AdminModel->getPesanId($id);
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $this->load->view("admin/editAdminPesan", $data);
    }

    function updatePesan()
    {
        $id  = $this->input->post('id');
        $status  = $this->input->post('status');

        $data = array(
            'id'    => $id,
            'status'    => $status
        );
        $this->db->where('id', $id);
        if ($this->db->update('contact', $data)) {
            $this->contact();
        } else {
            $this->load->view("gagal");
        }
    }
    function deletePesan()
    {
        $id  = $this->input->post('id');
        // var_dump($id);
        // die;
        $this->db->where('id', $id);
        if ($this->db->delete('contact')) {
            $this->session->set_flashdata('message', 'Dihapus');
            redirect(site_url('admin/contact'));
        } else {
            $this->load->view("gagal");
        }
    }

    // All Function Artikel
    function addArtikel()
    {
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $this->load->view("admin/addAdminArtikel", $data);
    }
    function editArtikel($id)
    {
        $data['artikel'] = $this->AdminModel->getArtikelId($id);
        $data['login'] = $this->AdminModel->getUsernameLogin();
        $this->load->view("admin/editAdminArtikel", $data);
    }
    function deleteArtikel()
    {
        $id  = $this->input->post('id');

        $this->db->where('id', $id);
        if ($this->db->delete('artikel')) {

            $this->session->set_flashdata('message', 'Artikel berhasil dihapus');
            redirect(site_url('Admin/Artikel'));

        } else {
            $this->session->set_flashdata('error', 'Artikel gagal dihapus');
            redirect(site_url('Admin/Artikel'));
        }
    }
    function updateArtikel($id)
    {
        $this->load->library('upload');

        $config['upload_path'] = './upload/artikel';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;

        $date = date('Ymd');
        $new_name = $date . "_" . rand(0, 999999999);
        $config['file_name'] = $new_name;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');

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
        $this->db->where('id', $id);
        if ($this->db->update('artikel', $data)) {
            $this->session->set_flashdata('message', 'Artikel berhasil diubah');
            redirect(site_url('Admin/Artikel'));
        } else {
            $this->session->set_flashdata('error', 'Artikel gagal diubah');
            redirect(site_url('Admin/Artikel'));
        }
    }
    function ProsesAddArtikel()
    {
        $this->load->library('upload');

        $this->form_validation->set_rules('judul', 'judul', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('paragraf1', 'paragraf1', 'trim|required|min_length[1]');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = './upload/artikel';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 5000;

            $date = date('Ymd');
            $new_name = $date . "_" . rand(0, 999999999);
            $config['file_name'] = $new_name;

            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $this->upload->do_upload('gambar');

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
                'gambar'    => $file_name,
                'date_upload'   => date('d F Y  H:i:s')
            );
            // var_dump($data['date_upload']);die;
            if ($this->db->insert('artikel', $data)) {
                $this->session->set_flashdata('message', 'Anda berhasil menambahkan artikel baru');
                redirect(site_url('Admin/artikel'));
            } else {
                $this->session->set_flashdata('error', 'Maaf Anda gagal menambahkan artikel baru');
                redirect(site_url('Admin/artikel'));
            }
        } else {
            $this->session->set_flashdata('error', 'Anda harus mengisi minimal judul dan paragraf 1');
            redirect(site_url('Admin/artikel'));
        }
    }
}
