<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>assets/img/abata/abata.png" width="200" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register Petugas</h4>
                            </div>
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label for="frist_name">Nama Lengkap</label>
                                        <input type="hidden" name="id_petugas">
                                        <input id="frist_name" type="text" class="form-control" name="nama" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input id="email" type="text" class="form-control" name="username">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password2" class="d-block">Password</label>
                                        <input id="password2" type="password" class="form-control" name="password">
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">Alamat</label>
                                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">No.Telpon</label>
                                        <input id="password2" type="text" class="form-control" name="no_hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">Level</label>
                                        <select name="level" class="form-control select">
                                            <option value="Petugas">Petugas</option>
                                            <option value="Pemilik">Pemilik</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-primary btn-lg btn-block">
                                            Buat Akun
                                        </button>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted text-center">
                                    Sudah Mempunyai Akun? <a href="<?= base_url('loginPetugas/index') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>