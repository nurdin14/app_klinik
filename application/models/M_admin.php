<?php
class M_admin extends CI_Model {

    public function tampilLaporan()
    {
        return $this->db->get('v_rekam');
    }

    public function countPasien()
    {
        return $this->db->query("SELECT COUNT(tb_pasien.nama) as total_pasien FROM tb_pasien");
    }
    public function countPetugas()
    {
        return $this->db->query("SELECT COUNT(tb_petugas.nama) as total_petugas FROM tb_petugas");
    }
    public function sumTransaksi() {
        return $this->db->query("SELECT SUM(tb_transaksi.pembayaran) as total_transaksi FROM tb_transaksi");
    }
    public function countPengajuan()
    {
        return $this->db->query("SELECT COUNT(nama) as total_pengajuan FROM tb_pasien WHERE NOT alergi_obat='ada'");
    }
}