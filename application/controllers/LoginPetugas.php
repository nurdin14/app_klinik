<?php

class LoginPetugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_loginPetugas');
    }

    public function index()
    {
        $data = [
            'title' => 'Login Petugas',
        ];

        $this->load->view('templates/template_pasien/header-login', $data);
        $this->load->view('login_petugas/index');
        $this->load->view('templates/template_pasien/footer');
    }

    public function authLogin()
    {
        if (isset($_POST['login'])) {

            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $cek = $this->m_loginPetugas->authLogin($data);

            if ($cek->num_rows() > 0) {
                $c = $cek->row_array();
                if ($c['level'] == 'Petugas') {
                    $dataLogin = [
                        'nama_petugas' => $data['username'],
                        'status_login' => 'Login'
                    ];

                    $this->session->set_userdata($dataLogin);
                    redirect('admin/index');
                } else if ($c['level'] == 'Pemilik') {
                    $dataLogin = [
                        'nama_pemilik' => $data['username'],
                        'status_login' => 'Login'
                    ];

                    $this->session->set_userdata($dataLogin);
                    redirect('pemilik/index');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '
                <div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                              Username dan Password tidak terdaftar
                          </div>
                        </div>
                '
                );
                redirect('loginPetugas/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginPetugas/index');
    }

    public function lupaPassword()
    {
        $data = [
            'title' => 'Lupa Password'
        ];

        $this->load->view('templates/template_pasien/header-login', $data);
        $this->load->view('login_petugas/lupa_password');
        $this->load->view('templates/template_pasien/footer');

        if (isset($_POST['simpan'])) {

            $username = $this->input->post('username');
            $cek      = $this->m_loginPetugas->lupaPassword($username)->num_rows();

            if ($cek > 0) {
                $tampil = $this->m_loginPetugas->lupaPassword($username)->result_array();
                foreach ($tampil as $t) :
                    $p = $t['password'];
                    echo '<div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                            Password Anda : ' . $p . ' / 
                            <a href="' . site_url('loginPetugas/index') . '">Login </a>
                          </div>
                        </div>';
                endforeach;
            } else {
                echo '<div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                            Password tidak ditemukan
                          </div>
                        </div>';
            }
        }
    }

    public function register()
    {
        $data = [
            'title' => 'Buat Akun',
        ];

        $this->load->view('templates/template_pasien/header-login', $data);
        $this->load->view('login_petugas/regis');
        $this->load->view('templates/template_pasien/footer');

        if (isset($_POST['simpan'])) {
            $data = [
                'id_petugas' => $this->input->post('id_petugas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => $this->input->post('level'),
            ];

            $this->m_loginPetugas->addRegister($data);
            redirect('loginPetugas/index');
        }
    }
}