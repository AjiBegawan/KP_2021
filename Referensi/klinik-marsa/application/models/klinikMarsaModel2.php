<?php

class klinikMarsaModel2 extends CI_Model
{

// fungsi tampil data booking telah diproses di halaman laporan
   public function tampil_booking_selesai()
    {        
        $this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->order_by('id_booking','desc');
        return $this->db->get();
    }

public function tahun(){
        $this->db->select('YEAR(tanggal) AS tahun'); 
        $this->db->from('pengajuan_booking'); 
        $this->db->order_by('YEAR(tanggal)'); 
        $this->db->group_by('YEAR(tanggal)'); 
        $query = $this->db->get();
        return $query->result(); 
    }
     public function view_by_bulan($month, $year){
        $this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->order_by('id_booking','desc');
        $query = $this->db->get(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        return $query->result_array();
    }
     public function view_semua(){
         $this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->order_by('id_booking','desc');
        $query = $this->db->get();
        return $query->result_array(); // Tampilkan semua data transaksi
    }
    public function view_by_tanggal($date){
        $this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
        $this->db->order_by('id_booking','desc');
        $query = $this->db->get(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        return $query->result_array();
    }
     public function view_by_tahun($year){
       $this->db->select('*');
        $this->db->from('pengajuan_booking');
        $this->db->join('waktu','pengajuan_booking.id_waktu=waktu.id_waktu');
        $this->db->join('jam_layanan','pengajuan_booking.id_jamlayanan=jam_layanan.id_jamlayanan');
        $this->db->where("(pengajuan_booking.persetujuan='setuju' OR pengajuan_booking.persetujuan='tidak setuju')");
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        $this->db->order_by('id_booking','desc');
        $query = $this->db->get(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        return $query->result_array();
    }
    // public function view_group_tanggal($date){
    //     $this->db->select(', count() as total');
    //     $this->db->join('tb_pengguna','tb_po.id_pengguna=tb_pengguna.id_pengguna');
    //     $this->db->where('tb_po.status','Kirim');
    //     $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
    //     $this->db->group_by('tb_po.id_pengguna');
    //     $this->db->order_by('id_po','desc');
    //     $query = $this->db->get('tb_po'); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    //     if($query->num_rows()>0){
    //      return $query->result();
    //     }
    // }
    // public function view_group_bulan($month, $year){
    //     $this->db->select(', count() as total');
    //     $this->db->join('tb_pengguna','tb_po.id_pengguna=tb_pengguna.id_pengguna');
    //     $this->db->where('tb_po.status','Kirim');
    //     $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
    //     $this->db->where('YEAR(tanggal)', $year);  // Tambahkan where tahun
    //     $this->db->group_by('tb_po.id_pengguna');
    //     $this->db->order_by('id_po','desc');
    //     $query = $this->db->get('tb_po'); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    //     if($query->num_rows()>0){
    //      return $query->result();
    //     }
    // }
    // public function view_group_tahun($year){
    //     $this->db->select(', count() as total');
    //     $this->db->join('tb_pengguna','tb_po.id_pengguna=tb_pengguna.id_pengguna');
    //     $this->db->where('tb_po.status','Kirim');
    //     $this->db->where('YEAR(tanggal)', $year);// Tambahkan where tahun
    //     $this->db->group_by('tb_po.id_pengguna');
    //     $this->db->order_by('id_po','desc');
    //     $query = $this->db->get('tb_po'); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    //     if($query->num_rows()>0){
    //      return $query->result();
    //     }
    // }
    // public function view_group_semua(){
    //     $this->db->select(', count() as total');
    //     $this->db->join('tb_pengguna','tb_po.id_pengguna=tb_pengguna.id_pengguna');
    //     $this->db->where('tb_po.status','Kirim');
    //     $this->db->group_by('tb_po.id_pengguna');
    //     $this->db->order_by('id_po','desc');
    //     $query = $this->db->get('tb_po');
    //     if ($query->num_rows()>0){
    //      return $query->result();
    //     }
    // }
}