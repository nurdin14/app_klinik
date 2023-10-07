<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        Form Transaksi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <?php $tanggal = date('Y-m-d'); ?>
                                <input type="text" name="tanggal" class="form-control" value="<?= $tanggal; ?>" readonly="">
                            </div>
                            <div class="form-group">
                                <label>No.Rm</label>
                                <input type="hidden" name="id_transaksi">
                                <select class="form-control select2" name="id_rekam">
                                    <?php foreach ($get as $g) : ?>
                                        <option value="<?= $g['id_rekam']; ?>"><?= $g['no_rekam_medik'] ?> - <?= $g['id_rekam']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pembayaran</label>
                                <input type="number" class="form-control" name="pembayaran">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="type">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= site_url('pembayaran/truncatePembayaran') ?>" class="btn btn-sm btn-success"><i class="fas fa-sync-alt"></i> Truncate</a>
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
                                        <th>Pembayaran</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['pembayaran']; ?></td>
                                            <td><?= $t['type']; ?></td>
                                            <td><?= $t['tanggal']; ?></td>
                                            <td>
                                                <a href="<?= site_url('pembayaran/hapusPembayaran/' . $t['id_transaksi']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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