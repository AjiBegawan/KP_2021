<?php

class KlinikMarsaModel extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function totalPengajuan(){
		$query=$this->db->get('pengajuan_booking');
		if ($query->num_rows()>0) {
			return $query->num_rows();
			# code...
		}else{
			return 0;
		}
	}
	public function totalDokter(){
		$query=$this->db->get('dokter');
		if ($query->num_rows()>0) {
			return $query->num_rows();
			# code...
		}else{
			return 0;
		}
	}
	
	function insertPengguna($pengguna){
		return $this->db->insert("pengguna", $pengguna);
	}
	// fungsi login
	function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get("pengguna");
	}

	// fungsi untuk mengambil semua data
	public function getAllData($table) {
        return $this->db->get($table)->result();
    }
    //fungsi untuk mengambil data pengguna
    public function get_all_pengguna(){
		$this->db->select('*');
		$this->db->from('pengguna');
		$query = $this->db->get();
		return $query->result();
	}

	//fungsi untuk menghapus data pengguna
    public function deleteData($table,$data){
		$this->db->delete($table,$data);
	}
	public function id_pengguna(){
		$pengguna = $this->db->query("select MAX(RIGHT(id_pengguna,4)) as id_max from pengguna");
		$id = "";
        //Jika data sudah ada
        if($pengguna->num_rows()>0)
        {
            foreach($pengguna->result() as $p)
            {
                $tmp = ((int)$p->id_max)+1;
                $id = sprintf("%04s", $tmp);
            }
        }
        //jika data masih kosong
        else
        {
            $id = "0001";
        }
        return "P-".$id;

	}
	//fugsi ambil data selain superadmin
	function tampil_data_pengguna()
	{        
		$query=$this->db->query("select * from pengguna where level NOT IN ('superadmin')");
		return $query->result();
    }
	
	//fungsi tambah data pengguana
	public function insert_pengguna($data)
	{
		$insert = $this->db->insert('pengguna',$data);
		return $data;
	}
	
	//fungsi ambil data pengguna 1 baris
	function ambil_data_pengguna($id)
	{        
		$this->db->select('*'); 
		$this->db->from('pengguna'); 
		$this->db->where('id_pengguna', $id);
		return $this->db->get();
    }
	// fungsi ubah data pengguna
	public function update_pengguna($kode, $data)
	{         
		$this->db->where('id_pengguna', $kode); 
		$this->db->update('pengguna', $data); 
	}
	//fungsi untuk mengambil semua data tabel dokter
	 public function get_all_dokter(){
		$this->db->select('*');
		$this->db->from('dokter');
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi untuk menghapus data tabel dokter
	public function deleteDokter($table,$data){
		$this->db->delete($table,$data);
	}
	//fungsi upload data dokter
	function upload_dokter($a)
	{        
		$this->db->select('*'); 
		$this->db->from('dokter'); 
		$this->db->where('id_dokter', $a);
		return $this->db->get();
    }
	
	//fungsi ambil data dari database satu baris
	function ambil_data_dokter($id)
	{        
		$this->db->select('*'); 
		$this->db->from('dokter'); 
		$this->db->where('id_dokter', $id);
		return $this->db->get();
    }
    public function update_data_dokter($kode, $data)
	{         
		$this->db->where('id_dokter', $kode); 
		$this->db->update('dokter', $data); 
	}
	
	//fungsi ubah data dokter
	public function ubah($id, $data) {
    try{
      $this->db->where('id_dokter',$id)->limit(1)->update('dokter', $data);
      return true;
    }catch(Exception $e){}
	}

	//fungsi untuk mengambil data tabel waktu
	public function tampil_waktu(){
		$this->db->select('*');
		$this->db->from('waktu');
		$query=$this->db->get();
		return $query->result();
	}
	function Get_jam($id_waktu)
    {
        $this->db->where('id_waktu', $id_waktu);

        $this->db->order_by('id_jamlayanan', 'ASC');
        return $this->db->from('jam_layanan')
            ->get()
            ->result();
    }
	//fungsi untuk mengambil data tabel waktu
	public function get_all_waktu(){
		$this->db->select('*');
		$this->db->from('waktu');
		$query=$this->db->get();
		return $query->result();
	}
	//fungsi untuk mengambil semua data tabel jadwal
	
	public function tambah_jadwal(){
		$data = array (
			"id_dokter" => $this->input->post("dokter"),
			"id_waktu" => $this->input->post("waktu"),
			"hari" => $this->input->post("hari"),
 
			);
		 return $this->db->insert('jadwal', $data);
	}
	
	public function deleteJadwal($id){        
		$this->db->where('id_jadwal', $id); 
		$this->db->delete('jadwal');   
	}
	//fungsi untuk mengambil semua data tabel jadwak
	public function get_all_jadwal(){
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('dokter','dokter.id_dokter = jadwal.id_dokter');
		
		$this->db->join('waktu','waktu.id_waktu = jadwal.id_waktu');
		$query=$this->db->get();
		return $query->result();
		
	}
	//fungsi ambil data jadwal 1 baris untuk update
	function ambil_data_jadwal($id)
	{        
		$this->db->select('*'); 
		$this->db->from('jadwal');
		$this->db->join('dokter','dokter.id_dokter = jadwal.id_dokter');
		$this->db->join('waktu','waktu.id_waktu = jadwal.id_waktu'); 
		$this->db->where('id_jadwal', $id);
		return $this->db->get();
    }
    public function update_jadwal($kode, $data)
	{         
		$this->db->where('id_jadwal', $kode); 
		$this->db->update('jadwal', $data); 
	}
	//fungsi mengambil data tabel pengajuan booking
	public function tampil_pengajuan(){
		$this->db->select('*');
		$this->db->from('pengajuan_booking');
		$this->db->join('waktu','waktu.id_waktu = pengajuan_booking.id_waktu');
		$query=$this->db->get();
		return $query->result();
	}

	//fungsi lihat data persetujuan berdasarkan pengguna
	function tampil_data_booking($id_pengguna)
	{        
		$this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='proses')");
        $this->db->where('pengajuan_booking.id_pengguna', $id_pengguna);
        $this->db->order_by('id_booking','desc');
		return $this->db->get();
	}
	//fungsi lihat semua data persetujuan untuk admin
	function tampil_data_belumProses()
	{        
		$this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='proses')");
        $this->db->order_by('id_booking','desc');
		return $this->db->get();
	}

    
	//fungsi ambil data untuk persetujuan
	function edit_persetujuan($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}
	
	//fungsi ubah persetujuan
	function update_data_persetujuan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	//fungsi mengambil data yang disetujui berdasarkan pengguna
	function tampil_data_setujui($id_pengguna)
	{        
		$this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->where('pengajuan_booking.id_pengguna', $id_pengguna);
        $this->db->order_by('id_booking','desc');
		return $this->db->get();
    }
    //fungsi mengambil data yang disetujui di admin 
    function tampil_hasil_setujui()
	{        
		$this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju')");
        $this->db->order_by('id_booking','desc');
		return $this->db->get();
    }
	
	//fungsi mengambil data yang ditolak diadministrasi
	function tampil_data_ditolak()
	{        
		$this->db->select('*'); 
		$this->db->from('pengajuan_booking');
		$this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan'); 
		$this->db->where("(pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->order_by('id_booking','desc');
		return $this->db->get();
    }
	
    //fungsi batalkan pengajuan di page pasien sebelum pengajuan diproses
	public function batalPengajuan($id){
		$this->db->where('id_booking', $id); 
		$this->db->delete('pengajuan_booking'); 
	}
	public function insert_booking($data)
	{
		$insert = $this->db->insert('pengajuan_booking',$data);
		return $data;
	}
	
	//tampil data berita
     public function get_all_berita(){
		$this->db->select('*');
		$this->db->from('berita');
		$query = $this->db->get();
		return $query->result();
	}

	function upload_berita($a)
	{        
		$this->db->select('*'); 
		$this->db->from('berita'); 
		$this->db->where('id_berita', $a);
		return $this->db->get();
    }
	public function deleteBooking($id){        
		$this->db->where('id_booking', $id); 
		$this->db->delete('pengajuan_booking');   
	}


	function ambil_data_booking($id)
	{        
		$this->db->select('*'); 
		$this->db->from('pengajuan_booking');
		$this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan'); 
		$this->db->where('id_booking', $id);
		return $this->db->get();
    }

    public function update_booking($kode, $data)
	{         
		$this->db->where('id_booking', $kode); 
		$this->db->update('pengajuan_booking', $data); 
		//print_r($data);die;
	}

	public function deleteBerita($table,$data){
		$this->db->delete($table,$data);
	}

	function ambil_data_berita($id)
	{        
		$this->db->select('*'); 
		$this->db->from('berita'); 
		$this->db->where('id_berita', $id);
		return $this->db->get();
    }
     public function update_data_berita($kode, $data)
	{         
		$this->db->where('id_berita', $kode); 
		$this->db->update('berita', $data); 
		//print_r($data);die;
	}

	// kelola poli
	public function get_all_poli(){
		$this->db->select('*');
		$this->db->from('poli');
		$query=$this->db->get();
		return $query->result();
		
	}
	//hapus poli

	public function deletePoli($table,$data){
		$this->db->delete($table,$data);
	}
	public function tambah_poli($data)
	{
		$insert = $this->db->insert('poli',$data);
		return $data;
	}
	function ambil_data_poli($id)
	{        
		$this->db->select('*'); 
		$this->db->from('poli'); 
		$this->db->where('id_poli', $id);
		return $this->db->get();
    }
	// fungsi ubah data pengguna
	public function update_poli($kode,$datas)
	{         
		$this->db->where('id_poli', $kode); 
		$this->db->update('poli', $datas); 
	}

}