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
                                <a href="<?= site_url('admin_pasien/cetakPasien'); ?>" target="_blank" class="btn btn-icon icon-left btn-danger"><i class="fas fa-file"></i>Cetak Pasien</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        <th>No.Rm</th>
                                        <th>Tanggal</th>
                                        <th>Anamnesa</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                        <th>ID Pasien</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['no_rekam_medik']; ?></td>
                                            <td><?= $t['tanggal']; ?></td>
                                            <td><?= $t['anamnesa']; ?></td>
                                            <td><?= $t['diagnosa']; ?></td>
                                            <td><?= $t['terapi']; ?></td>
                                            <td><a href="<?= site_url('data_pemeriksaan/detail/'. $t['id_pasien']) ?>" class="btn btn-sm btn-info"><?= $t['id_pasien']; ?></a> </td>
                                            <td>
                                                <a href="<?= site_url('data_pemeriksaan/terapi/' . $t['id_rekam']); ?>" class="btn btn-sm btn-success">Terapi</a>
                                                <a href="<?= site_url('data_pemeriksaan/cetakRm/' . $t['no_rekam_medik']); ?>" class="btn btn-sm btn-danger" target="__blank">Cetak</a>
                                            </td>
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