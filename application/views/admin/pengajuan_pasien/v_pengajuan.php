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
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>No.Telpon</th>
                                        <th>Alamat</th>
                                        <th>Alergi Obat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampil as $t) :
                                        $status = ""; 
                                        if($t['alergi_obat'] == '-'){
                                            $status = '<a href="' . site_url('data_pemeriksaan/editPemeriksaan/' . $t['id_pasien']) . '" class="btn btn-sm btn-primary">Pasien Baru</a>';
                                        } else if($t['alergi_obat'] == $t['alergi_obat']) {
                                            $status = '<a href="'.site_url('data_pemeriksaan/rekamMedis/'.$t['id_pasien']).'" class="btn btn-sm btn-warning">Pasien Lama</a>';
                                        }
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><?= $t['nama']; ?></td>
                                            <td><?= $t['umur']; ?></td>
                                            <td><?= $t['no_hp']; ?></td>
                                            <td><?= $t['alamat']; ?></td>
                                            <td><?= $t['alergi_obat']; ?></td>
                                            <td><?= $status; ?></td>
                                            <td>
                                                <a href="<?= site_url('data_pemeriksaan/ubahPemeriksaan/' . $t['id_pasien']); ?>" class="btn btn-sm btn-success">Periksa</a>
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