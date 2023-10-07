<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $icon; ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Pasien</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" name="id_rekam" value="<?= $d['id_rekam'] ?>">
                                    <?php foreach ($tampil as $d) : ?>
                                        <input type="number" class="form-control" name="id_pasien" value="<?= $d['id_pasien'] ?>" readonly="">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.Rm</label>
                                <div class="col-sm-12 col-md-7">
                                    <?php

                                    function randomString($length)
                                    {
                                        $str        = "";
                                        $characters = '123456789';
                                        $max        = strlen($characters) - 1;
                                        for ($i = 0; $i < $length;
                                            $i++
                                        ) {
                                            $rand = mt_rand(0, $max);
                                            $str .= $characters[$rand];
                                        }
                                        return $str;
                                    }

                                    ?>
                                    <input type="number" class="form-control" readonly="" name="no_rekam_medik" value="<?= randomString(4); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="tanggal" readonly value="<?= date('y-m-d'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Anamnesa</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="anamnesa"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Diagnosa</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="diagnosa"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Terapi</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="terapi"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                                    <a href="<?= site_url('data_pemeriksaan/index') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>