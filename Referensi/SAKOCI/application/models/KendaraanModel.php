<?php
    class KendaraanModel extends CI_Model{
        function getkendaraan(){
            return $this->db->get("kendaraan");
        }

        function satudata(){
            $no_ken = $this->input->post("no_ken");
            $this->db->where("no_kendaraan",$no_ken); 
            return $this->db->get('kendaraan'); 
        }
}
?>