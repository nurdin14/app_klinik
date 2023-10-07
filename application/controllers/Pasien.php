<?php

class Pasien extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status_login') !="Login"){
            redirect('login/index');
        }

        $this->load->model('m_pasien');
    }

    public function index()
    {
        $where = $this->session->userdata('nama_pasien');
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilData($where)->result_array()
        ];

        $this->load->view('templates/template_pasien/header', $data);
        $this->load->view('templates/template_pasien/sidebar');
        $this->load->view('pasien/index');
        $this->load->view('templates/template_pasien/footer');

    }
    public function rekamMedis()
    {
        $where = $this->session->userdata('nama_pasien');
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilRekam($where)->result_array()
        ];

        $this->load->view('templates/template_pasien/header', $data);
        $this->load->view('templates/template_pasien/sidebar');
        $this->load->view('pasien/rekam_medis', $data);
        $this->load->view('templates/template_pasien/footer');

    }

    public function kartuPasien()
    {
        $where = $this->session->userdata('nama_pasien');
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilData($where)->result_array()
        ];

        $this->load->view('templates/template_pasien/header', $data);
        $this->load->view('templates/template_pasien/sidebar');
        $this->load->view('pasien/kartu_pasien', $data);
        $this->load->view('templates/template_pasien/footer');

    }

    public function akun($id_pasien)
    {
        $where = ['id_pasien' => $id_pasien];

        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilUbah($where)->result_array()
        ];

        $this->load->view('templates/template_pasien/header', $data);
        $this->load->view('templates/template_pasien/sidebar', $data);
        $this->load->view('pasien/akun', $data);
        $this->load->view('templates/template_pasien/footer');
    }

    public function ubahPasien(){
        if (isset($_POST['simpan'])) {
            $ubah_data = array(
                'id_pasien' => $this->input->post('id_pasien'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $where = ['id_pasien' => $ubah_data['id_pasien']];

            $this->m_pasien->ubahPasien($ubah_data, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-primary alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Profile Berhasil Di Ubah
                      </div>
                    </div>
            ');

            foreach ($where as $w) :
                redirect('pasien/akun/' . $w['id_pasien']);
            endforeach;
        }
    }

    public function daftar()
    {
        $where = $this->session->userdata('nama_pasien');
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilData($where)->result_array()
        ];

        $this->load->view('templates/template_pasien/header', $data);
        $this->load->view('templates/template_pasien/sidebar');
        $this->load->view('pasien/daftar', $data);
        $this->load->view('templates/template_pasien/footer');
    }

    public function cetakKartu(){
        $where = $this->session->userdata('nama_pasien');
        $data = [
            'title' => 'Klinik Abata Farma',
            'tampil' => $this->m_pasien->tampilData($where)->result_array()
        ];

        $this->load->view('pasien/cetakKartu', $data);
    }
}