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
                            <div class="col-sm-4">
                                <a href="<?= site_url('Admin_pasien/addPasien'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Pasien</a>
                            </div>
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
                                        </th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>No.Telpon</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['umur']; ?></td>
                                            <td><?= $t['no_hp']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td>
                                                <a href="<?= site_url('admin_pasien/ubahPasien/' . $t['id_pasien']); ?>" class="btn btn-sm btn-success">Ubah</a>
                                                <a href="<?= site_url('admin_pasien/hapusPasien/' . $t['id_pasien']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                                                <a href="<?= site_url('admin_pasien/cetakKartu/' . $t['id_pasien']); ?>" class="btn btn-sm btn-info">Cetak</a>
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