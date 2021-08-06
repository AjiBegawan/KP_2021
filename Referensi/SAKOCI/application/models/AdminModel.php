<?php
    class AdminModel extends CI_Model{
        function insertAdmin($admin){
            return $this->db->insert("admin",$admin);
        }
        function login(){
            $username = $this->input->post("username");
            $pass = $this->input->post("password");
            $this->db->where("username",$username);
            $this->db->where("password",$pass);
            return $this->db->get("admin");
        } 
    }
    
?> 