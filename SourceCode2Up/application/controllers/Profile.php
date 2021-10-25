<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->model('ProfileModel');

        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['login'] = $this->getUsernameLogin();

            $data['test'] = $this->ProfileModel->getAllUser();
            // $data['portfolio'] = $this->getUsernamePortfolio();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/KP_2021/SourceCode2Up/profile/index';
        $config['total_rows'] =  $this->ProfileModel->getCountPortfolioUser();
        $config['per_page'] = 3;

        // var_dump($config['total_rows']);die;

        // styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"> <ul class="pagination">';
        $config['full_tag_close'] = '</ul> </nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';
        
        $config['prev_link'] = '&laquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';
        
        $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = ' </a></li>';
        
        $config['num_tag_open'] = ' <li class="page-item">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['portfolio'] = $this->ProfileModel->getUsernamePortfolio($config['per_page'],$data['start']);
       
            $this->load->view("profile", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function profile_edit()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['login'] = $this->getUsernameLogin();
            $data['portfolio'] = $this->getUsernamePortfolio();
            $this->load->view("profile_edit", $data);
        } else {
            $this->load->view("Login");
        }
    }
    public function profilePortfolio()
    {
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $data['login'] = $this->getUsernameLogin();
            $data['portfolio'] = $this->getUsernamePortfolio();
            $this->load->view("addProfilePortfolio", $data);
        } else {
            $this->load->view("Login");
        }
    }
    function getUsernamePortfolio()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio');
        return $query;
    }
    function getUsernamePortfolioPag($limit, $start)
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('portfolio',$limit, $start);
        return $query;
    }
    function getUsernameLogin()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
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

            // $this->load->view("sukses");
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                // $this->load->view("Imageupload_failed");
                // $this->load->view("sukses");
                $this->load->view("gagal");
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $data = array(
                    'username' => $this->session->userdata('username'),
                    'judul' => $this->input->post("judul"),
                    'deskripsi' => $this->input->post("deskripsi"),
                    'gambar'      => $file_name
                );
                if ($this->db->insert('portfolio', $data)) {
    
                    $this->index();
                } else {
                    $this->load->view("gagal");
                }
            }

        }else{
            $this->load->view("gagal");
        }

        


    }
    
}