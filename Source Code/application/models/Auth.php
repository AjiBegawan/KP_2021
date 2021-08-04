<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($nama,$username,$password,$email,$phone,$aliran_seni,$instagram,$twitter,$facebook, $hak_akses)
	{
		$data_user = array(
            'nama'          =>$nama,
			'username'      =>$username,
			'password'      =>password_hash($password,PASSWORD_DEFAULT),
			'email'         =>$email,
            'phone'         =>$phone,
            'aliran_seni'   =>$aliran_seni,
            'instagram'     =>$instagram,
            'twitter'       =>$twitter,
            'facebook'      =>$facebook,
            'role'          =>$hak_akses 
		);
       
		$this->db->insert('user',$data_user);
	}

    function registerAdmin($nama,$username,$password,$email,$phone, $hak_akses)
	{
		$data_user = array(
            'nama'          =>$nama,
			'username'      =>$username,
			'password'      =>password_hash($password,PASSWORD_DEFAULT),
			'email'         =>$email,
            'phone'         =>$phone,
            'aliran_seni'   =>"",
            'instagram'     =>"",
            'twitter'       =>"",
            'facebook'      =>"",
            'role'          =>$hak_akses 
		);
       
		$this->db->insert('user',$data_user);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
