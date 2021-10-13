<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth');
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
        $data['artikel'] = $this->getArtikelId($id);
        $this->load->view("editAdminArtikel", $data);
    }
    function getArtikelId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('artikel')->row();
        return $query;
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
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
    function deleteArtikel($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('artikel')) {
            $this->index();
        } else {
            $this->load->view("gagal");
        }
    }
}
