<?php

class M_adminPetugas extends CI_Model
{

    public function tampilPetugas()
    {
        return $this->db->get('tb_petugas');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_petugas', $addData);
    }

    public function editPetugas($where)
    {
        return $this->db->get_where('tb_petugas', $where);
    }

    public function ubahData($addData, $where)
    {
        $this->db->update('tb_petugas', $addData, $where);
    }

    public function hapusPetugas($where)
    {
        $this->db->delete('tb_petugas', $where);
    }

    // public function truncatePasien()
    // {
    //     $this->db->query("TRUNCATE TABLE tb_pasien");
    // }
}
