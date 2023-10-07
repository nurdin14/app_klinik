<?php

class M_dataPemeriksaan extends CI_Model {
    
    public function tampilPasien() {
        return $this->db->get('tb_pasien');
    }

    public function editPasien($where)
    {
        return $this->db->get_where('tb_pasien', $where);
    }

    public function addData($addData) 
    {
        $this->db->insert('tb_rekam', $addData);
    }

    public function upData($addData, $where)
    {
        $this->db->update('tb_pasien', $addData, $where);
    }

    //rekam medis
    public function tampilRm($where)
    {
        return $this->db->get_where('tb_rekam', $where);
    }

    public function editRekam($where)
    {
        return $this->db->get_where('tb_rekam', $where);
    }

    public function ubahTerapi($addData, $where)
    {
        $this->db->update('tb_rekam', $addData, $where);
    }

    public function cetakRm($where)
    {
        return $this->db->get_where('v_rekam', $where);
    }
}