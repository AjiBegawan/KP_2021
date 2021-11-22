<?php
class SignUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Auth");
    }
    function index()
    {
        $this->load->library('session');
        $this->load->helper("url");
        if ($this->session->userdata('is_login')) {
            $data['user'] = $this->getUsernameData();
            $this->load->view("halamanpelanggan/home", $data);
        } else {
            $this->load->view("signUp/SignUpMember");
        }
    }
    function SignUpAdmin()
    {
        $this->load->helper("url");
        $this->load->view("signUp/SignUpAdmin");
    }
    function prosesSignUp()
    {
        $captcha_response = trim($this->input->post('g-recaptcha-response'));

        if ($captcha_response != '') {
            $keySecret = '6LenGQkdAAAAALGVLnAxlYxvqgkCkLoL7O7_U01i';

            $check = array(
                'secret'        =>    $keySecret,
                'response'        =>    $this->input->post('g-recaptcha-response')
            );

            $startProcess = curl_init();
            curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($startProcess, CURLOPT_POST, true);
            curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
            curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

            $receiveData = curl_exec($startProcess);
            $finalResponse = json_decode($receiveData, true);

            if ($finalResponse['success']) {
                $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
                $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
                $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
                $this->form_validation->set_rules('ConfirmPassword', 'ConfirmPassword', 'trim|required|min_length[1]|max_length[255]');
                $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');

                $password = $this->input->post("password");
                $Confirmpassword = $this->input->post("ConfirmPassword");

                if ($password ==  $Confirmpassword) {
                    if ($this->form_validation->run() == true) {
                        $nama = $this->input->post("nama");
                        $username = $this->input->post("username");
                        $password = $this->input->post("password");
                        $email = $this->input->post("email");
                        $aliran_seni = $this->input->post("aliran_seni");
                        $hak_akses = "2";
                        $idnft = rand(0, 99999);

                        $query = ("SELECT * FROM user WHERE username = '$username' AND email = '$email'");
                        $result = $this->db->query($query);

                        if (!mysqli_fetch_array($result)) {
                            $this->Auth->register($nama, $username, $password, $email,  $aliran_seni, $idnft, $hak_akses);
                            // $this->Auth->login_user($username, $password);
                            $this->session->set_flashdata('message', 'Proses pendaftaran pengguna baru berhasil. Silahkan aktivasi akun Anda pada email yang Anda daftarkan!!!. Klik link yang kami kirimkan untuk melakukan aktivasi akun.');

                            redirect(site_url('login'));
                            // redirect(site_url('home'));
                        } else {
                            $this->session->set_flashdata('error', 'Username telah terdaftar');
                            redirect(site_url('signUp'));
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Data yang anda masukan salah');
                        redirect(site_url('signUp'));
                    }
                } else {
                    $this->session->set_flashdata('error', 'Pastikan Password dan Corfirm Password yang anda masukan sesuai');
                    redirect(site_url('signUp'));
                }
            } else {
                $this->session->set_flashdata('error', 'Silahkan selesaikan CAPTCHA terlebih dahulu');
                redirect(site_url('signUp'));
            }
        } else {
            $this->session->set_flashdata('error', 'Silahkan selesaikan CAPTCHA terlebih dahulu');
            redirect(site_url('signUp'));
        }
    }

    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (3600)) {

                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $user = $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', 'Akun telah diaktivasi. Silahkan Login');
                    redirect(site_url('login'));
                } else {

                    $user = $this->db->delete('user', ['email' => $email]);
                    $user = $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('error', 'Token anda expired!!!');
                    redirect(site_url('login'));
                }
            } else {
                $this->session->set_flashdata('error', 'Token anda invalid!!!');
                redirect(site_url('login'));
            }
        } else {
            $this->session->set_flashdata('error', 'Gagal Aktivasi Akun');
            redirect(site_url('login'));
        }
    }

    public function forgotPassword()
    {
        $this->load->model('Auth');

        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
            $this->load->view("login/forgotPassword");
        } else {
            $username = $this->input->post('username');
            $user = $this->db->get_where('user', ['username' => $username, 'is_active' => 1])->row_array();
            // var_dump($user["email"]);

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email'         => $user["email"],
                    'token'         => $token,
                    'date_created'  => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->Auth->_sendEmail($token, 'forgot', $user["email"]);

                $this->session->set_userdata('username', $user["username"]);

                $this->session->set_flashdata('message', 'Periksa email anda untuk melakukan reset password');
                redirect(site_url('SignUp/forgotPassword'));
            } else {
                $this->session->set_flashdata('error', 'Akun tidak terdaftar atau belum diaktivasi');
                redirect(site_url('SignUp/forgotPassword'));
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $user = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                // var_dump($email);
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('error', 'Reset Password gagal! Salah Token');
                redirect(site_url('login'));
            }
        } else {
            $this->session->set_flashdata('error', 'Reset Password gagal! Salah Email');
            redirect(site_url('login'));
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect(site_url('login'));
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view("login/changePassword");
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $username = $this->session->userdata('username');
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('username', $username);
            $this->db->where('email', $email);
            $this->db->update('user');

            $username = $this->session->unset_userdata('username');
            $username = $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', 'Password berhasil diubah! Silahkan Login.');
            redirect(site_url('login'));
        }
    }
}
