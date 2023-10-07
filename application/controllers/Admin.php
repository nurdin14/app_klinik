<?php

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "Login") {
            redirect('loginPetugas/index');
        }
        
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'brandP' => 'Abata Farma', 
            'brandS' => 'AF',
            // 'countPasien' => $this->m_admin->countPasien()->result_array(),
            // 'countPetugas' => $this->m_admin->countPetugas()->result_array(),
            // 'countPengajuan' => $this->m_admin->countPengajuan()->result_array(),
            // 'sumTransaksi' => $this->m_admin->sumTransaksi()->result_array(),


        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/template_admin/footer');
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

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/laporan/v_lapPasien', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function cetakPasien()
    {
        $data = [
            'title' => 'Laporan',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_admin->tampilLaporan()->result_array(),
        ];

        $this->load->view('admin/laporan/v_cetak', $data);
    }
}