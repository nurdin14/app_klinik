
    <table border="0" style="width: 90%;" cellspacing="0" cellpadding="3">
        <tr>
            <td align="top">
                <h1>Apotek <br> <b>Abata Farma</b></h1>
                Jl. Gerakan Koperasi RT04/RW04 Kel. Majalengka Wetan
            </td>
            <td align="top">
                <b>Praktek Dokter Umum :</b><br>
                <b>dr.Adhityawan</b><br>
                SIP : 503/118/DPMPTSP/XII/2019 <br>
                <b>dr.Tia Indah Wardani</b> <br>
                SIP : 503/117/DPMPTSP/XII/2019
            </td>
        </tr>
    </table>
    <?php foreach($tampil as $t): ?>
    <table border="1" style="width: 90%;" cellspacing="0" cellpadding="3">
        <tr>
            <td align="center"><b>No. Rekam Medik : </b> <?= $t['no_rekam_medik'] ?></td>
        </tr>
    </table>
    <table border="0" style="width: 90%;" cellspacing="0" cellpadding="3">
        <tr>
            <td style="width: 80;">Nama</td>
            <td style="width: 10;">:</td>
            <td><?= $t['nama'] ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $t['umur'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $t['alamat'] ?></td>
        </tr>
        <tr>
            <td>No.Hp</td>
            <td>:</td>
            <td><?= $t['no_hp'] ?></td>
        </tr>
        <tr>
            <td>Alergi Obat</td>
            <td>:</td>
            <td><?= $t['alergi_obat'] ?></td>
        </tr>
    </table>

    <table border="1" cellspacing="0" cellpadding="3" style="width: 90%;">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Anamnesa</th>
                <th>Diagnosa</th>
                <th>Terapi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $t['tanggal'] ?></td>
                <td><?= $t['anamnesa'] ?></td>
                <td><?= $t['diagnosa'] ?></td>
                <td><?= $t['terapi'] ?></td>
            </tr>
        </tbody>
    </table>
    <?php endforeach; ?>

<script>
    window.print();
</script>