<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-9" style="margin-left: 11%;">
                <div class="card" style="margin-top: 1%;">
                    <div class="card-header">
                        <h3><i class="fas fa-home"></i></h3>
                    </div>
                    <div class="card-body">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <form action="<?= base_url('pasien/ubahPasien') ?>" method="POST">
                            <?php foreach ($tampil as $d) : ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pasien</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" name="id_pasien" value="<?= $d['id_pasien'] ?>">
                                        <input type="text" class="form-control" name="nama" value="<?= $d['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?= $d['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="umur" class="form-control" value="<?= $d['umur'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.Telepon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="no_hp" class="form-control" value="<?= $d['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="username" class="form-control" value="<?= $d['username'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="password" class="form-control" value="<?= $d['password'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit" name="simpan"> <i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>