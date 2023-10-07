<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card" style="margin-top: 1%;">
                    <div class="card-header">
                        <h3><i class="fas fa-home"></i></h3>
                    </div>
                    <div class="card-body">
                        <center>
                            <h4>Klinik Abata Farma</h4>
                            <hr style="width: 50%;">
                        </center>
                        <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                            <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="70" src="<?= base_url() ?>assets/img/avatar/avatar-1.png">
                                <div class="media-body">
                                    <div class="media-right">
                                        <div class="text-primary">Kartu Pasien</div>
                                    </div>
                                    <?php foreach ($tampil as $d) : ?>
                                        <div class="media-description text-muted">
                                            <table>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>:</td>
                                                    <td><?= $d['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?= $d['alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Umur</td>
                                                    <td>:</td>
                                                    <td><?= $d['umur'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="media-links">
                                        <a href="<?= site_url('pasien/cetakKartu') ?>" class="text-danger" target="_blank">Cetak Kartu</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>