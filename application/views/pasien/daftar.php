<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-9" style="margin-left: 11%;">
                <div class="card" style="margin-top: 1%;">
                    <div class="card-header">
                        <h3><i class="fas fa-home"></i></h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <?php foreach ($tampil as $d) : ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Pasien</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" readonly="" class="form-control" name="id_pasien" value="<?= $d['id_pasien'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pasien</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="nama" value="<?= $d['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="umur" class="form-control" value="<?= $d['umur'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?= $d['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.Telepon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="no_hp" class="form-control" value="<?= $d['no_hp'] ?>">
                                    </div>
                                </div>
                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <?php 

                                            $nomer = '6283150687527';
                                            $linkWA = 'https://wa.me/send?phone=' . $nomer . '&text=No Rekam Medis:%20' . $d['id_pasien']. '%20%0DNama:%20' . $d['nama'] . '%20%0DUmur:%20' . $d['umur'] . '%20%0DAlamat:%20' . $d['alamat'] . '%20%0DNo Hp:%20' . $d['no_hp'];
                                        ?>
                                        <a class="btn btn-primary" target="_blank" href="<?= $linkWA; ?>"> <i class="fas fa-paper-plane"></i> Kirim</a>
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