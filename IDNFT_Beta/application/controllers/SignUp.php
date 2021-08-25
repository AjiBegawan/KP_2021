<?php
class SignUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function index()
    {
        $this->load->library('session');
        $this->load->helper("url");
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/home", $data);
        } else {
            $this->load->view("SignUpMember");
        }

        
    }
    function SignUpAdmin()
    {
        $this->load->helper("url");
        $this->load->view("SignUpAdmin");
    }
    function prosesSignUp()
    {
        error_reporting(0);
        $this->load->model("Auth", "", TRUE);

        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');
        
        if ($this->form_validation->run() == true) {
            error_reporting(0);
            $nama = $this->input->post("nama");
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $email = $this->input->post("email");
            $aliran_seni = $this->input->post("aliran_seni");
            $hak_akses = "2";
            $idnft = rand(0,99999);

            $query = ("SELECT * FROM user WHERE username = '$username'");
            $result = $this->db->query($query);


            if (!mysqli_fetch_array($result)) {
                error_reporting(0);
                $this->Auth->register($nama, $username, $password, $email,  $aliran_seni, $idnft, $hak_akses);
                $this->Auth->login_user($username,$password);
                $this->session->set_flashdata('message', 'Proses Pendaftaran User Berhasil');
                
                redirect(site_url('Profile'));
            } else {
                error_reporting(0);
                $this->session->set_flashdata('error', 'Username telah terdaftar');
                redirect(site_url('SignUp'));
            }
        } else {
            error_reporting(0);
            //  $this->session->set_flashdata('error', validation_errors());
            $this->session->set_flashdata('error', 'Username telah terdaftar');
            redirect(site_url('SignUp'));
        }
    }

    function prosesSignUpAdmin()
    {
        $this->load->model("Auth", "", TRUE);

        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {
            $nama = $this->input->post("nama");
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $hak_akses = $this->input->post("hak_akses");

            $result = $this->db->where("username", $username);

            if (!mysqli_fetch_assoc($result)) {
                $this->Auth->registerAdmin($nama, $username, $password, $email, $phone, $hak_akses);
                $this->session->set_flashdata('message', 'Proses Pendaftaran User Berhasil');
                redirect(site_url('Profile'));
            } else {
                $this->session->set_flashdata('error', 'Username telah terdaftar');
                redirect(site_url('SignUp'));
            }
        } else {
            //  $this->session->set_flashdata('error', validation_errors());
            $this->session->set_flashdata('error', 'Data yang Anda masukan salah');
            redirect(site_url('SignUp'));
        }
    }

    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
}
