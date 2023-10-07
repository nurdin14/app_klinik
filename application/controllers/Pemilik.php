<?php

class Pemilik extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status_login') !="Login"){
            redirect('login/index');
        }

        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'countPasien' => $this->m_admin->countPasien()->result_array(),
            'countPetugas' => $this->m_admin->countPetugas()->result_array(),
            'countPengajuan' => $this->m_admin->countPengajuan()->result_array(),
            'sumTransaksi' => $this->m_admin->sumTransaksi()->result_array(),
        ];

        $this->load->view('templates/template_pemilik/header', $data);
        $this->load->view('templates/template_pemilik/sidebar', $data);
        $this->load->view('admin/pemilik/index', $data);
        $this->load->view('templates/template_pemilik/footer');
    }

    //laporan 

    public function laporan()
    {
        $data = [
                'title' => 'Laporan',
                'brandP' => 'Abata Farma',
                'brandS' => 'AF',
                'tampil' => $this->m_admin->tampilLaporan()->result_array(),
            ];

        $this->load->view('templates/template_pemilik/header', $data);
        $this->load->view('templates/template_pemilik/sidebar', $data);
        $this->load->view('admin/pemilik/v_lapPasien', $data);
        $this->load->view('templates/template_pemilik/footer');
    }

    public function cetakPasien()
    {
        $data = [
                'title' => 'Laporan',
                'brandP' => 'Abata Farma',
                'brandS' => 'AF',
                'tampil' => $this->m_admin->tampilLaporan()->result_array(),
            ];

        $this->load->view('admin/pemilik/v_cetak', $data);
    }
}