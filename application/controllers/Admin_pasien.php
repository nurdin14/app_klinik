<?php

class Admin_pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_adminPasien');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pasien',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_adminPasien->tampilPasien()->result_array()
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pasien/v_pasien', $data);
        $this->load->view('templates/template_admin/footer');
    }

    public function cetakKartu($id)
    {
        $where = ['id_pasien'=> $id];
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->db->get_where('tb_pasien', $where)->result_array()
        ];
        $this->load->view('pasien/cetakKartu', $data);
    }

    public function addPasien()
    {
        $data = [
            'title' => 'Form Tambah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pasien/v_add', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_pasien' => $this->input->post('id_pasien'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'alergi_obat' => '-'
            ];

            $this->m_adminPasien->addData($addData);
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
            redirect('admin_pasien/index');
        }
    }

    public function ubahPasien($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $data = [
            'title' => 'Form Ubah',
            'brandP' => 'Abata Farma',
            'brandS' => 'AF',
            'tampil' => $this->m_adminPasien->editPasien($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('templates/template_admin/header', $data);
        $this->load->view('templates/template_admin/sidebar', $data);
        $this->load->view('admin/pasien/v_edit', $data);
        $this->load->view('templates/template_admin/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_pasien' => $this->input->post('id_pasien'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
            ];

            $this->m_adminPasien->ubahData($addData, $where);
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
            redirect('admin_pasien/index');
        }
    }

    public function hapusPasien($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];
        $this->m_adminPasien->hapusPasien($where);
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
        redirect('admin_pasien/index');
    }

    public function cetakPasien()
    {
        $data = [
            'tampil' => $this->m_adminPasien->tampilPasien()->result_array()
        ];

        $this->load->view('admin/pasien/v_cetak', $data);
    }
}
