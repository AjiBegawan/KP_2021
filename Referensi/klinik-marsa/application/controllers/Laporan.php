<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->load->model('klinikMarsaModel2');
    }
    // fungsi load halaman inde
	// public function index(){
		
	// 	//$data['data']=$this->klinikmarsaModel->get_all_waktu();
	// 	$this->load->view('template/headerback');
	// 	$this->load->view('template/sidebar_minisment');
	// 	$this->load->view('template/topbar');
	// 	 $this->data['tahun'] = $this->klinikMarsaModel2->tahun();
	// 	$this->data['booking'] = $this->klinikMarsaModel2->tampil_booking_selesai()->result_array();
	// 	$this->load->view('page_minisment/v_laporan', $this->data);
	// 	$this->load->view('template/footerback');
	//}
	public function index()
	{
		 if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $keterangan = 'Laporan Booking Tanggal '.date('d-m-y', strtotime($tgl));
                $url_cetak = 'index.php/Laporan/cetak?filter=1&tanggal='.$tgl;
                $laporan = $this->klinikMarsaModel2->view_by_tanggal($tgl); // Panggil fungsi view_by_date yang ada di KlinikMarsaModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $keterangan = 'Laporan Booking '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'index.php/Laporan/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $laporan = $this->klinikMarsaModel2->view_by_bulan($bulan, $tahun); //Panggil fungsi view_by_month yang ada di KlinikMarsaModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $keterangan = 'Laporan Booking Tahun '.$tahun;
                $url_cetak = 'index.php/Laporan/cetak?filter=3&tahun='.$tahun;
                $laporan = $this->klinikMarsaModel2->view_by_tahun($tahun); //Panggil fungsi view_by_year yang ada di KlinikMarsaModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $keterangan = 'Laporan Booking';
            $url_cetak = 'index.php/Laporan/cetak';
            $laporan = $this->klinikMarsaModel2->view_semua(); //Panggil fungsi view_all yang ada di klinikMarsaModel
        }

		$this->data['keterangan'] = $keterangan;
		$this->data['url_cetak'] = base_url('/'.$url_cetak);
		$this->data['booking'] = $laporan;
        $this->data['tahun'] = $this->klinikMarsaModel2->tahun();
		$this->load->view('template/headerback');
		$this->load->view('template/sidebar_minisment');
		$this->load->view('template/topbar');
		$this->load->view('page_minisment/v_laporan',$this->data);
		$this->load->view('template/footerback');

		
	}

	public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; //Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $keterangan = 'Laporan Booking Tanggal '.date('d-m-y', strtotime($tgl));
                $laporan = $this->klinikMarsaModel2->view_by_tanggal($tgl); // Panggil fungsi view_by_date yang ada di klinikmarsaModel
                //$grouplaporan = $this->klinikMarsaModel2->view_group_tanggal($tgl); // Panggil fungsi view_by_date yang ada di klinikMarsaModel2
                
            }else if($filter == '2'){ //Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $keterangan = 'Laporan Booking Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $laporan = $this->klinikMarsaModel2->view_by_bulan($bulan, $tahun); // Panggil fungsi view_by_month yang ada di M_bagkeuangan
                //$grouplaporan = $this->klinikMarsaModel2->view_group_bulan($bulan, $tahun); // Panggil fungsi view_by_month yang ada di klinikMarsaModel2
                
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $keterangan = 'Laporan Booking Tahun'.$tahun;
                $laporan = $this->klinikMarsaModel2->view_by_tahun($tahun); // Panggil fungsi view_by_year yang ada di M_bagkeuangan
                //$grouplaporan = $this->klinikMarsaModel2->view_group_tahun($tahun); // Panggil fungsi view_by_year yang ada di kliniMarsaModel
               
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $keterangan = 'Laporan Booking';
            $laporan = $this->klinikMarsaModel2->view_semua(); // Panggil fungsi view_all yang ada di klinikMarsaModel2
            //$grouplaporan = $this->klinikMarsaModel2->view_group_semua(); //Panggil fungsi view_all yang ada di KlinikMarsaModel
            
        }

        $data['keterangan'] = $keterangan;
        $data['booking'] = $laporan;
		//$data['grouplaporan'] = $grouplaporan;

		ob_start();
		$this->load->view('page_minisment/cetak_laporan',$data);
		$html = ob_get_contents();

		//require 'C:/xampp/htdocs/klinik-marsa/assets/html2pdf/html2pdf.class.php';
        require('./asset/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		ob_clean();
		$pdf->Output('<?="'.$keterangan.'";?>.pdf', 'D');
	}
		
		
		

		
		
		
		
	}
	

