<?php

class M_adminPasien extends CI_Model
{

    public function tampilPasien()
    {
        return $this->db->get('tb_pasien');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_pasien', $addData);
    }

    public function editPasien($where)
    {
        return $this->db->get_where('tb_pasien', $where);
    }

    public function ubahData($addData, $where)
    {
        $this->db->update('tb_pasien', $addData, $where);
    }

    public function hapusPasien($where)
    {
        $this->db->delete('tb_pasien', $where);
    }

    // public function truncatePasien()
    // {
    //     $this->db->query("TRUNCATE TABLE tb_pasien");
    // }
}
