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
                                <a href="<?= site_url('Admin_petugas/addPetugas'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Petugas</a>
                            </div>
                            <div class="col-sm-4" style="margin-left: 11%;">
                                <a href="<?= site_url('admin_petugas/cetakPetugas'); ?>" target="_blank" class="btn btn-icon icon-left btn-danger"><i class="fas fa-file"></i>Cetak Petugas</a>
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
                                        <th>Nama Petugas</th>
                                        <th>No.Telpon</th>
                                        <th>Alamat</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['no_hp']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td><?= $t['username']; ?></td>
                                            <td><?= $t['password']; ?></td>
                                            <td>
                                                <a href="<?= site_url('admin_petugas/ubahPetugas/' . $t['id_petugas']); ?>" class="btn btn-sm btn-success">Ubah</a>
                                                <a href="<?= site_url('admin_petugas/hapusPetugas/' . $t['id_petugas']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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