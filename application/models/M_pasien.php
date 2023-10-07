<?php 

class M_pasien extends CI_Model {

    public function tampilData($where)
    {
        return $this->db->query("select * from tb_pasien where username = '$where'");
    }

    public function tampilRekam($where)
    {
        return $this->db->query("select * from v_rekam where username = '$where'");
    }

    public function tampilUbah($where){
        return $this->db->get_where('tb_pasien', $where);
    }

    public function ubahPasien($data, $where){
        $this->db->update('tb_pasien',$data, $where);
    }
}