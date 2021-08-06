<?php
    class KrisarModel extends CI_Model{
    function getKrisar(){
            return $this->db->get("krisar");
    }
    function insertKrisar(){
        $krisar = array(
            "id" => $this->input->post("id"),
            "subjek" => $this->input->post("subjek"),
            "pesan" => $this->input->post("pesan")
            );
        return $this->db->insert('Krisar',$krisar);
    }
    
    function getKrisarById($id){ 
        $this->db->where("id",$id); 
        return $this->db->get('Krisar'); 
    } 

    function deleteKrisar($id){ 
        $this->db->where("id",$id); 
        return $this->db->delete("Krisar"); 
    }
}
?>