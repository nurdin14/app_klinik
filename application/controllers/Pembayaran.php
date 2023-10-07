<?php

class Pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pembayaran',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'get' => $this->m_pembayaran->getPembayaran()->result_array(),
            'tampil' => $this->m_pembayaran->tampilPembayaran()->result_array()
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pembayaran/v_pembayaran', $data);
        $this->load->view('templates/template_admin/footer');

        if(isset($_POST['simpan']))
        {
            $addData = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_rekam' => $this->input->post('id_rekam'),
                'tanggal' => $this->input->post('tanggal'),
                'pembayaran' => $this->input->post('pembayaran'),
                'type' => $this->input->post('type'),
            ];

            $this->m_pembayaran->addData($addData);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Simpan.
                      </div>
                    </div>
            ');
            redirect('pembayaran/index');
        }
    }

    public function hapusPembayaran($id_tranaski)
    {
        $where = ['id_transaksi' => $id_tranaski];
        $this->m_pembayaran->hapusData($where);
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Hapus.
                      </div>
                    </div>
            ');
        redirect('pembayaran/index');
    }

    public function truncatePembayaran()
    {
        $this->m_pembayaran->truncateData();
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Kosongkan.
                      </div>
                    </div>
            ');
        redirect('pembayaran/index');
    }
}