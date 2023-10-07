<?php

class M_login extends CI_Model {

    public function authLogin($data)
    {
        return $this->db->get_where('tb_pasien', $data);
    }

    public function addRegister($data)
    {
        $this->db->insert('tb_pasien', $data);
    }

    public function lupaPassword($username){
        return $this->db->query("select * from tb_pasien where username = '$username'");
    }
}