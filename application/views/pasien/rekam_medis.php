<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card" style="margin-top: 1%;">
                    <div class="card-header">
                        <h3><i class="fas fa-home"></i></h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.Rm</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Anamnesa</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Terapi</th>
                                    </tr>
                                </thead>
                                <?php foreach ($tampil as $d) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $d['no_rekam_medik'] ?></td>
                                            <td><?= $d['nama'] ?></td>
                                            <td><?= $d['tanggal'] ?></td>
                                            <td><?= $d['anamnesa'] ?></td>
                                            <td><?= $d['diagnosa'] ?></td>
                                            <td><?= $d['terapi'] ?></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>