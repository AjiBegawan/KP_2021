<?php
class JadwalModel extends CI_Model{
    function getJadwal(){
        return $this->db->get("jadwal");
    }

    function updateJadwal($id){
        $jadwal = array(
            "hari" => $this->input->post("hari"),
            "jam" => $this->input->post("jam"),
            "lokasi" => $this->input->post("lokasi")
        );
        $this->db->where("ID",$id);
        return $this->db->update("jadwal",$jadwal);
    }

    function deleteJadwal($id){
        $this->db->where("ID",$id);
        return $this->db->delete("Jadwal");
    }  

    function getJadwalById($id){
        $this->db->where("ID",$id);
        return $this->db->get('jadwal');
    }
}
?>