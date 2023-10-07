<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-4" style="margin-left: 11%;">
                                <a href="<?= site_url('pemilik/cetakPasien'); ?>" target="_blank" class="btn btn-icon icon-left btn-danger"><i class="fas fa-file"></i>Cetak Pasien</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>No.RM</th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>Alergi Obat</th>
                                        <th>Anamnesa</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['no_rekam_medik']; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['umur']; ?></td>
                                            <td><?= $t['alergi_obat']; ?></td>
                                            <td><?= $t['anamnesa']; ?></td>
                                            <td><?= $t['diagnosa']; ?></td>
                                            <td><?= $t['terapi']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>