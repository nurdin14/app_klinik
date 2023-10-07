<?php

class M_pembayaran extends CI_Model {

    public function tampilPembayaran()
    {
        return $this->db->get('tb_transaksi');
    }

    public function getPembayaran()
    {
        return $this->db->get('tb_rekam');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_transaksi', $addData);
    }

    public function hapusData($where)
    {
        $this->db->delete('tb_transaksi', $where);
    }

    public function truncateData()
    {
        $this->db->query('TRUNCATE TABLE tb_transaksi');
    }
}