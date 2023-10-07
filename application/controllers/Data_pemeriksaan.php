<?php

class Data_pemeriksaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataPemeriksaan');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pemeriksaan',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->tampilPasien()->result_array()
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pengajuan_pasien/v_pengajuan', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function ubahPemeriksaan($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->editPasien($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pengajuan_pasien/v_edit', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_rekam' => $this->input->post('id_rekam'),
                'id_pasien' => $this->input->post('id_pasien'),
                'tanggal' => $this->input->post('tanggal'),
                'no_rekam_medik' => $this->input->post('no_rekam_medik'),
                'anamnesa' => $this->input->post('anamnesa'),
                'diagnosa' => $this->input->post('diagnosa'),
                'terapi' => $this->input->post('terapi'),
            ];

            $this->m_dataPemeriksaan->addData($addData);
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
            redirect('data_pemeriksaan/index');
        }
    }

    public function editPemeriksaan($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->editPasien($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pengajuan_pasien/v_ubah', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_pasien' => $this->input->post('id_pasien'),
                'alergi_obat' => $this->input->post('alergi_obat')
            ];

            $this->m_dataPemeriksaan->upData($addData, $where);
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
            redirect('data_pemeriksaan/index');
        }
    }


    // rekam medis
    public function rekamMedis($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $data = [
            'title' => 'Data Rekam Medis Pasien',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->tampilRm($where)->result_array()
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/rekam_medis/v_rm', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function terapi($id_rekam)
    {
        $where = ['id_rekam' => $id_rekam];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->editRekam($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/rekam_medis/v_edit', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_rekam' => $this->input->post('id_rekam'),
                'id_pasien' => $this->input->post('id_pasien'),
                'tanggal' => $this->input->post('tanggal'),
                'no_rekam_medik' => $this->input->post('no_rekam_medik'),
                'anamnesa' => $this->input->post('anamnesa'),
                'diagnosa' => $this->input->post('diagnosa'),
                'terapi' => $this->input->post('terapi'),
            ];

            $this->m_dataPemeriksaan->ubahTerapi($addData, $where);
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
            redirect('data_pemeriksaan/rekamMedis');
        }
    }

    public function detail($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->editPasien($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/rekam_medis/v_detail', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function cetakRm($noRm)
    {
        $where = ['no_rekam_medik' => $noRm];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_dataPemeriksaan->cetakRm($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];
        $this->load->view('admin/rekam_medis/v_cetakRm', $data);
    }
}