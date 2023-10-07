<?php

class Admin_petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminPetugas');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Petugas',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_adminPetugas->tampilPetugas()->result_array()
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/petugas/v_petugas', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function addPetugas()
    {
        $data = [
            'title' => 'Form Tambah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/petugas/v_add', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_petugas' => $this->input->post('id_petugas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level')
            ];

            $this->m_adminPetugas->addData($addData);
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
            redirect('admin_petugas/index');
        }
    }

    public function ubahPetugas($id_petugas)
    {
        $where = ['id_petugas' => $id_petugas];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_adminPetugas->editPetugas($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/petugas/v_edit', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_petugas' => $this->input->post('id_petugas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level')
            ];

            $this->m_adminPetugas->ubahData($addData, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Ubah.
                      </div>
                    </div>
            ');
            redirect('admin_petugas/index');
        }
    }

    public function hapusPetugas($id_petugas)
    {
        $where = ['id_petugas' => $id_petugas];
        $this->m_adminPetugas->hapusPetugas($where);
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
        redirect('admin_petugas/index');
    }

    public function cetakPetugas()
    {
        $data = [
            'tampil' => $this->m_adminPetugas->tampilPetugas()->result_array()
        ];

        $this->load->view('admin/petugas/v_cetak', $data);
    }
}
