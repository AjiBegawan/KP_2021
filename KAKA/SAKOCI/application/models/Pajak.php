<?php
class Pajak extends CI_Model{
    function datapersatu(){
        $no_ken = $this->input->post("no_ken");
        $this->db->where("no_kendaraan",$no_ken); 
        return $this->db->get('pajak'); 
    }
}
?>