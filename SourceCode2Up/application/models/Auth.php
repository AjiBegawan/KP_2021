<?php
class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view("login/login");
    }

    function register($nama, $username, $password, $email, $aliran_seni, $idnft, $hak_akses)
    {
        $data_user = array(
            'nama'          => $nama,
            'username'      => $username,
            'password'      => password_hash($password, PASSWORD_DEFAULT),
            // 'password'      => md5($this->input->post('password')),
            'email'         => $email,
            'aliran_seni'   => $aliran_seni,
            'role'          => $hak_akses,
            'idnft'         => $idnft,
            'is_active'     => 0,
            'date_created'  => time()
        );

        // Siapkan token
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email'         => $email,
            'token'         => $token,
            'date_created'  => time()
        ];


        $this->db->insert('user', $data_user);
        $this->db->insert('user_token', $user_token);

        $this->_sendEmail($token, 'verify', $email);
    }

    private function _sendEmail($token, $type, $email)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'atomichabit2021@gmail.com',
            'smtp_pass'  => 'AtomicHabit2021',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset'  => 'utf-8',
            'wordwrap' => TRUE,
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('atomichabit2021@gmail.com', 'Kerja Praktik AD 2021');
        $this->email->to($email);

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'SignUp/verify?email=' . $email . ' &token=' . urlencode($token) . '">Activate</a>');
            // $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'login');
        }

        if ($this->email->send()) {
            return TRUE;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    function login_user($username, $password)
    {
        if ($this->db->get_where('admin', array('username' => $username))->num_rows()) {
            $data_user = $this->db->get_where('admin', array('username' => $username))->row();
            if (password_verify($password, $data_user->password)) {
                $query = $this->getDataAdmin($username);
                $userdata = array(
                    'is_login'    => true,
                    'is_admin'    => true,
                    'password'    => $query->password,
                    'username'    => $query->username,
                    'nama'        => $query->nama,
                    'email'       => $query->email,
                );
                $this->session->set_userdata($userdata);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            $user = $this->db->get_where('user', ['username' => $username])->row_array();
            if ($user['is_active']) {
                if ($this->db->get_where('user', array('username' => $username))->num_rows()) {
                    $query = $this->db->get_where('user', array('username' => $username));
                    $data_user = $query->row();
                    if (password_verify($password, $data_user->password)) {
                        $query = $this->getDataByUsername($username);
                        $userdata = array(
                            'is_login'    => true,
                            'is_admin'    => false,
                            'password'    => $query->password,
                            'username'    => $query->username,
                            'nama'        => $query->nama,
                            'email'       => $query->email,
                            'phone'       => $query->phone,
                        );
                        $this->session->set_userdata($userdata);
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            } else {
                $this->session->set_flashdata('error', 'Akun anda belum diaktivasi!!!');
                redirect(site_url('login'));
            }
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }

    function getDataByUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user')->row();
        return $query;
    }

    function getUsernameData()
    {
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get('user')->row();
        return $query;
    }
    function getUSosmedIdnft()
    {
        $query = $this->db->get('sosmed')->row();
        return $query;
    }
    function cekIsAdmin($username)
    {
        $this->db->where('username', $username);
        if ($this->db->get('admin')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function getDataAdmin($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin')->row();
        return $query;
    }
}
